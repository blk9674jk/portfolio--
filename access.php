<?php include 'partials/header.php'; ?>

    <main class="sub-page-main">
        <section class="page-hero">
            <div class="container">
                <h1 class="page-title">アクセス</h1>
            </div>
            <div class="page-hero__image-wrapper">
                <img src="img/access/main.webp" alt="施設の外観や周辺の風景">
            </div>
        </section>

        <section class="access-details-section">
            <div class="container">
                <div class="access-header animate-on-scroll">
                    <p class="section-text">
                        当施設へのアクセス方法をご案内します。<br>
                        道中お気をつけてお越しくださいませ。スタッフ一同、皆様のお越しを心よりお待ちしております。
                    </p>
                    <div class="leaf-divider"></div>
                </div>

                <div class="access-info-container animate-on-scroll">
                    <h2 class="access-info-title">基本情報</h2>
                    <dl class="access-basic-info">
                        <div class="access-basic-info__item">
                            <dt><i data-lucide="map-pin"></i>所在地</dt>
                            <dd>〒321-0215 栃木県下都賀郡壬生町本丸２丁目１５−３</dd>
                        </div>
                        <div class="access-basic-info__item">
                            <dt><i data-lucide="phone"></i>お問い合わせ</dt>
                            <dd><a href="tel:0282123456">TEL: 0282-12-3456</a> （受付時間 9:00〜17:00）</dd>
                        </div>
                        <div class="access-basic-info__item">
                            <dt><i data-lucide="car"></i>駐車場</dt>
                            <dd>専用駐車場20台完備</dd>
                        </div>
                        <div class="access-basic-info__item">
                            <dt><i data-lucide="person-standing"></i>バリアフリー</dt>
                            <dd>施設内は車椅子でご利用いただけます。多目的トイレも完備しております。</dd>
                        </div>
                    </dl>
                </div>

                <div class="access-map-container animate-on-scroll">
                    <div class="access-map">
                        
                        <iframe src="https://maps.google.com/maps?q=36.424556,139.795&hl=ja&z=17&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="map-buttons">

                        <a href="https://www.google.com/maps?q=36.424556,139.795" target="_blank" class="map-btn map-btn--google">
                            <i data-lucide="map"></i>Googleマップで開く
                        </a>

                        <button class="map-btn map-btn--print" id="js-print-map">
                            <i data-lucide="printer"></i>この地図を印刷する
                        </button>
                    </div>
                </div>

                <div class="access-methods-container animate-on-scroll">
                    <h2 class="access-info-title">交通のご案内</h2>
                    <div class="access-guide-wrapper">
                        <div class="access-methods">
                            <div class="access-method-item">
                                <h3 class="access-method-item__title"><i data-lucide="car-front"></i>お車でお越しの方</h3>
                                <p>
                                    北関東自動車道<strong>「壬生IC」</strong>より<br>
                                    車で約10分<br>
                                    （駐車場20台完備）
                                </p>
                            </div>
                            <div class="access-method-item">
                                <h3 class="access-method-item__title"><i data-lucide="train-front"></i>電車でお越しの方</h3>
                                <p>
                                    東武宇都宮線<strong>「壬生駅」</strong>より<br>
                                    車で約5分<br>
                                    （送迎サービスあり※要予約）
                                </p>
                            </div>
                        </div>
                        <div class="access-carnavi-note">
                            <p>カーナビでは「Re-Step Garden」または住所で検索してください</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    <?php include 'partials/contact-section.php'; ?>
    </main>

<?php include 'partials/footer.php'; ?>