<?php
session_start();

if (!isset($_GET['mode']) || $_GET['mode'] !== 'edit') {
    $_SESSION = array();
    session_destroy();
    session_start();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>資料請求・お問い合わせ | Re-Step Garden</title>
    <link rel="icon" href="img/favicon.webp" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@2.0.2/reset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <?php include 'partials/header.php'; ?>

    <main class="sub-page-main">
        <section class="page-hero">
            <div class="container">
                <h1 class="page-title">資料請求・お問い合わせ</h1>
            </div>
        </section>

        <div class="contact-guidance">
            </div>
        
        <section class="contact-form-section">
            <div class="container">
                <div class="form-container">
                    <form action="confirm.php" method="POST" novalidate>
                        <input type="hidden" name="form_type" value="資料請求・お問い合わせ">
                        
                        <div class="form-block">
                            <h3 class="form-block-title">お問い合わせをされる方の情報</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>お名前<span class="required">必須</span></dt>
                                    <dd><input type="text" name="name" placeholder="例）田中 一郎" required value="<?php echo htmlspecialchars($_SESSION['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>フリガナ<span class="required">必須</span></dt>
                                    <dd><input type="text" name="furigana" placeholder="例）タナカ イチロウ" required value="<?php echo htmlspecialchars($_SESSION['furigana'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>郵便番号<span class="required">必須</span></dt>
                                    <dd><input type="tel" name="postal_code" placeholder="例）3210215" required onkeyup="AjaxZip3.zip2addr(this,'','address','address');" value="<?php echo htmlspecialchars($_SESSION['postal_code'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>ご住所<span class="required">必須</span></dt>
                                    <dd><input type="text" name="address" required value="<?php echo htmlspecialchars($_SESSION['address'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>お電話番号</dt>
                                    <dd><input type="tel" name="tel" placeholder="例）09012345678" value="<?php echo htmlspecialchars($_SESSION['tel'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>メールアドレス<span class="required">必須</span></dt>
                                    <dd><input type="email" name="email" placeholder="example@email.com" required value="<?php echo htmlspecialchars($_SESSION['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                </div>
                                <p class="error-message"></p>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>ご希望の返答方法</dt>
                                    <dd class="radio-group">
                                        <input type="radio" id="reply-tel" name="reply_method" value="電話" <?php if( !isset($_SESSION['reply_method']) || (isset($_SESSION['reply_method']) && $_SESSION['reply_method'] === '電話') ) echo 'checked'; ?>>
                                        <label for="reply-tel">電話</label>
                                        <input type="radio" id="reply-mail" name="reply_method" value="メール" <?php if(isset($_SESSION['reply_method']) && $_SESSION['reply_method'] === 'メール') echo 'checked'; ?>>
                                        <label for="reply-mail">メール</label>
                                    </dd>
                                </div>
                            </div>
                        </div>

                        <div class="form-block">
                            <h3 class="form-block-title">ご入居を検討されている方の情報・お問い合わせ内容</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>年齢</dt>
                                    <dd><input type="text" name="resident_age" placeholder="例）80歳" value="<?php echo htmlspecialchars($_SESSION['resident_age'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>性別</dt>
                                    <dd class="radio-group">
                                        <input type="radio" id="gender-male" name="resident_gender" value="男性" <?php if(isset($_SESSION['resident_gender']) && $_SESSION['resident_gender'] === '男性') echo 'checked'; ?>>
                                        <label for="gender-male">男性</label>
                                        <input type="radio" id="gender-female" name="resident_gender" value="女性" <?php if(isset($_SESSION['resident_gender']) && $_SESSION['resident_gender'] === '女性') echo 'checked'; ?>>
                                        <label for="gender-female">女性</label>
                                    </dd>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group">
                                    <dt>お問い合わせの方との間柄</dt>
                                    <dd>
                                        <select name="relationship">
                                            <option value="" <?php if(empty($_SESSION['relationship'])) echo 'selected'; ?>>--選択してください--</option>
                                            <option value="ご本人" <?php if(isset($_SESSION['relationship']) && $_SESSION['relationship'] === 'ご本人') echo 'selected'; ?>>ご本人</option>
                                            <option value="実父・実母" <?php if(isset($_SESSION['relationship']) && $_SESSION['relationship'] === '実父・実母') echo 'selected'; ?>>実父・実母</option>
                                            <option value="義父・義母" <?php if(isset($_SESSION['relationship']) && $_SESSION['relationship'] === '義父・義母') echo 'selected'; ?>>義父・義母</option>
                                            <option value="親戚" <?php if(isset($_SESSION['relationship']) && $_SESSION['relationship'] === '親戚') echo 'selected'; ?>>親戚</option>
                                            <option value="その他" <?php if(isset($_SESSION['relationship']) && $_SESSION['relationship'] === 'その他') echo 'selected'; ?>>その他</option>
                                        </select>
                                    </dd>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group">
                                    <dt>現在の要介護度</dt>
                                    <dd>
                                        <select name="care_level">
                                            <option value="" <?php if(empty($_SESSION['care_level'])) echo 'selected'; ?>>--選択してください--</option>
                                            <option value="自立" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '自立') echo 'selected'; ?>>自立</option>
                                            <option value="要支援1" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '要支援1') echo 'selected'; ?>>要支援1</option>
                                            <option value="要支援2" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '要支援2') echo 'selected'; ?>>要支援2</option>
                                            <option value="要介護1" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '要介護1') echo 'selected'; ?>>要介護1</option>
                                            <option value="要介護2" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '要介護2') echo 'selected'; ?>>要介護2</option>
                                            <option value="要介護3" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '要介護3') echo 'selected'; ?>>要介護3</option>
                                            <option value="要介護4" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '要介護4') echo 'selected'; ?>>要介護4</option>
                                            <option value="要介護5" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '要介護5') echo 'selected'; ?>>要介護5</option>
                                            <option value="未申請" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '未申請') echo 'selected'; ?>>未申請</option>
                                            <option value="申請中" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === '申請中') echo 'selected'; ?>>申請中</option>
                                            <option value="その他" <?php if(isset($_SESSION['care_level']) && $_SESSION['care_level'] === 'その他') echo 'selected'; ?>>その他</option>
                                        </select>
                                    </dd>
                                </div>
                            </div>
                             <div class="form-row">
                                <div class="form-group">
                                    <dt>資料請求</dt>
                                    <dd class="radio-group">
                                        <input type="radio" id="brochure-yes" name="brochure_request" value="希望する" <?php if( !isset($_SESSION['brochure_request']) || (isset($_SESSION['brochure_request']) && $_SESSION['brochure_request'] === '希望する') ) echo 'checked'; ?>>
                                        <label for="brochure-yes">希望する</label>
                                        <input type="radio" id="brochure-no" name="brochure_request" value="希望しない" <?php if(isset($_SESSION['brochure_request']) && $_SESSION['brochure_request'] === '希望しない') echo 'checked'; ?>>
                                        <label for="brochure-no">希望しない</label>
                                    </dd>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>今後の情報提供</dt>
                                    <dd class="radio-group">
                                        <input type="radio" id="info-yes" name="info_subscription" value="希望する" <?php if( !isset($_SESSION['info_subscription']) || (isset($_SESSION['info_subscription']) && $_SESSION['info_subscription'] === '希望する') ) echo 'checked'; ?>>
                                        <label for="info-yes">希望する</label>
                                        <input type="radio" id="info-no" name="info_subscription" value="希望しない" <?php if(isset($_SESSION['info_subscription']) && $_SESSION['info_subscription'] === '希望しない') echo 'checked'; ?>>
                                        <label for="info-no">希望しない</label>
                                    </dd>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <dt>お問い合わせ内容<span class="required">必須</span></dt>
                                    <dd><textarea name="message" rows="8" placeholder="ご質問やご相談したいこと、その他ご希望などをご自由にご記入ください。" required><?php echo htmlspecialchars($_SESSION['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea></dd>
                                </div>
                                <p class="error-message"></p>
                            </div>
                        </div>

                        <div class="privacy-policy-agreement">
                            <label>
                                <input type="checkbox" name="privacy_policy" value="agreed" required>
                                <span><a href="#" class="js-open-modal">個人情報の取り扱いについて</a>に同意する</span>
                            </label>
                            <p class="error-message"></p>
                        </div>
                        
                        <div class="submit-button-wrapper">
                            <button type="submit">入力内容を確認する</button>
                        </div>
                         <p class="form-caution">
                            ※このフォームはデモです。実際には送信されません。
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include 'partials/footer.php'; ?>
</body>
</html>