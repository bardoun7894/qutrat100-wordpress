<?php
/**
 * Admin Settings Template
 */

if (!defined('ABSPATH')) {
    exit;
}

// Get current settings
$settings = get_option('aqs_settings', array(
    'quiz_time_limit' => 30,
    'questions_per_quiz' => 10,
    'passing_score' => 70,
    'show_correct_answers' => 1,
    'allow_retakes' => 1,
    'require_login' => 0,
    'collect_participant_info' => 1,
    'email_notifications' => 0,
    'admin_email' => get_option('admin_email'),
    'quiz_title' => 'اختبار اللغة العربية',
    'quiz_description' => 'اختبر معرفتك باللغة العربية من خلال هذا الاختبار التفاعلي',
    'success_message' => 'تهانينا! لقد أكملت الاختبار بنجاح',
    'fail_message' => 'للأسف لم تحصل على الدرجة المطلوبة، يمكنك المحاولة مرة أخرى',
    'certificate_enabled' => 0,
    'certificate_template' => 'default'
));
?>

<div class="wrap">
    <h1>⚙️ إعدادات نظام الاختبارات</h1>
    
    <form method="post" action="" id="aqs-settings-form">
        <?php wp_nonce_field('aqs_save_settings', 'aqs_settings_nonce'); ?>
        <input type="hidden" name="action" value="save_settings">
        
        <div class="aqs-settings-container">
            <!-- General Settings -->
            <div class="aqs-settings-section">
                <h2>🔧 الإعدادات العامة</h2>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">عنوان الاختبار</th>
                        <td>
                            <input type="text" name="quiz_title" value="<?php echo esc_attr($settings['quiz_title']); ?>" 
                                   class="regular-text" />
                            <p class="description">العنوان الذي سيظهر في صفحة الاختبار</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">وصف الاختبار</th>
                        <td>
                            <textarea name="quiz_description" rows="3" class="large-text"><?php echo esc_textarea($settings['quiz_description']); ?></textarea>
                            <p class="description">وصف مختصر للاختبار</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">الحد الزمني (بالدقائق)</th>
                        <td>
                            <input type="number" name="quiz_time_limit" value="<?php echo esc_attr($settings['quiz_time_limit']); ?>" 
                                   min="1" max="180" class="small-text" />
                            <p class="description">الوقت المسموح لإكمال الاختبار (1-180 دقيقة)</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">عدد الأسئلة</th>
                        <td>
                            <input type="number" name="questions_per_quiz" value="<?php echo esc_attr($settings['questions_per_quiz']); ?>" 
                                   min="1" max="100" class="small-text" />
                            <p class="description">عدد الأسئلة في كل اختبار (1-100 سؤال)</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">درجة النجاح (%)</th>
                        <td>
                            <input type="number" name="passing_score" value="<?php echo esc_attr($settings['passing_score']); ?>" 
                                   min="1" max="100" class="small-text" />
                            <p class="description">النسبة المئوية المطلوبة للنجاح (1-100%)</p>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Quiz Behavior -->
            <div class="aqs-settings-section">
                <h2>🎯 سلوك الاختبار</h2>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">عرض الإجابات الصحيحة</th>
                        <td>
                            <label>
                                <input type="checkbox" name="show_correct_answers" value="1" 
                                       <?php checked($settings['show_correct_answers'], 1); ?> />
                                عرض الإجابات الصحيحة بعد انتهاء الاختبار
                            </label>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">السماح بإعادة المحاولة</th>
                        <td>
                            <label>
                                <input type="checkbox" name="allow_retakes" value="1" 
                                       <?php checked($settings['allow_retakes'], 1); ?> />
                                السماح للمستخدمين بإعادة الاختبار
                            </label>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">تسجيل الدخول مطلوب</th>
                        <td>
                            <label>
                                <input type="checkbox" name="require_login" value="1" 
                                       <?php checked($settings['require_login'], 1); ?> />
                                يجب على المستخدمين تسجيل الدخول قبل الاختبار
                            </label>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">جمع معلومات المشارك</th>
                        <td>
                            <label>
                                <input type="checkbox" name="collect_participant_info" value="1" 
                                       <?php checked($settings['collect_participant_info'], 1); ?> />
                                طلب الاسم والبريد الإلكتروني قبل بدء الاختبار
                            </label>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Messages -->
            <div class="aqs-settings-section">
                <h2>💬 الرسائل</h2>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">رسالة النجاح</th>
                        <td>
                            <textarea name="success_message" rows="3" class="large-text"><?php echo esc_textarea($settings['success_message']); ?></textarea>
                            <p class="description">الرسالة التي تظهر عند النجاح في الاختبار</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">رسالة الفشل</th>
                        <td>
                            <textarea name="fail_message" rows="3" class="large-text"><?php echo esc_textarea($settings['fail_message']); ?></textarea>
                            <p class="description">الرسالة التي تظهر عند عدم النجاح في الاختبار</p>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Email Notifications -->
            <div class="aqs-settings-section">
                <h2>📧 إشعارات البريد الإلكتروني</h2>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">تفعيل الإشعارات</th>
                        <td>
                            <label>
                                <input type="checkbox" name="email_notifications" value="1" 
                                       <?php checked($settings['email_notifications'], 1); ?> />
                                إرسال إشعارات بريد إلكتروني عند إكمال الاختبارات
                            </label>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">بريد المدير</th>
                        <td>
                            <input type="email" name="admin_email" value="<?php echo esc_attr($settings['admin_email']); ?>" 
                                   class="regular-text" />
                            <p class="description">البريد الإلكتروني لاستقبال الإشعارات</p>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Certificates -->
            <div class="aqs-settings-section">
                <h2>🏆 الشهادات</h2>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">تفعيل الشهادات</th>
                        <td>
                            <label>
                                <input type="checkbox" name="certificate_enabled" value="1" 
                                       <?php checked($settings['certificate_enabled'], 1); ?> />
                                إنشاء شهادات للمشاركين الناجحين
                            </label>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">قالب الشهادة</th>
                        <td>
                            <select name="certificate_template">
                                <option value="default" <?php selected($settings['certificate_template'], 'default'); ?>>القالب الافتراضي</option>
                                <option value="modern" <?php selected($settings['certificate_template'], 'modern'); ?>>القالب الحديث</option>
                                <option value="classic" <?php selected($settings['certificate_template'], 'classic'); ?>>القالب الكلاسيكي</option>
                            </select>
                            <p class="description">اختر تصميم الشهادة</p>
                        </td>
                    </tr>
                </table>
            </div>
            
            <!-- Advanced Settings -->
            <div class="aqs-settings-section">
                <h2>🔬 إعدادات متقدمة</h2>
                
                <table class="form-table">
                    <tr>
                        <th scope="row">إعادة تعيين البيانات</th>
                        <td>
                            <button type="button" class="button button-secondary" onclick="resetQuizData()">
                                🗑️ حذف جميع النتائج
                            </button>
                            <p class="description">حذف جميع نتائج الاختبارات (لا يمكن التراجع عن هذا الإجراء)</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">تصدير البيانات</th>
                        <td>
                            <button type="button" class="button button-secondary" onclick="exportAllData()">
                                📥 تصدير جميع البيانات
                            </button>
                            <p class="description">تصدير جميع الأسئلة والنتائج كملف JSON</p>
                        </td>
                    </tr>
                    
                    <tr>
                        <th scope="row">استيراد البيانات</th>
                        <td>
                            <input type="file" id="import_file" accept=".json" />
                            <button type="button" class="button button-secondary" onclick="importData()">
                                📤 استيراد البيانات
                            </button>
                            <p class="description">استيراد الأسئلة من ملف JSON</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        
        <p class="submit">
            <input type="submit" name="submit" id="submit" class="button button-primary button-large" 
                   value="💾 حفظ الإعدادات" />
        </p>
    </form>
</div>

<style>
.aqs-settings-container {
    max-width: 1000px;
}

.aqs-settings-section {
    background: white;
    margin-bottom: 30px;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.aqs-settings-section h2 {
    margin: 0 0 20px 0;
    padding-bottom: 15px;
    border-bottom: 2px solid #f0f0f0;
    color: #333;
    font-size: 20px;
}

.form-table th {
    width: 200px;
    font-weight: bold;
    color: #333;
}

.form-table td {
    padding: 15px 10px;
}

.form-table input[type="text"],
.form-table input[type="email"],
.form-table input[type="number"],
.form-table textarea,
.form-table select {
    border: 2px solid #e1e5e9;
    border-radius: 5px;
    padding: 8px 12px;
    font-size: 14px;
    transition: border-color 0.3s ease;
}

.form-table input[type="text"]:focus,
.form-table input[type="email"]:focus,
.form-table input[type="number"]:focus,
.form-table textarea:focus,
.form-table select:focus {
    outline: none;
    border-color: #667eea;
}

.form-table .description {
    color: #666;
    font-style: italic;
    margin-top: 5px;
}

.form-table label {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
}

.form-table input[type="checkbox"] {
    margin: 0;
    transform: scale(1.2);
}

.button-large {
    padding: 12px 24px !important;
    font-size: 16px !important;
    height: auto !important;
}

@media (max-width: 768px) {
    .form-table th,
    .form-table td {
        display: block;
        width: 100%;
        padding: 10px 0;
    }
    
    .form-table th {
        border-bottom: none;
        padding-bottom: 5px;
    }
    
    .form-table td {
        border-top: none;
        padding-top: 0;
    }
}
</style>

<script>
function resetQuizData() {
    if (!confirm('هل أنت متأكد من حذف جميع نتائج الاختبارات؟ لا يمكن التراجع عن هذا الإجراء!')) {
        return;
    }
    
    if (!confirm('تأكيد أخير: سيتم حذف جميع البيانات نهائياً!')) {
        return;
    }
    
    fetch(ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'aqs_reset_data',
            nonce: '<?php echo wp_create_nonce("aqs_admin_nonce"); ?>'
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('تم حذف جميع البيانات بنجاح');
        } else {
            alert('حدث خطأ في حذف البيانات');
        }
    })
    .catch(error => {
        alert('حدث خطأ في حذف البيانات');
    });
}

function exportAllData() {
    const params = new URLSearchParams({
        action: 'aqs_export_all_data',
        nonce: '<?php echo wp_create_nonce("aqs_admin_nonce"); ?>'
    });
    
    window.open(ajaxurl + '?' + params.toString(), '_blank');
}

function importData() {
    const fileInput = document.getElementById('import_file');
    const file = fileInput.files[0];
    
    if (!file) {
        alert('يرجى اختيار ملف للاستيراد');
        return;
    }
    
    if (file.type !== 'application/json') {
        alert('يجب أن يكون الملف من نوع JSON');
        return;
    }
    
    const formData = new FormData();
    formData.append('action', 'aqs_import_data');
    formData.append('nonce', '<?php echo wp_create_nonce("aqs_admin_nonce"); ?>');
    formData.append('import_file', file);
    
    fetch(ajaxurl, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('تم استيراد البيانات بنجاح');
            location.reload();
        } else {
            alert('حدث خطأ في استيراد البيانات: ' + (data.data || 'خطأ غير معروف'));
        }
    })
    .catch(error => {
        alert('حدث خطأ في استيراد البيانات');
    });
}

// Form validation
document.getElementById('aqs-settings-form').addEventListener('submit', function(e) {
    const timeLimit = parseInt(document.querySelector('input[name="quiz_time_limit"]').value);
    const questionsCount = parseInt(document.querySelector('input[name="questions_per_quiz"]').value);
    const passingScore = parseInt(document.querySelector('input[name="passing_score"]').value);
    
    if (timeLimit < 1 || timeLimit > 180) {
        alert('الحد الزمني يجب أن يكون بين 1 و 180 دقيقة');
        e.preventDefault();
        return;
    }
    
    if (questionsCount < 1 || questionsCount > 100) {
        alert('عدد الأسئلة يجب أن يكون بين 1 و 100 سؤال');
        e.preventDefault();
        return;
    }
    
    if (passingScore < 1 || passingScore > 100) {
        alert('درجة النجاح يجب أن تكون بين 1 و 100%');
        e.preventDefault();
        return;
    }
});
</script>