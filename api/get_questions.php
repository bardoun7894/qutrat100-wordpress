<?php
header('Content-Type: application/json');
require_once '../includes/db.php';

// Get questions from database
$query = "SELECT * FROM quiz_questions ORDER BY id ASC";
$result = $conn->query($query);

$questions = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Convert options from separate columns to array
        $options = array(
            $row['option_a'],
            $row['option_b'],
            $row['option_c'],
            $row['option_d']
        );
        
        $question = array(
            'id' => $row['id'],
            'question' => $row['question_text'],
            'options' => $options,
            'correct' => array_search($row['correct_answer'], ['A', 'B', 'C', 'D']),
            'explanation' => $row['explanation'],
            'category' => $row['category'],
            'difficulty' => $row['difficulty']
        );
        
        // Add image if exists
        if (!empty($row['image_path'])) {
            $question['image'] = $row['image_path'];
        }
        
        $questions[] = $question;
    }
}

echo json_encode($questions);
$conn->close();
?>