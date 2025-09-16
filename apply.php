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
    <title>見学予約・体験入居 | Re-Step Garden</title>
    <link rel="icon" href="img/favicon.webp" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@2.0.2/reset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <?php include 'partials/header.php'; ?>

    <main class="sub-page-main">
        <section class="page-hero">
            <div class="container">
                <h1 class="page-title">見学予約・体験入居</h1>
            </div>
        </section>

        <section class="page-introduction">
            <div class="container">
                <div class="page-lead-box">
                    <p class="section-text">
                        当施設へのご見学や体験入居を希望される方は、下記フォームよりお申し込みください。<br>
                        施設の雰囲気やスタッフの対応を、<strong class="text-highlight">実際に肌で感じていただく絶好の機会</strong>です。<br>
                        <strong class="text-highlight">専門スタッフが丁寧にご案内いたします。</strong>
                    </p>
                </div>
            </div>
        </section>

        <div class="leaf-divider"></div>

        <div class="apply-content-wrapper">
            <section class="apply-info-section">
                <div class="container">
                    <div class="info-box">
                        <h3>施設内見学について</h3>
                        <p>見学は随時行っておりますので、お気軽にお越し下さい。お電話、又は下記フォームにてご予約いただけますとよりスムーズにご案内が可能です。</p>
                        <ul>
                            <li>約30分程度の概要説明を合わせて約1時間程度の見学です。</li>
                            <li>その他ご入居に関する資金のご相談、生活相談等もお気軽にご相談下さい。</li>
                        </ul>
                        <h4>お食事について</h4>
                        <p>昼食をご用意しております。ご希望の方は、予めお申し出ください。<br>【料金(税込)】昼食：1,023円</p>
                    </div>
                    <div class="info-box">
                        <h3>体験入居について</h3>
                        <p>体験入居される人数を7日前までにご連絡下さい。お電話か下記メールフォームにてて受付いたします（ゲストルーム数に限りがあり、ご希望日をご相談させていただく場合もございます。予めご了承下さい）。体験入居は、原則として1泊2日（最高2泊3日まです）です。お食事は原則として朝食、夕食、翌日朝食をご用意させていただきます。</p>
                        <h4>体験入居の費用</h4>
                        <p>【料金(税込)】お1人様1泊3食付き：6,600円</p>
                    </div>
                </div>
            </section>
    
            <section class="form-section" id="apply-form">
                <div class="container">
                    <div class="form-container">
                        <form action="confirm.php" method="POST" novalidate>
                            <input type="hidden" name="form_type" value="見学予約">

                            <div class="form-row">
                                <dl class="form-group">
                                    <dt>ご希望の内容<span class="required">必須</span></dt>
                                    <dd class="radio-group">
                                        <input type="radio" id="apply-type-tour" name="request_type" value="施設内見学" <?php if( !isset($_SESSION['request_type']) || (isset($_SESSION['request_type']) && $_SESSION['request_type'] === '施設内見学') ) echo 'checked'; ?> required>
                                        <label for="apply-type-tour">施設内見学</label>
                                        <input type="radio" id="apply-type-trial" name="request_type" value="体験入居" <?php if(isset($_SESSION['request_type']) && $_SESSION['request_type'] === '体験入居') echo 'checked'; ?> required>
                                        <label for="apply-type-trial">体験入居</label>
                                    </dd>
                                </dl>
                                <p class="error-message"></p> 
                            </div>
    
                            <div class="form-block">
                                <h3 class="form-block-title">まず、申込者様についてお聞かせください</h3>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="applicant-name">お名前</label><span class="required">必須</span></dt>
                                        <dd><input type="text" id="applicant-name" name="applicant_name" placeholder="例）田中 一郎" required value="<?php echo htmlspecialchars($_SESSION['applicant_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="applicant-furigana">フリガナ</label><span class="required">必須</span></dt>
                                        <dd><input type="text" id="applicant-furigana" name="applicant_furigana" placeholder="例）タナカ イチロウ" required value="<?php echo htmlspecialchars($_SESSION['applicant_furigana'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="applicant-tel">お電話番号</label><span class="required">必須</span></dt>
                                        <dd>
                                            <input type="tel" id="applicant-tel" name="applicant_tel" placeholder="例）09012345678" required value="<?php echo htmlspecialchars($_SESSION['applicant_tel'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                                        </dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="applicant-email">メールアドレス</label><span class="required">必須</span></dt>
                                        <dd><input type="email" id="applicant-email" name="applicant_email" placeholder="example@email.com" required value="<?php echo htmlspecialchars($_SESSION['applicant_email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="relationship">入居予定者との間柄</label></dt>
                                        <dd>
                                            <select id="relationship" name="applicant_relationship">
                                                <option value="" <?php if(empty($_SESSION['applicant_relationship'])) echo 'selected'; ?>>--以下から選択してください--</option>
                                                <option value="ご本人" <?php if(isset($_SESSION['applicant_relationship']) && $_SESSION['applicant_relationship'] === 'ご本人') echo 'selected'; ?>>ご本人</option>
                                                <option value="実父・実母" <?php if(isset($_SESSION['applicant_relationship']) && $_SESSION['applicant_relationship'] === '実父・実母') echo 'selected'; ?>>実父・実母</option>
                                                <option value="義父・義母" <?php if(isset($_SESSION['applicant_relationship']) && $_SESSION['applicant_relationship'] === '義父・義母') echo 'selected'; ?>>義父・義母</option>
                                                <option value="親戚" <?php if(isset($_SESSION['applicant_relationship']) && $_SESSION['applicant_relationship'] === '親戚') echo 'selected'; ?>>親戚</option>
                                                <option value="その他" <?php if(isset($_SESSION['applicant_relationship']) && $_SESSION['applicant_relationship'] === 'その他') echo 'selected'; ?>>その他</option>
                                            </select>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
    
                            <div class="form-block">
                                <h3 class="form-block-title">次にご入居を検討されている方について教えてください</h3>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="resident-name">お名前</label><span class="required">必須</span></dt>
                                        <dd><input type="text" id="resident-name" name="resident_name" placeholder="例）田中 一郎" required value="<?php echo htmlspecialchars($_SESSION['resident_name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="resident-furigana">フリガナ</label><span class="required">必須</span></dt>
                                        <dd><input type="text" id="resident-furigana" name="resident_furigana" placeholder="例）タナカ イチロウ" required value="<?php echo htmlspecialchars($_SESSION['resident_furigana'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="resident-age">年齢</label></dt>
                                        <dd><input type="text" id="resident-age" name="resident_age_apply" placeholder="例）80歳" inputmode="numeric" pattern="\d*" value="<?php echo htmlspecialchars($_SESSION['resident_age_apply'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                    </dl>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt>性別<span class="required">必須</span></dt>
                                        <dd class="radio-group">
                                            <input type="radio" id="resident-gender-male" name="resident_gender_apply" value="男性" <?php if(isset($_SESSION['resident_gender_apply']) && $_SESSION['resident_gender_apply'] === '男性') echo 'checked'; ?> required>
                                            <label for="resident-gender-male">男性</label>
                                            <input type="radio" id="resident-gender-female" name="resident_gender_apply" value="女性" <?php if(isset($_SESSION['resident_gender_apply']) && $_SESSION['resident_gender_apply'] === '女性') echo 'checked'; ?> required>
                                            <label for="resident-gender-female">女性</label>
                                        </dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt>介護保険<span class="required">必須</span></dt>
                                        <dd class="radio-group">
                                            <input type="radio" id="insurance-yes" name="insurance_status" value="申請済み" <?php if( !isset($_SESSION['insurance_status']) || (isset($_SESSION['insurance_status']) && $_SESSION['insurance_status'] === '申請済み') ) echo 'checked'; ?> required>
                                            <label for="insurance-yes">申請済み</label>
                                            <input type="radio" id="insurance-no" name="insurance_status" value="未申請" <?php if(isset($_SESSION['insurance_status']) && $_SESSION['insurance_status'] === '未申請') echo 'checked'; ?> required>
                                            <label for="insurance-no">未申請</label>
                                        </dd>
                                    </dl>
                                    <p class="error-message"></p>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="care-level">要介護度</label></dt>
                                        <dd>
                                            <select id="care-level" name="resident_care_level">
                                                <option value="" <?php if(empty($_SESSION['resident_care_level'])) echo 'selected'; ?>>--以下から選択してください--</option>
                                                <option value="自立" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '自立') echo 'selected'; ?>>自立</option>
                                                <option value="要支援1" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '要支援1') echo 'selected'; ?>>要支援1</option>
                                                <option value="要支援2" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '要支援2') echo 'selected'; ?>>要支援2</option>
                                                <option value="要介護1" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '要介護1') echo 'selected'; ?>>要介護1</option>
                                                <option value="要介護2" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '要介護2') echo 'selected'; ?>>要介護2</option>
                                                <option value="要介護3" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '要介護3') echo 'selected'; ?>>要介護3</option>
                                                <option value="要介護4" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '要介護4') echo 'selected'; ?>>要介護4</option>
                                                <option value="要介護5" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '要介護5') echo 'selected'; ?>>要介護5</option>
                                                <option value="未申請" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '未申請') echo 'selected'; ?>>未申請</option>
                                                <option value="申請中" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === '申請中') echo 'selected'; ?>>申請中</option>
                                                <option value="その他" <?php if(isset($_SESSION['resident_care_level']) && $_SESSION['resident_care_level'] === 'その他') echo 'selected'; ?>>その他</option>
                                            </select>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="move-in-time">入居希望時期</label></dt>
                                        <dd>
                                            <select id="move-in-time" name="move_in_time">
                                                <option value="" <?php if(empty($_SESSION['move_in_time'])) echo 'selected'; ?>>--以下から選択してください--</option>
                                                <option value="なるべく早く" <?php if(isset($_SESSION['move_in_time']) && $_SESSION['move_in_time'] === 'なるべく早く') echo 'selected'; ?>>なるべく早く</option>
                                                <option value="1ヶ月以内" <?php if(isset($_SESSION['move_in_time']) && $_SESSION['move_in_time'] === '1ヶ月以内') echo 'selected'; ?>>1ヶ月以内</option>
                                                <option value="3ヶ月以内" <?php if(isset($_SESSION['move_in_time']) && $_SESSION['move_in_time'] === '3ヶ月以内') echo 'selected'; ?>>3ヶ月以内</option>
                                                <option value="6ヶ月以内" <?php if(isset($_SESSION['move_in_time']) && $_SESSION['move_in_time'] === '6ヶ月以内') echo 'selected'; ?>>6ヶ月以内</option>
                                                <option value="1年以内" <?php if(isset($_SESSION['move_in_time']) && $_SESSION['move_in_time'] === '1年以内') echo 'selected'; ?>>1年以内</option>
                                                <option value="3年以内" <?php if(isset($_SESSION['move_in_time']) && $_SESSION['move_in_time'] === '3年以内') echo 'selected'; ?>>3年以内</option>
                                                <option value="未定" <?php if(isset($_SESSION['move_in_time']) && $_SESSION['move_in_time'] === '未定') echo 'selected'; ?>>未定</option>
                                            </select>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt>入居予定者の施設見学の有無</dt>
                                        <dd class="radio-group">
                                            <input type="radio" id="resident-tour-yes" name="resident_tour_participation" value="参加する" <?php if( !isset($_SESSION['resident_tour_participation']) || (isset($_SESSION['resident_tour_participation']) && $_SESSION['resident_tour_participation'] === '参加する') ) echo 'checked'; ?>>
                                            <label for="resident-tour-yes">参加する</label>
                                            <input type="radio" id="resident-tour-no" name="resident_tour_participation" value="参加しない" <?php if(isset($_SESSION['resident_tour_participation']) && $_SESSION['resident_tour_participation'] === '参加しない') echo 'checked'; ?>>
                                            <label for="resident-tour-no">参加しない</label>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
    
                            <div class="form-block">
                                <h3 class="form-block-title">ご希望の見学日時をご指定ください</h3>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="tour-date">ご希望日時</label></dt>
                                        <dd>
                                            <div class="datetime-input-group">
                                                <input type="date" id="tour-date" name="tour_date" value="<?php echo htmlspecialchars($_SESSION['tour_date'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                                                <select id="tour-time" name="tour_time">
                                                    <option value="" <?php if(empty($_SESSION['tour_time'])) echo 'selected'; ?>>-- 時間を選択 --</option>
                                                    <option value="10:00" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '10:00') echo 'selected'; ?>>10:00</option>
                                                    <option value="10:30" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '10:30') echo 'selected'; ?>>10:30</option>
                                                    <option value="11:00" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '11:00') echo 'selected'; ?>>11:00</option>
                                                    <option value="11:30" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '11:30') echo 'selected'; ?>>11:30</option>
                                                    <option value="12:00" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '12:00') echo 'selected'; ?>>12:00</option>
                                                    <option value="13:30" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '13:30') echo 'selected'; ?>>13:30</option>
                                                    <option value="14:00" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '14:00') echo 'selected'; ?>>14:00</option>
                                                    <option value="14:30" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '14:30') echo 'selected'; ?>>14:30</option>
                                                    <option value="15:00" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '15:00') echo 'selected'; ?>>15:00</option>
                                                    <option value="15:30" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '15:30') echo 'selected'; ?>>15:30</option>
                                                    <option value="16:00" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '16:00') echo 'selected'; ?>>16:00</option>
                                                    <option value="16:30" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '16:30') echo 'selected'; ?>>16:30</option>
                                                    <option value="17:00" <?php if(isset($_SESSION['tour_time']) && $_SESSION['tour_time'] === '17:00') echo 'selected'; ?>>17:00</option>
                                                </select>
                                            </div>
                                            <p class="input-note">※ ご予約の調整のため、本日より3営業日以降の日付をご指定いただけますと幸いです。</p>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="tour-participants">施設見学参加人数</label></dt>
                                        <dd><input type="text" id="tour-participants" name="tour_participants" placeholder="例）2人" value="<?php echo htmlspecialchars($_SESSION['tour_participants'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"></dd>
                                    </dl>
                                </div>
                                <div class="form-row">
                                    <dl class="form-group">
                                        <dt><label for="questions">ご質問・ご不明点</label></dt>
                                        <dd><textarea id="questions" name="questions" placeholder="ご質問やご相談したいこと、その他ご希望などをご自由にご記入ください。" rows="6"><?php echo htmlspecialchars($_SESSION['questions'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea></dd>
                                    </dl>
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
                            <p class="form-caution">当フォームでご入力いただいた個人情報は、当施設のプライバシーポリシーに基づき管理いたします。</p>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php include 'partials/footer.php'; ?>

</body>
</html>