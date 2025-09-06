<?php include 'partials/header.php'; ?>

    <main class="sub-page-main">
        <section class="page-hero">
            <div class="container">
                <h1 class="page-title">料金案内</h1>
            </div>
            <div class="page-hero__image-wrapper">
                <img src="img/guid/main.webp" alt="施設の相談カウンターで説明を受ける様子">
            </div>
        </section>

        <section class="page-nav-section">
            <div class="container">
                <ul class="page-nav-list">
                    <li><a href="#room-plan-section">月額費用と居室タイプ</a></li>
                    <li><a href="#pricing-section">介護サービス費・その他費用</a></li>
                    <li><a href="#info-section">料金についてのQ&A</a></li>
                </ul>
            </div>
        </section>

        <section class="page-intro-section">
            <div class="container container--narrow">
                <div class="intro-card animate-on-scroll">
                    <div class="intro-card__pin">
                        <img src="img/leaf/leaf6_s.webp" alt="葉っぱの飾り">
                    </div>
                    <h2 class="intro-card__title">明確な料金体系で、安心の暮らしをサポートします。</h2>
                    <p class="intro-card__text">
                        Re-Step Gardenでは、ご利用者様やご家族が安心してサービスをご利用いただけるよう、明確な料金体系を設けております。<br>
                        要介護度やご利用状況に応じた費用について、下記をご確認ください。ご不明な点はお気軽にお問い合わせください。
                    </p>
                </div>

                <div class="intro-callout animate-on-scroll">
                    <div class="intro-callout__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <div class="intro-callout__content">
                        <p class="intro-callout__text">
                            ご不明な点は、専門スタッフが丁寧にご説明します。<br>
                            いつでもお気軽にご相談ください。
                        </p>
                        <a href="contact.php" class="callout-button">お問い合わせはこちら</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="price-summary-section" id="room-plan-section">
            <div class="container container--narrow">
                <h2 class="section-title">料金プラン早見表</h2>
                <p class="section-text">
                    まずは、各プランの概要をご確認ください。<br>
                    プラン名をクリックすると、お部屋の写真や費用の内訳など、より詳しい情報をご覧いただけます。
                </p>
                <table class="price-summary-table">
                    <thead>
                        <tr>
                            <th>プラン</th>
                            <th>月額費用<span class="header-unit">（月/万円）</span></th>
                            <th>専有面積<span class="header-unit">（㎡）</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="clickable-row" data-href="#room-plan-1ldk">
                            <td><a href="#room-plan-1ldk">1LDKプラン</a></td>
                            <td><a href="#room-plan-1ldk"><strong>20</strong><span class="cost-unit">万円</span></a></td>
                            <td><a href="#room-plan-1ldk">40.50㎡</a></td>
                        </tr>
                        <tr class="clickable-row" data-href="#room-plan-2ldk">
                            <td><a href="#room-plan-2ldk">2LDKプラン</a></td>
                            <td><a href="#room-plan-2ldk"><strong>29</strong><span class="cost-unit">万円</span></a></td>
                            <td><a href="#room-plan-2ldk">55.80㎡</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        
        <section class="room-plan-section">
            <div class="container">
                
                <div class="room-intro-header">
                    <h2 class="section-title">プランと居室タイプのご案内</h2>
                    <p class="room-intro-subtitle">お一人おひとりの「自分らしい暮らし」が、ここから始まります。</p>
                </div>
                <div class="room-plan-list">
                    <div class="room-plan-block" id="room-plan-1ldk">
                        <h3 class="room-plan__main-title">1LDKプラン</h3>
                        <hr class="plan-divider">
                        <div class="room-plan-item">
                            <div class="room-plan__text">
                                <p class="room-plan__description">
                                    広々としたLDKと独立した洋室で、お一人暮らしでもゆったりと、ご夫婦でも快適にお過ごしいただけます。
                                </p>
                                <dl class="room-plan__details">
                                    <div class="detail-group">
                                        <dt>月額費用</dt>
                                        <dd class="price"><strong>20</strong>万円</dd>
                                    </div>
                                    <div class="detail-group">
                                        <dt>内訳</dt>
                                        <dd>家賃相当額：8万円</dd>
                                        <dd>管理費：4万円</dd>
                                        <dd>食費：8万円</dd>
                                    </div>
                                    <p class="room-plan__note">※食費は1日3食、30日計算の全額です。</p>
                                    <div class="detail-group">
                                        <dt>専有面積</dt>
                                        <dd>40.50㎡</dd>
                                    </div>
                                </dl>
                            </div>
                            <div class="room-plan__floorplan">
                                <img src="img/guid/madori1.webp" alt="1LDKプランの間取り図">
                            </div>
                            <div class="room-plan__photo">
                                <img src="img/guid/room1.webp" alt="1LDKプランの居室の写真">
                            </div>
                        </div>
                    </div>
                    <div class="room-plan-block" id="room-plan-2ldk">
                        <h3 class="room-plan__main-title">2LDKプラン</h3>
                        <hr class="plan-divider">
                        <div class="room-plan-item">
                            <div class="room-plan__text">
                                <p class="room-plan__description">
                                    広々としたLDKと2つの洋室で、ご夫婦はもちろん、ご家族や来客時にもゆとりをもって過ごせる空間です。
                                </p>
                                <dl class="room-plan__details">
                                    <div class="detail-group">
                                        <dt>月額費用</dt>
                                        <dd class="price"><strong>29</strong>万円</dd>
                                    </div>
                                    <div class="detail-group">
                                        <dt>内訳</dt>
                                        <dd>家賃相当額：13万円</dd>
                                        <dd>管理費：5万円</dd>
                                        <dd>食費：11万円</dd>
                                    </div>
                                    <p class="room-plan__note">※食費は1日3食、30日計算の全額です。</p>
                                    <div class="detail-group">
                                        <dt>専有面積</dt>
                                        <dd>55.80㎡</dd>
                                    </div>
                                </dl>
                            </div>
                            <div class="room-plan__floorplan">
                                <img src="img/guid/madori2.webp" alt="2LDKプランの間取り図">
                            </div>
                            <div class="room-plan__photo">
                                <img src="img/guid/room2.webp" alt="2LDKプランの居室の写真">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        <section class="image-section">
            <div class="container">
                <div class="image-section__image-wrapper">
                    <img src="img/guid/start.webp" alt="笑顔で迎えるスタッフ">
                </div>
            </div>
        </section>

        <section class="pricing-section" id="pricing-section">
            <div class="container">

                <div class="qa-wrapper qa-wrapper--intro">
                    <div class="qa-wrapper__question">
                        <span class="qa-wrapper__symbol qa-wrapper__symbol--q">Q.</span>
                        <h2 class="qa-wrapper__title">介護サービス費は、どのように決まりますか？</h2>
                    </div>
                    <div class="qa-wrapper__answer">
                        <span class="qa-wrapper__symbol qa-wrapper__symbol--a">A.</span>
                        <p class="qa-wrapper__text">
                            介護サービス費は、介護保険法に基づき、ご利用者様の要介護度によって変動します。<br>
                            下記は、1割負担の場合の自己負担額の目安です。
                        </p>
                    </div>
                </div>
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>要介護度</th>
                            <th>1割負担の場合（目安）</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>要介護1</td>
                            <td>16,765円/月</td>
                        </tr>
                        <tr>
                            <td>要介護2</td>
                            <td>19,705円/月</td>
                        </tr>
                        <tr>
                            <td>要介護3</td>
                            <td>27,048円/月</td>
                        </tr>
                        <tr>
                            <td>要介護4</td>
                            <td>30,938円/月</td>
                        </tr>
                        <tr>
                            <td>要介護5</td>
                            <td>36,217円/月</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pricing-note-box">
                    <div class="pricing-note-box__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
                    </div>
                    <p class="pricing-note-box__text">
                        所得に応じて、自己負担割合は1割～3割となります。<br>
                        上記金額は目安です。詳細な金額についてはお気軽にご相談ください。
                    </p>
                </div>
                    <div class="qa-wrapper">
                        <div class="qa-wrapper__question">
                            <span class="qa-wrapper__symbol qa-wrapper__symbol--q">Q.</span>
                            <h3 class="qa-wrapper__title">月額費用の他に、追加で費用はかかりますか？</h3>
                        </div>
                        <div class="qa-wrapper__answer">
                            <span class="qa-wrapper__symbol qa-wrapper__symbol--a">A.</span>
                            <p class="qa-wrapper__text">
                                はい、ご利用者様の状況やご希望に応じて、以下の費用が別途必要となる場合がございます。<br>
                                ご契約前にすべて丁寧にご説明しますので、ご安心ください。
                            </p>
                        </div>
                    </div>
                <div class="additional-costs-container">
                    <div class="cost-box">
                        <h4 class="cost-box__title">
                            <span data-lucide="file-plus"></span>
                            介護サービス費の加算
                        </h4>
                        <ul class="cost-box__list">
                            <li>個別機能訓練加算</li>
                            <li>医療連携体制加算</li>
                            <li>介護職員処遇改善加算</li>
                            <li>初期加算</li>
                        </ul>
                        <p class="cost-box__note">※ご利用状況に応じて加算額が変動します。</p>
                    </div>
                    <div class="cost-box">
                        <h4 class="cost-box__title">
                            <span data-lucide="shopping-basket"></span>
                            個別にご負担いただく費用
                        </h4>
                        <ul class="cost-box__list">
                            <li>理美容代、散髪代など</li>
                            <li>日用品・おむつ代：個別にご購入いただくもの</li>
                            <li>医療費：往診代、薬代など</li>
                            <li>その他のサービス：買い物支援、外出時の付き添いなど、個別のご依頼によるもの</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="info-section" id="info-section">
            <div class="container">
                <h2 class="section-title">料金に関するご案内</h2>

                <div class="path-qa-container">
                    <div class="path-qa-svg-wrapper">
                        <svg width="60" height="600" viewBox="0 0 60 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="qa-path" d="M 30 0 C 100 150, -40 350, 30 600" stroke="#cccccc" stroke-width="2"/>
                        </svg>
                        <div id="falling-leaf" data-lucide="leaf"></div>
                    </div>

                    <div class="info-list">
                        <div class="info-item path-qa-item">
                            <div class="qa-question">
                                <span class="qa-symbol qa-symbol--q">Q.</span>
                                <h3 class="info-item__title">入居一時金はかかりますか？</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-symbol qa-symbol--a">A.</span>
                                <p class="info-item__text">
                                    当施設では、入居一時金は<strong>いただいておりません。</strong>
                                </p>
                            </div>
                        </div>
                        <div class="info-item path-qa-item">
                            <div class="qa-question">
                                <span class="qa-symbol qa-symbol--q">Q.</span>
                                <h3 class="info-item__title">月額費用の支払い方法は？</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-symbol qa-symbol--a">A.</span>
                                <p class="info-item__text">
                                    ご利用料金は、毎月末締め、<strong>翌月27日</strong>にご指定の口座よりお引き落としとなります。
                                </p>
                            </div>
                        </div>
                        <div class="info-item path-qa-item">
                            <div class="qa-question">
                                <span class="qa-symbol qa-symbol--q">Q.</span>
                                <h3 class="info-item__title">料金が変わることはありますか？</h3>
                            </div>
                            <div class="qa-answer">
                                <span class="qa-symbol qa-symbol--a">A.</span>
                                <p class="info-item__text">
                                    介護保険法や物価変動により改定される場合があります。<br>
                                    その際は<strong>事前にお知らせいたします。</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php include 'partials/contact-section.php'; ?>
    </main>

<?php include 'partials/footer.php'; ?>