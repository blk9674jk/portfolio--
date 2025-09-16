<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST' && empty($_SESSION)) {
    header('Location: contact.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST as $key => $value) {
        $_SESSION[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

$form_type = $_SESSION['form_type'] ?? '';
$page_title = '';
$form_structure = [];

$form_definitions = [
    '資料請求・お問い合わせ' => [
        'title' => '資料請求・お問い合わせ 内容確認',
        'sections' => [
            'お問い合わせをされる方の情報' => [
                'name' => 'お名前', 'furigana' => 'フリガナ', 'postal_code' => '郵便番号',
                'address' => 'ご住所', 'tel' => 'お電話番号', 'email' => 'メールアドレス',
                'reply_method' => 'ご希望の返答方法',
            ],
            'ご入居を検討されている方の情報・お問い合わせ内容' => [
                'resident_age' => '年齢', 'resident_gender' => '性別',
                'relationship' => 'お問い合わせの方との間柄', 'care_level' => '現在の要介護度',
                'brochure_request' => '資料請求', 'info_subscription' => '今後の情報提供',
                'message' => 'お問い合わせ内容',
            ]
        ]
    ],
    '見学予約' => [
        'title' => '見学予約 内容確認',
        'sections' => [
            'ご希望の内容' => [
                'request_type' => 'ご希望の内容',
            ],
            '申込者様について' => [
                'applicant_name' => 'お名前', 'applicant_furigana' => 'フリガナ',
                'applicant_tel' => 'お電話番号', 'applicant_email' => 'メールアドレス',
                'applicant_relationship' => '入居予定者との間柄',
            ],
            'ご入居を検討されている方について' => [
                'resident_name' => 'お名前', 'resident_furigana' => 'フリガナ',
                'resident_age_apply' => '年齢', 'resident_gender_apply' => '性別',
                'insurance_status' => '介護保険', 'resident_care_level' => '要介護度',
                'move_in_time' => '入居希望時期', 'resident_tour_participation' => '入居予定者の見学参加',
            ],
            'ご希望の見学日時など' => [
                'tour_date' => 'ご希望日時', 'tour_time' => 'ご希望時間',
                'tour_participants' => '施設見学参加人数', 'questions' => 'ご質問・ご不明点',
            ]
        ]
    ]
];

if (isset($form_definitions[$form_type])) {
    $page_title = $form_definitions[$form_type]['title'];
    $form_structure = $form_definitions[$form_type]['sections'];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?> | Re-Step Garden</title>
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
                <h1 class="page-title"><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></h1>
            </div>
        </section>
        
        <section class="contact-form-section">
            <div class="container">
                <p style="text-align:center; margin-bottom: 2rem; line-height: 1.8;">
                    ご入力内容をご確認いただき、よろしければ「この内容で送信する」ボタンを押してください。<br>
                    修正する場合は「入力画面に戻る」ボタンを押してください。
                </p>
                <div class="form-container">
                    <table class="confirm-table">
                        <?php foreach ($form_structure as $section_title => $fields): ?>
                            <?php
                                $has_data_in_section = false;
                                foreach ($fields as $key => $label) {
                                    if (isset($_SESSION[$key]) && $_SESSION[$key] !== '') {
                                        $has_data_in_section = true;
                                        break;
                                    }
                                }
                            ?>

                            <?php if ($has_data_in_section): ?>
                                <tr class="confirm-section-header">
                                    <th colspan="2"><?php echo htmlspecialchars($section_title, ENT_QUOTES, 'UTF-8'); ?></th>
                                </tr>
                                <?php foreach ($fields as $key => $label): ?>
                                    <?php if (isset($_SESSION[$key]) && $_SESSION[$key] !== ''): ?>
                                        <tr>
                                            <th><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></th>
                                            <td>
                                                <?php
                                                    if ($key === 'tour_date' && !empty($_SESSION['tour_time'])) {
                                                        echo nl2br(htmlspecialchars($_SESSION[$key] . ' ' . $_SESSION['tour_time'], ENT_QUOTES, 'UTF-8'));
                                                    } elseif ($key !== 'tour_time') {
                                                        echo nl2br(htmlspecialchars($_SESSION[$key], ENT_QUOTES, 'UTF-8'));
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
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
                            $back_url = 'contact.php';
                            if ($_SESSION['form_type'] === '見学予約') {
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