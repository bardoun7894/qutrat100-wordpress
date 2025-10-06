<?php
/**
 * Admin Results Template
 */

if (!defined('ABSPATH')) {
    exit;
}

$database = new AQS_Database();

// Get filter parameters
$category_filter = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
$date_from = isset($_GET['date_from']) ? sanitize_text_field($_GET['date_from']) : '';
$date_to = isset($_GET['date_to']) ? sanitize_text_field($_GET['date_to']) : '';

// Get results with filters
$results = $database->get_results($category_filter, $date_from, $date_to);
$categories = $database->get_categories();
$stats = $database->get_statistics();
?>

<div class="wrap">
    <h1>📊 نتائج الاختبارات</h1>
    
    <!-- Statistics Cards -->
    <div class="aqs-stats-grid">
        <div class="aqs-stat-card">
            <div class="aqs-stat-icon">👥</div>
            <div class="aqs-stat-content">
                <h3><?php echo number_format($stats['total_participants']); ?></h3>
                <p>إجمالي المشاركين</p>
            </div>
        </div>
        
        <div class="aqs-stat-card">
            <div class="aqs-stat-icon">📝</div>
            <div class="aqs-stat-content">
                <h3><?php echo number_format($stats['total_attempts']); ?></h3>
                <p>إجمالي المحاولات</p>
            </div>
        </div>
        
        <div class="aqs-stat-card">
            <div class="aqs-stat-icon">📈</div>
            <div class="aqs-stat-content">
                <h3><?php echo number_format($stats['average_score'], 1); ?>%</h3>
                <p>متوسط النتائج</p>
            </div>
        </div>
        
        <div class="aqs-stat-card">
            <div class="aqs-stat-icon">⭐</div>
            <div class="aqs-stat-content">
                <h3><?php echo number_format($stats['highest_score'], 1); ?>%</h3>
                <p>أعلى نتيجة</p>
            </div>
        </div>
    </div>
    
    <!-- Filters -->
    <div class="aqs-filters-section">
        <h3>🔍 تصفية النتائج</h3>
        <form method="get" class="aqs-filters-form">
            <input type="hidden" name="page" value="aqs-results">
            
            <div class="aqs-filter-group">
                <label for="category">الفئة:</label>
                <select name="category" id="category">
                    <option value="">جميع الفئات</option>
                    <?php foreach ($categories as $cat) : ?>
                        <option value="<?php echo esc_attr($cat->name); ?>" 
                                <?php selected($category_filter, $cat->name); ?>>
                            <?php echo esc_html($cat->name); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="aqs-filter-group">
                <label for="date_from">من تاريخ:</label>
                <input type="date" name="date_from" id="date_from" value="<?php echo esc_attr($date_from); ?>">
            </div>
            
            <div class="aqs-filter-group">
                <label for="date_to">إلى تاريخ:</label>
                <input type="date" name="date_to" id="date_to" value="<?php echo esc_attr($date_to); ?>">
            </div>
            
            <div class="aqs-filter-actions">
                <button type="submit" class="button button-primary">🔍 تصفية</button>
                <a href="<?php echo admin_url('admin.php?page=aqs-results'); ?>" class="button">🔄 إعادة تعيين</a>
                <button type="button" class="button" onclick="exportResults()">📥 تصدير CSV</button>
            </div>
        </form>
    </div>
    
    <!-- Results Table -->
    <div class="aqs-results-section">
        <h3>📋 تفاصيل النتائج</h3>
        
        <?php if (empty($results)) : ?>
            <div class="aqs-no-results">
                <p>لا توجد نتائج للعرض</p>
            </div>
        <?php else : ?>
            <div class="aqs-results-table-container">
                <table class="wp-list-table widefat fixed striped">
                    <thead>
                        <tr>
                            <th>المشارك</th>
                            <th>البريد الإلكتروني</th>
                            <th>الفئة</th>
                            <th>النتيجة</th>
                            <th>الوقت المستغرق</th>
                            <th>تاريخ الاختبار</th>
                            <th>الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $result) : ?>
                            <tr>
                                <td>
                                    <strong><?php echo esc_html($result->participant_name); ?></strong>
                                </td>
                                <td><?php echo esc_html($result->participant_email); ?></td>
                                <td>
                                    <span class="aqs-category-badge">
                                        <?php echo esc_html($result->category); ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="aqs-score-display">
                                        <span class="aqs-score-percentage 
                                              <?php echo $result->score_percentage >= 70 ? 'high' : ($result->score_percentage >= 50 ? 'medium' : 'low'); ?>">
                                            <?php echo number_format($result->score_percentage, 1); ?>%
                                        </span>
                                        <small>(<?php echo $result->correct_answers; ?>/<?php echo $result->total_questions; ?>)</small>
                                    </div>
                                </td>
                                <td>
                                    <?php 
                                    $minutes = floor($result->time_taken / 60);
                                    $seconds = $result->time_taken % 60;
                                    echo sprintf('%02d:%02d', $minutes, $seconds);
                                    ?>
                                </td>
                                <td>
                                    <?php echo date_i18n('Y/m/d H:i', strtotime($result->completed_at)); ?>
                                </td>
                                <td>
                                    <button type="button" class="button button-small" 
                                            onclick="viewResultDetails(<?php echo $result->id; ?>)">
                                        👁️ عرض التفاصيل
                                    </button>
                                    <button type="button" class="button button-small button-link-delete" 
                                            onclick="deleteResult(<?php echo $result->id; ?>)">
                                        🗑️ حذف
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Result Details Modal -->
<div id="aqs-result-modal" class="aqs-modal" style="display: none;">
    <div class="aqs-modal-content">
        <div class="aqs-modal-header">
            <h3>تفاصيل النتيجة</h3>
            <span class="aqs-modal-close" onclick="closeResultModal()">&times;</span>
        </div>
        <div class="aqs-modal-body" id="aqs-result-details">
            <!-- Content will be loaded via AJAX -->
        </div>
    </div>
</div>

<style>
.aqs-stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.aqs-stat-card {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 20px;
    transition: transform 0.3s ease;
}

.aqs-stat-card:hover {
    transform: translateY(-2px);
}

.aqs-stat-icon {
    font-size: 40px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    color: white;
}

.aqs-stat-content h3 {
    margin: 0;
    font-size: 28px;
    font-weight: bold;
    color: #333;
}

.aqs-stat-content p {
    margin: 5px 0 0 0;
    color: #666;
    font-size: 14px;
}

.aqs-filters-section {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.aqs-filters-section h3 {
    margin: 0 0 20px 0;
    color: #333;
}

.aqs-filters-form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: end;
}

.aqs-filter-group {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.aqs-filter-group label {
    font-weight: bold;
    color: #333;
    font-size: 14px;
}

.aqs-filter-group select,
.aqs-filter-group input {
    padding: 8px 12px;
    border: 2px solid #e1e5e9;
    border-radius: 5px;
    font-size: 14px;
}

.aqs-filter-actions {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.aqs-results-section {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.aqs-results-section h3 {
    margin: 0 0 20px 0;
    color: #333;
}

.aqs-results-table-container {
    overflow-x: auto;
}

.aqs-category-badge {
    background: #e3f2fd;
    color: #1976d2;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    font-weight: bold;
}

.aqs-score-display {
    text-align: center;
}

.aqs-score-percentage {
    font-weight: bold;
    font-size: 16px;
    padding: 4px 8px;
    border-radius: 4px;
}

.aqs-score-percentage.high {
    background: #e8f5e8;
    color: #2e7d32;
}

.aqs-score-percentage.medium {
    background: #fff3e0;
    color: #f57c00;
}

.aqs-score-percentage.low {
    background: #ffebee;
    color: #d32f2f;
}

.aqs-no-results {
    text-align: center;
    padding: 40px;
    color: #666;
}

.aqs-modal {
    position: fixed;
    z-index: 100000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.aqs-modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 0;
    border-radius: 10px;
    width: 80%;
    max-width: 800px;
    max-height: 80vh;
    overflow-y: auto;
}

.aqs-modal-header {
    padding: 20px 25px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.aqs-modal-header h3 {
    margin: 0;
    color: #333;
}

.aqs-modal-close {
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    color: #999;
}

.aqs-modal-close:hover {
    color: #333;
}

.aqs-modal-body {
    padding: 25px;
}

@media (max-width: 768px) {
    .aqs-stats-grid {
        grid-template-columns: 1fr;
    }
    
    .aqs-filters-form {
        flex-direction: column;
        align-items: stretch;
    }
    
    .aqs-filter-actions {
        justify-content: center;
    }
    
    .aqs-modal-content {
        width: 95%;
        margin: 2% auto;
    }
}
</style>

<script>
function viewResultDetails(resultId) {
    const modal = document.getElementById('aqs-result-modal');
    const detailsContainer = document.getElementById('aqs-result-details');
    
    // Show loading
    detailsContainer.innerHTML = '<div style="text-align: center; padding: 40px;">جاري التحميل...</div>';
    modal.style.display = 'block';
    
    // Fetch result details via AJAX
    fetch(ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'aqs_get_result_details',
            result_id: resultId,
            nonce: '<?php echo wp_create_nonce("aqs_admin_nonce"); ?>'
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            detailsContainer.innerHTML = data.data.html;
        } else {
            detailsContainer.innerHTML = '<div style="text-align: center; padding: 40px; color: #d32f2f;">حدث خطأ في تحميل التفاصيل</div>';
        }
    })
    .catch(error => {
        detailsContainer.innerHTML = '<div style="text-align: center; padding: 40px; color: #d32f2f;">حدث خطأ في تحميل التفاصيل</div>';
    });
}

function closeResultModal() {
    document.getElementById('aqs-result-modal').style.display = 'none';
}

function deleteResult(resultId) {
    if (!confirm('هل أنت متأكد من حذف هذه النتيجة؟')) {
        return;
    }
    
    fetch(ajaxurl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'aqs_delete_result',
            result_id: resultId,
            nonce: '<?php echo wp_create_nonce("aqs_admin_nonce"); ?>'
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert('حدث خطأ في حذف النتيجة');
        }
    })
    .catch(error => {
        alert('حدث خطأ في حذف النتيجة');
    });
}

function exportResults() {
    const params = new URLSearchParams(window.location.search);
    params.set('action', 'aqs_export_results');
    params.set('nonce', '<?php echo wp_create_nonce("aqs_admin_nonce"); ?>');
    
    window.open(ajaxurl + '?' + params.toString(), '_blank');
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('aqs-result-modal');
    if (event.target === modal) {
        closeResultModal();
    }
}
</script>