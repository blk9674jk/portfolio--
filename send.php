<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$form_data = $_SESSION;

$form_type = $form_data['form_type'] ?? '';
$subject = '';
$body = "Re-Step Gardenのウェブサイトからお申し込みがありました。\n\n";

if ($form_type === '資料請求・お問い合わせ') {
    $subject = "【Re-Step Garden】資料請求・お問い合わせがありました";
    $body .= "■ お問い合わせ種別: 資料請求・お問い合わせ\n";
    $body .= "-------------------------------------------------\n";
    $body .= "【お問い合わせされた方の情報】\n";
    $body .= "お名前: " . ($form_data['name'] ?? '') . "\n";
    $body .= "フリガナ: " . ($form_data['furigana'] ?? '') . "\n";
    $body .= "郵便番号: " . ($form_data['postal_code'] ?? '') . "\n";
    $body .= "ご住所: " . ($form_data['address'] ?? '') . "\n";
    $body .= "お電話番号: " . ($form_data['tel'] ?? '') . "\n";
    $body .= "メールアドレス: " . ($form_data['email'] ?? '') . "\n";
    $body .= "ご希望の返答方法: " . ($form_data['reply_method'] ?? '') . "\n\n";
    $body .= "【ご入居を検討されている方の情報】\n";
    $body .= "年齢: " . ($form_data['resident_age'] ?? '') . "\n";
    $body .= "性別: " . ($form_data['resident_gender'] ?? '') . "\n";
    $body .= "間柄: " . ($form_data['relationship'] ?? '') . "\n";
    $body .= "現在の要介護度: " . ($form_data['care_level'] ?? '') . "\n";
    $body .= "資料請求: " . ($form_data['brochure_request'] ?? '') . "\n";
    $body .= "今後の情報提供: " . ($form_data['info_subscription'] ?? '') . "\n\n";
    $body .= "【お問い合わせ内容】\n" . ($form_data['message'] ?? '') . "\n";

} elseif ($form_type === '見学予約') {
    $subject = "【Re-Step Garden】見学予約のお申し込みがありました";
    $body .= "■ お問い合わせ種別: 見学予約\n";
    $body .= "-------------------------------------------------\n";
    $body .= "ご希望の内容: " . ($form_data['request_type'] ?? '') . "\n\n";
    $body .= "【申込者様の情報】\n";
    $body .= "お名前: " . ($form_data['applicant_name'] ?? '') . "\n";
    $body .= "フリガナ: " . ($form_data['applicant_furigana'] ?? '') . "\n";
    $body .= "お電話番号: " . ($form_data['applicant_tel'] ?? '') . "\n";
    $body .= "メールアドレス: " . ($form_data['applicant_email'] ?? '') . "\n";
    $body .= "間柄: " . ($form_data['applicant_relationship'] ?? '') . "\n\n";
    $body .= "【入居予定者様の情報】\n";
    $body .= "お名前: " . ($form_data['resident_name'] ?? '') . "\n";
    $body .= "フリガナ: " . ($form_data['resident_furigana'] ?? '') . "\n";
    $body .= "年齢: " . ($form_data['resident_age_apply'] ?? '') . "\n";
    $body .= "性別: " . ($form_data['resident_gender_apply'] ?? '') . "\n";
    $body .= "介護保険: " . ($form_data['insurance_status'] ?? '') . "\n";
    $body .= "要介護度: " . ($form_data['resident_care_level'] ?? '') . "\n";
    $body .= "入居希望時期: " . ($form_data['move_in_time'] ?? '') . "\n";
    $body .= "見学参加: " . ($form_data['resident_tour_participation'] ?? '') . "\n\n";
    $body .= "【見学希望日時など】\n";
    $body .= "希望日: " . ($form_data['tour_date'] ?? '') . "\n";
    $body .= "希望時間: " . ($form_data['tour_time'] ?? '') . "\n";
    $body .= "参加人数: " . ($form_data['tour_participants'] ?? '') . "\n\n";
    $body .= "【ご質問・ご不明点】\n" . ($form_data['questions'] ?? '') . "\n";
}

$to = "blk_9674_jk@outlook.com";

$headers = "From: no-reply@re-step-garden.com\r\n";
$headers .= "Reply-To: " . ($form_data['email'] ?? $form_data['applicant_email'] ?? '') . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

header("Location: thanks.php");
exit;

session_destroy();

?>