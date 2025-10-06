<?php
/**
 * WordPress Quiz API Endpoint
 * Place this file in your WordPress root directory
 */

// Load WordPress
require_once('wp-load.php');
require_once('wp-config-quiz.php');

// Set JSON header
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

// Security check
if (!defined('ABSPATH')) {
    http_response_code(403);
    echo json_encode(['error' => 'Access denied']);
    exit;
}

// Handle different API endpoints
$action = isset($_GET['action']) ? sanitize_text_field($_GET['action']) : 'get_questions';

switch ($action) {
    case 'get_questions':
        get_quiz_questions();
        break;
    case 'submit_result':
        submit_quiz_result();
        break;
    default:
        http_response_code(400);
        echo json_encode(['error' => 'Invalid action']);
        break;
}

function get_quiz_questions() {
    $conn = get_quiz_db_connection();
    if (!$conn) {
        http_response_code(500);
        echo json_encode(['error' => 'Database connection failed']);
        return;
    }
    
    // Get questions with optional filtering
    $category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
    $difficulty = isset($_GET['difficulty']) ? sanitize_text_field($_GET['difficulty']) : '';
    $limit = isset($_GET['limit']) ? intval($_GET['limit']) : 0;
    
    $query = "SELECT * FROM quiz_questions WHERE 1=1";
    $params = [];
    $types = '';
    
    if (!empty($category)) {
        $query .= " AND category = ?";
        $params[] = $category;
        $types .= 's';
    }
    
    if (!empty($difficulty)) {
        $query .= " AND difficulty = ?";
        $params[] = $difficulty;
        $types .= 's';
    }
    
    $query .= " ORDER BY RAND()"; // Randomize questions
    
    if ($limit > 0) {
        $query .= " LIMIT ?";
        $params[] = $limit;
        $types .= 'i';
    }
    
    $stmt = $conn->prepare($query);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
    
    $questions = [];
    while ($row = $result->fetch_assoc()) {
        $options = [
            $row['option_a'],
            $row['option_b'],
            $row['option_c'],
            $row['option_d']
        ];
        
        $question = [
            'id' => $row['id'],
            'question' => $row['question_text'],
            'options' => $options,
            'correct' => array_search($row['correct_answer'], ['A', 'B', 'C', 'D']),
            'explanation' => $row['explanation'],
            'category' => $row['category'],
            'difficulty' => $row['difficulty']
        ];
        
        // Add image URL if exists
        if (!empty($row['image_path'])) {
            $question['image'] = home_url('/wp-content/uploads/quiz-images/' . basename($row['image_path']));
        }
        
        $questions[] = $question;
    }
    
    echo json_encode($questions);
    $conn->close();
}

function submit_quiz_result() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(405);
        echo json_encode(['error' => 'Method not allowed']);
        return;
    }
    
    $conn = get_quiz_db_connection();
    if (!$conn) {
        http_response_code(500);
        echo json_encode(['error' => 'Database connection failed']);
        return;
    }
    
    $input = json_decode(file_get_contents('php://input'), true);
    
    $score = intval($input['score'] ?? 0);
    $total = intval($input['total'] ?? 0);
    $time = intval($input['time'] ?? 0);
    $user_ip = $_SERVER['REMOTE_ADDR'] ?? '';
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    $stmt = $conn->prepare("INSERT INTO quiz_results (user_ip, score, total_questions, time_taken, user_agent) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("siiis", $user_ip, $score, $total, $time, $user_agent);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Result saved successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Failed to save result']);
    }
    
    $conn->close();
}
?>