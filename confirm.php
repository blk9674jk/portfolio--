<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

foreach ($_POST as $key => $value) {
    $_SESSION[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$form_type = $_SESSION['form_type'] ?? '';
$page_title = '';
if ($form_type === '資料請求・お問い合わせ') {
    $page_title = '資料請求・お問い合わせ 内容確認';
} elseif ($form_type === '見学予約') {
    $page_title = '見学予約 内容確認';
}

$labels = [
    'form_type' => 'お問い合わせ種別', 'name' => 'お名前', 'furigana' => 'フリガナ', 'postal_code' => '郵便番号',
    'address' => 'ご住所', 'tel' => 'お電話番号', 'email' => 'メールアドレス', 'reply_method' => 'ご希望の返答方法',
    'resident_age' => '年齢', 'resident_gender' => '性別', 'relationship' => 'お問い合わせの方との間柄', 'care_level' => '現在の要介護度',
    'brochure_request' => '資料請求', 'info_subscription' => '今後の情報提供', 'message' => 'お問い合わせ内容', 'request_type' => 'ご希望の内容',
    'applicant_name' => '申込者様 お名前', 'applicant_furigana' => '申込者様 フリガナ', 'applicant_tel' => '申込者様 お電話番号',
    'applicant_email' => '申込者様 メールアドレス', 'applicant_relationship' => '入居予定者との間柄', 'resident_name' => '入居予定者様 お名前',
    'resident_furigana' => '入居予定者様 フリガナ', 'resident_age_apply' => '入居予定者様 年齢', 'resident_gender_apply' => '入居予定者様 性別',
    'insurance_status' => '介護保険', 'resident_care_level' => '要介護度', 'move_in_time' => '入居希望時期',
    'resident_tour_participation' => '入居予定者の見学参加', 'tour_date' => 'ご希望日時', 'tour_time' => 'ご希望時間',
    'tour_participants' => '施設見学参加人数', 'questions' => 'ご質問・ご不明点',
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo $page_title; ?> | Re-Step Garden</title>
    <link rel="icon" href="img/favicon.webp" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@2.0.2/reset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    
    <?php include 'partials/header.php'; ?>

    <main class="sub-page-main">
        <section class="page-hero">
            <div class="container">
                <h1 class="page-title"><?php echo $page_title; ?></h1>
            </div>
        </section>
        
        <section class="contact-form-section">
            <div class="container">
                <p style="text-align:center; margin-bottom: 2rem; line-height: 1.8;">
                    ご入力内容をご確認いただき、よろしければ「この内容で送信する」ボタンを押してください。<br>
                    修正する場合は「入力画面に戻る」ボタンを押してください。
                </p>
                <div class="form-container">
                    <table class="confirm-table" style="width: 100%; border-collapse: collapse;">
                        <?php foreach ($labels as $key => $label): ?>
                            <?php if (isset($_SESSION[$key]) && $_SESSION[$key] !== ''): ?>
                                <tr style="border-bottom: 1px solid #eee;">
                                    <th style="width: 30%; padding: 1rem; text-align: left; background-color: #f9f9f9; font-weight: 700;"><?php echo $label; ?></th>
                                    <td style="width: 70%; padding: 1rem;"><?php echo nl2br($_SESSION[$key]); ?></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </table>

                    <div class="confirm-buttons">
                        <form action="send.php" method="POST">
                            <button type="submit" class="btn btn--primary">
                                <i data-lucide="send"></i>
                                <span>この内容で送信する</span>
                            </button>
                        </form>
                        
                        <?php                        
                            $back_url = '';
                            if ($_SESSION['form_type'] === '資料請求・お問い合わせ') {
                                $back_url = 'contact.php';
                            } elseif ($_SESSION['form_type'] === '見学予約') {
                                $back_url = 'apply.php';
                            }
                        ?>
                        <a href="<?php echo $back_url; ?>?mode=edit" class="btn btn--secondary">
                            <i data-lucide="arrow-left"></i>
                            <span>入力画面に戻る</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'partials/footer.php'; ?>
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
      lucide.createIcons();
    </script>
</body>
</html>