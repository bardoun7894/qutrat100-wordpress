<?php
$page_title = "لوحة الإدارة - إدارة الأسئلة والصور";
$page_description = "لوحة تحكم لإضافة وتعديل أسئلة الاختبارات والصور";
$additional_css = ['assets/css/admin.css'];
$additional_js = ['assets/js/admin.js'];

// Include database connection
require_once 'includes/db.php';

// Simple authentication (in production, use proper authentication)
session_start();
$admin_password = "admin123"; // Change this to a secure password

if (isset($_POST['login'])) {
    if ($_POST['password'] === $admin_password) {
        $_SESSION['admin_logged_in'] = true;
    } else {
        $login_error = "كلمة المرور غير صحيحة";
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}

// Handle question submission
if (isset($_POST['add_question']) && isset($_SESSION['admin_logged_in'])) {
    // Handle image upload
    $image_path = '';
    if (isset($_FILES['question_image']) && $_FILES['question_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $file_extension = pathinfo($_FILES['question_image']['name'], PATHINFO_EXTENSION);
        $file_name = uniqid() . '.' . $file_extension;
        $image_path = $upload_dir . $file_name;
        
        if (move_uploaded_file($_FILES['question_image']['tmp_name'], $image_path)) {
            // Image uploaded successfully
        } else {
            $image_path = '';
        }
    }
    
    // Convert correct answer index to letter
    $correct_answers = ['A', 'B', 'C', 'D'];
    $correct_answer = $correct_answers[(int)$_POST['correct_answer']];
    
    // Insert question into database
    $stmt = $conn->prepare("INSERT INTO quiz_questions (question_text, option_a, option_b, option_c, option_d, correct_answer, explanation, category, difficulty, image_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ssssssssss", 
            $_POST['question_text'],
            $_POST['option_a'],
            $_POST['option_b'],
            $_POST['option_c'],
            $_POST['option_d'],
            $correct_answer,
            $_POST['explanation'],
            $_POST['category'],
            $_POST['difficulty'],
            $image_path
        );
        
        if ($stmt->execute()) {
            $success_message = "تم إضافة السؤال بنجاح!";
        } else {
            $error_message = "حدث خطأ في حفظ السؤال: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        $error_message = "حدث خطأ في إعداد الاستعلام: " . $conn->error;
    }
}

// Handle question deletion
if (isset($_POST['delete_question']) && isset($_SESSION['admin_logged_in'])) {
    $question_id = (int)$_POST['question_id'];
    
    // Delete question from database
    $stmt = $conn->prepare("DELETE FROM quiz_questions WHERE id = ?");
    
    if ($stmt) {
        $stmt->bind_param("i", $question_id);
        
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $success_message = "تم حذف السؤال بنجاح!";
            } else {
                $error_message = "لم يتم العثور على السؤال المحدد";
            }
        } else {
            $error_message = "حدث خطأ في حذف السؤال: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        $error_message = "حدث خطأ في إعداد الاستعلام: " . $conn->error;
    }
}

// Load existing questions for display
$existing_questions = [];
$result = $conn->query("SELECT * FROM quiz_questions ORDER BY id DESC");

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Convert database format to display format
        $existing_questions[] = [
            'id' => $row['id'],
            'question' => $row['question_text'],
            'image' => $row['image_path'],
            'options' => [
                $row['option_a'],
                $row['option_b'],
                $row['option_c'],
                $row['option_d']
            ],
            'correct' => array_search($row['correct_answer'], ['A', 'B', 'C', 'D']),
            'explanation' => $row['explanation'],
            'category' => $row['category'],
            'difficulty' => $row['difficulty'],
            'created_at' => $row['created_at']
        ];
    }
}

include 'includes/header.php';
?>

<style>
/* Admin-specific styles */
.admin-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px;
}

.login-form {
    max-width: 400px;
    margin: 100px auto;
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
    padding: 20px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.admin-tabs {
    display: flex;
    gap: 10px;
    margin-bottom: 30px;
    background: white;
    padding: 10px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.tab-button {
    padding: 15px 25px;
    border: none;
    background: transparent;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    color: #6c757d;
}

.tab-button.active {
    background: linear-gradient(135deg, #3b82f6, #1e40af); /* Blue gradient */
    color: white;
}

.tab-content {
    display: none;
}

.tab-content.active {
    display: block;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #1f2937; /* Gray-800 */
}

.form-control {
    width: 100%;
    padding: 15px;
    border: 2px solid #e9ecef;
    border-radius: 10px;
    font-size: 1rem;
    transition: all 0.3s ease;
    font-family: 'Cairo', sans-serif;
}

.form-control:focus {
    border-color: #3b82f6; /* Blue-500 */
    outline: none;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); /* Blue shadow */
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.question-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-right: 5px solid #3b82f6; /* Blue-500 */
}

.question-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 15px;
}

.question-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}

.meta-badge {
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
}

.category-badge {
    background: #e3f2fd;
    color: #1976d2;
}

.difficulty-badge {
    background: #fff3e0;
    color: #f57c00;
}

.options-list {
    list-style: none;
    margin: 15px 0;
}

.options-list li {
    padding: 8px 15px;
    margin: 5px 0;
    border-radius: 8px;
    background: #f8f9fa;
}

.options-list li.correct {
    background: #d4edda;
    color: #155724;
    font-weight: 600;
}

.question-image {
    max-width: 200px;
    height: auto;
    border-radius: 10px;
    margin: 15px 0;
}

.alert {
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    font-weight: 600;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.btn-danger {
    background: linear-gradient(135deg, #dc3545, #c82333);
    color: white;
    padding: 8px 15px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 0.9rem;
}

.btn-danger:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(220, 53, 69, 0.3);
}

@media (max-width: 768px) {
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .admin-header {
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }
    
    .admin-tabs {
        flex-direction: column;
    }
}
</style>

<main class="main-content">
    <div class="admin-container">
        <?php if (!isset($_SESSION['admin_logged_in'])): ?>
            <!-- Login Form -->
            <div class="login-form bg-white rounded-2xl shadow-xl p-8 max-w-md mx-auto">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-shield text-white text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">تسجيل دخول الإدارة</h2>
                    <p class="text-gray-600 text-sm">أدخل كلمة المرور للوصول إلى لوحة التحكم</p>
                </div>
                
                <?php if (isset($login_error)): ?>
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 text-sm">
                        <i class="fas fa-exclamation-triangle mr-2"></i>
                        <?php echo $login_error; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" class="space-y-6">
                    <div class="form-group">
                        <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                            <i class="fas fa-lock mr-2 text-gray-500"></i>
                            كلمة المرور
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200 text-right" 
                            placeholder="أدخل كلمة المرور"
                            required
                        >
                    </div>
                    <button 
                        type="submit" 
                        name="login" 
                        class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 transform hover:scale-[1.02] focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    >
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        دخول إلى لوحة التحكم
                    </button>
                </form>
                
                <div class="mt-6 text-center">
                    <p class="text-xs text-gray-500">
                        <i class="fas fa-shield-alt mr-1"></i>
                        محمي بأمان عالي
                    </p>
                </div>
            </div>
        <?php else: ?>
            <!-- Admin Dashboard -->
            <div class="admin-header bg-white rounded-xl shadow-lg p-6 mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-blue-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-cogs text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">لوحة إدارة الأسئلة</h1>
                        <p class="text-gray-600 text-sm">إدارة وتنظيم بنك الأسئلة</p>
                    </div>
                </div>
                <form method="POST" style="margin: 0;">
                    <button 
                        type="submit" 
                        name="logout" 
                        class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 px-4 rounded-lg transition-colors duration-200 flex items-center gap-2"
                    >
                        <i class="fas fa-sign-out-alt"></i>
                        خروج
                    </button>
                </form>
            </div>

            <?php if (isset($success_message)): ?>
                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500"></i>
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($error_message)): ?>
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 flex items-center gap-2">
                    <i class="fas fa-exclamation-triangle text-red-500"></i>
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <!-- Admin Tabs -->
            <div class="admin-tabs bg-white rounded-xl shadow-lg p-2 mb-8 flex flex-col sm:flex-row gap-2">
                <button 
                    class="tab-button active flex-1 bg-gradient-to-r from-primary-500 to-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-200 flex items-center justify-center gap-2" 
                    onclick="showTab('add-question')"
                >
                    <i class="fas fa-plus"></i>
                    <span class="hidden sm:inline">إضافة سؤال جديد</span>
                    <span class="sm:hidden">إضافة</span>
                </button>
                <button 
                    class="tab-button flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 px-6 rounded-lg transition-all duration-200 flex items-center justify-center gap-2" 
                    onclick="showTab('manage-questions')"
                >
                    <i class="fas fa-list"></i>
                    <span class="hidden sm:inline">إدارة الأسئلة (<?php echo count($existing_questions); ?>)</span>
                    <span class="sm:hidden">إدارة (<?php echo count($existing_questions); ?>)</span>
                </button>
            </div>

            <!-- Add Question Tab -->
            <div id="add-question" class="tab-content active">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-plus-circle"></i> إضافة سؤال جديد</h2>
                        <p class="card-subtitle">أضف سؤالاً جديداً إلى بنك الأسئلة</p>
                    </div>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="question_text">نص السؤال:</label>
                            <textarea id="question_text" name="question_text" class="form-control" rows="3" required placeholder="اكتب نص السؤال هنا..."></textarea>
                        </div>

                        <div class="form-group">
                            <label for="question_image">صورة السؤال (اختيارية):</label>
                            <input type="file" id="question_image" name="question_image" class="form-control" accept="image/*">
                            <small style="color: #6c757d; margin-top: 5px; display: block;">يمكنك إضافة صورة توضيحية للسؤال (PNG, JPG, GIF)</small>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="option_a">الخيار أ:</label>
                                <input type="text" id="option_a" name="option_a" class="form-control" required placeholder="الخيار الأول">
                            </div>
                            <div class="form-group">
                                <label for="option_b">الخيار ب:</label>
                                <input type="text" id="option_b" name="option_b" class="form-control" required placeholder="الخيار الثاني">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="option_c">الخيار ج:</label>
                                <input type="text" id="option_c" name="option_c" class="form-control" required placeholder="الخيار الثالث">
                            </div>
                            <div class="form-group">
                                <label for="option_d">الخيار د:</label>
                                <input type="text" id="option_d" name="option_d" class="form-control" required placeholder="الخيار الرابع">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="correct_answer">الإجابة الصحيحة:</label>
                                <select id="correct_answer" name="correct_answer" class="form-control" required>
                                    <option value="">اختر الإجابة الصحيحة</option>
                                    <option value="0">الخيار أ</option>
                                    <option value="1">الخيار ب</option>
                                    <option value="2">الخيار ج</option>
                                    <option value="3">الخيار د</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category">التصنيف:</label>
                                <select id="category" name="category" class="form-control" required>
                                    <option value="">اختر التصنيف</option>
                                    <option value="verbal">القدرة اللفظية</option>
                                    <option value="quantitative">القدرة الكمية</option>
                                    <option value="logical">التفكير المنطقي</option>
                                    <option value="spatial">القدرة المكانية</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="difficulty">مستوى الصعوبة:</label>
                            <select id="difficulty" name="difficulty" class="form-control" required>
                                <option value="">اختر مستوى الصعوبة</option>
                                <option value="easy">سهل</option>
                                <option value="medium">متوسط</option>
                                <option value="hard">صعب</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="explanation">شرح الإجابة:</label>
                            <textarea id="explanation" name="explanation" class="form-control" rows="3" placeholder="اكتب شرحاً مفصلاً للإجابة الصحيحة..."></textarea>
                        </div>

                        <button type="submit" name="add_question" class="btn btn-primary">
                            <i class="fas fa-save"></i> حفظ السؤال
                        </button>
                    </form>
                </div>
            </div>

            <!-- Manage Questions Tab -->
            <div id="manage-questions" class="tab-content">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title"><i class="fas fa-list"></i> إدارة الأسئلة الموجودة</h2>
                        <p class="card-subtitle">عرض وإدارة جميع الأسئلة المحفوظة</p>
                    </div>

                    <?php if (empty($existing_questions)): ?>
                        <div style="text-align: center; padding: 40px; color: #6c757d;">
                            <i class="fas fa-question-circle" style="font-size: 3rem; margin-bottom: 20px;"></i>
                            <h3>لا توجد أسئلة محفوظة</h3>
                            <p>ابدأ بإضافة أسئلة جديدة من التبويب الأول</p>
                        </div>
                    <?php else: ?>
                        <?php foreach ($existing_questions as $question): ?>
                            <div class="question-card">
                                <div class="question-header">
                                    <h4>السؤال رقم <?php echo $question['id']; ?></h4>
                                    <form method="POST" style="margin: 0;" onsubmit="return confirm('هل أنت متأكد من حذف هذا السؤال؟')">
                                        <input type="hidden" name="question_id" value="<?php echo $question['id']; ?>">
                                        <button type="submit" name="delete_question" class="btn-danger">
                                            <i class="fas fa-trash"></i> حذف
                                        </button>
                                    </form>
                                </div>

                                <div class="question-meta">
                                    <span class="meta-badge category-badge"><?php echo $question['category']; ?></span>
                                    <span class="meta-badge difficulty-badge"><?php echo $question['difficulty']; ?></span>
                                    <small style="color: #6c757d;">تم الإنشاء: <?php echo $question['created_at']; ?></small>
                                </div>

                                <p><strong>السؤال:</strong> <?php echo htmlspecialchars($question['question']); ?></p>

                                <?php if (!empty($question['image'])): ?>
                                    <img src="<?php echo $question['image']; ?>" alt="صورة السؤال" class="question-image">
                                <?php endif; ?>

                                <ul class="options-list">
                                    <?php foreach ($question['options'] as $index => $option): ?>
                                        <li class="<?php echo $index === $question['correct'] ? 'correct' : ''; ?>">
                                            <?php echo chr(65 + $index); ?>. <?php echo htmlspecialchars($option); ?>
                                            <?php if ($index === $question['correct']): ?>
                                                <i class="fas fa-check" style="margin-right: 10px;"></i>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                                <?php if (!empty($question['explanation'])): ?>
                                    <p><strong>شرح الإجابة:</strong> <?php echo htmlspecialchars($question['explanation']); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<script>
function showTab(tabName) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(tab => {
        tab.classList.add('hidden');
    });
    
    // Remove active class from all tab buttons
    document.querySelectorAll('.tab-button').forEach(button => {
        button.classList.remove('bg-gradient-to-r', 'from-primary-600', 'to-blue-600', 'text-white');
        button.classList.add('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
    });
    
    // Show selected tab content
    document.getElementById(tabName).classList.remove('hidden');
    
    // Add active class to clicked button
    event.target.classList.remove('bg-gray-100', 'text-gray-700', 'hover:bg-gray-200');
    event.target.classList.add('bg-gradient-to-r', 'from-primary-600', 'to-blue-600', 'text-white');
}

// Preview image before upload
document.getElementById('question_image').addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            // Remove existing preview
            const existingPreview = document.querySelector('.image-preview');
            if (existingPreview) {
                existingPreview.remove();
            }
            
            // Create new preview
            const preview = document.createElement('div');
            preview.className = 'image-preview';
            preview.innerHTML = `
                <img src="${e.target.result}" style="max-width: 200px; height: auto; border-radius: 10px; margin-top: 10px;">
                <p style="font-size: 0.9rem; color: #6c757d; margin-top: 5px;">معاينة الصورة</p>
            `;
            
            // Insert preview after file input
            e.target.parentNode.appendChild(preview);
        };
        reader.readAsDataURL(file);
    }
});
</script>

<?php 
// Close database connection
$conn->close();
include 'includes/footer.php'; 
?>