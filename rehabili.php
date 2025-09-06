<?php include 'partials/header.php'; ?>

    <main class="sub-page-main">
        <section class="page-hero">
            <div class="container container--narrow">
                <h1 class="page-title">リハビリテーション</h1>
            </div>
            <div class="page-hero__image-wrapper">
                <img src="img/rehabili/main.webp" alt="リハビリ室">
            </div>
        </section>

        <section class="page-nav-section">
            <div class="container">
                <ul class="page-nav-list">
                    <li><a href="#philosophy">施設の理念</a></li>
                    <li><a href="#rehab-features">個別リハビリ</a></li>
                    <li><a href="#group-rehab">集団リハビリ</a></li>
                    <li><a href="#process">プラン作成の流れ</a></li>
                    <li><a href="#schedule">一日の流れ</a></li>
                </ul>
            </div>
        </section>

        <section class="rehab-philosophy-section" id="philosophy">
            <div class="container container--narrow">
                <div class="page-lead-box">
                    <h2 class="philosophy-title">もう一度「ご自身の足で歩む」喜びを。</h2>
                    <p class="section-text">
                        Re-Step Gardenのリハビリテーションは、単なる機能回復訓練を目指すものではありません。元理学療法士である施設長の経験に基づき、お一人おひとりの「できるようになりたい」という想いに寄り添い、生活の中に喜びと自信を取り戻すことを最大の目標としています。専門スタッフがチームとなり、あなただけの「次の一歩」を力強くサポートします。
                    </p>

                    <div class="quote-box-inner">
                        <h3 class="quote-box__title">理学療法士からの一言</h3>
                        <p class="quote-box__text">
                            あなたの『次の一歩』を、私たちが全力でサポートします。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="rehab-features-section page-section" id="rehab-features">
            <div class="container container--narrow">
                <h2 class="section-title">個別リハビリプログラム</h2>
                <div class="program-cards-container">
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Solo1.webp" alt="歩行訓練の様子" data-video-src="movie/Solo1.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">歩行訓練</h3>
                            <p class="program-card__text">
                                専門スタッフのサポートのもと、平行棒を使った歩行訓練を行います...
                            </p>
                        </div>
                    </div>
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Solo2.webp" alt="階段昇降訓練の様子" data-video-src="movie/Solo2.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">階段昇降訓練</h3>
                            <p class="program-card__text">
                                日常生活で欠かせない階段の昇り降りを、ご自身のペースに合わせて練習します。安全に、そしてスムーズに行えるよう丁寧にサポートします。
                            </p>
                        </div>
                    </div>
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Solo3.webp" alt="多様な機器訓練の様子" data-video-src="movie/Solo3.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">多様な機器訓練</h3>
                            <p class="program-card__text">
                                レッドコードなどの多様な機器を活用し、全身の機能改善を目指した運動療法を行います。楽しみながら、無理なく続けられるプログラムを提供します。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="group-rehab-section page-section" id="group-rehab">
            <div class="container container--narrow">
                <h2 class="section-title">集団リハビリプログラム</h2>
                <div class="program-cards-container">
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Party1.webp" alt="転倒防止訓練の様子" data-video-src="movie/Party1.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">転倒防止訓練</h3>
                            <p class="program-card__text">
                                バランス感覚や足腰の筋力を向上させ、転倒リスクを軽減するための集団訓練を行います。
                            </p>
                        </div>
                    </div>
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Party2.webp" alt="認知機能訓練の様子" data-video-src="movie/Party2.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">認知機能訓練</h3>
                            <p class="program-card__text">
                                回想法や脳トレゲームなど、楽しみながら認知機能の維持・向上を目指すプログラムです。
                            </p>
                        </div>
                    </div>
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Party3.webp" alt="音楽療法の様子" data-video-src="movie/Party3.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">音楽療法</h3>
                            <p class="program-card__text">
                                音楽のリズムに合わせて体を動かすことで、心身のリフレッシュと運動機能の維持を図ります。
                            </p>
                        </div>
                    </div>
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Party4.webp" alt="レクリエーションの様子" data-video-src="movie/Party4.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">レクリエーション</h3>
                            <p class="program-card__text">
                                ゲームや軽い運動を通して、楽しみながら体を動かし、心身の健康を促進します。
                            </p>
                        </div>
                    </div>
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Party5.webp" alt="屋外訓練の様子" data-video-src="movie/Party5.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">屋外訓練</h3>
                            <p class="program-card__text">
                                施設周辺の安全な環境で、散歩や軽い体操などを行い、屋外での活動を取り入れます。
                            </p>
                        </div>
                    </div>
                    <div class="program-card" data-scroll>
                        <div class="program-card__image-wrapper js-video-trigger">
                            <img src="img/rehabili/Party6.webp" alt="生活訓練の様子" data-video-src="movie/Party6.mp4">
                            <div class="play-button"><i data-lucide="play-circle"></i></div>
                        </div>
                        <div class="program-card__body">
                            <h3 class="program-card__title">生活訓練</h3>
                            <p class="program-card__text">
                                買い物へと模した訓練などを通して、日常生活に必要な動作の維持・向上を目指します。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="rehab-process-section page-section" id="process">
            <div class="container container--narrow">
                <h2 class="section-title">あなただけの「リハビリプラン」作成の流れ</h2>
                <div class="process-steps-container">
                    <div class="process-step">
                        <div class="process-step__icon"><i data-lucide="clipboard-check"></i></div>
                        <h3 class="process-step__title">Step 1<br>カウンセリングと評価</h3>
                        <p class="process-step__text">まず専門スタッフがじっくりとお話を伺い、お体の状態を正確に評価します。</p>
                    </div>
                    <div class="process-arrow">
                        <i data-lucide="arrow-right"></i>
                    </div>
                    <div class="process-step">
                        <div class="process-step__icon"><i data-lucide="file-plus-2"></i></div>
                        <h3 class="process-step__title">Step 2<br>個別プランのご提案</h3>
                        <p class="process-step__text">評価に基づき、ご本人様とご家族の希望を反映した最適なリハビリ計画をご提案します。</p>
                    </div>
                    <div class="process-arrow">
                        <i data-lucide="arrow-right"></i>
                    </div>
                    <div class="process-step">
                        <div class="process-step__icon"><i data-lucide="heart-pulse"></i></div>
                        <h3 class="process-step__title">Step 3<br>リハビリの実施</h3>
                        <p class="process-step__text">作成した計画に沿って、専門スタッフがマンツーマンで丁寧にサポートします。</p>
                    </div>
                    <div class="process-arrow">
                        <i data-lucide="arrow-right"></i>
                    </div>
                    <div class="process-step">
                        <div class="process-step__icon"><i data-lucide="refresh-cw"></i></div>
                        <h3 class="process-step__title">Step 4<br>定期的な見直し</h3>
                        <p class="process-step__text">お体の変化に合わせて定期的に計画を見直し、常に最適なリハビリを提供します。</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="daily-schedule-section page-section" id="schedule">
            <div class="container container--narrow">
                <h2 class="section-title">リハビリを中心とした一日の流れ</h2>
                <p class="section-text animate-on-scroll" data-scroll>
                    Re-Step Gardenでは、リハビリを生活の中に自然に取り入れ、心身ともに充実した一日を過ごしていただけるようサポートします。以下は、ある利用者様の一日のモデルケースです。
                </p>

                <div class="timeline-container">
                    <div class="timeline-item" data-scroll>
                        <div class="timeline-time">9:00</div>
                        <div class="timeline-icon"><i data-lucide="activity"></i></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">健康チェック・朝の体操</h3>
                            <p class="timeline-text">一日の始まりは、看護師による健康チェックから。血圧や体温を測定し、その日の体調を確認します。その後、皆さんで簡単な体操を行い、心と体をゆっくりと目覚めさせます。</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-scroll>
                        <div class="timeline-time">10:00</div>
                        <div class="timeline-icon"><i data-lucide="user-round-check"></i></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">個別リハビリテーション</h3>
                            <p class="timeline-text">理学療法士とマンツーマンで、あなただけの特別プログラムに取り組みます。「買い物に一人で行きたい」など、具体的な目標達成に向けて専門的なサポートを行います。</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-scroll>
                        <div class="timeline-time">12:00</div>
                        <div class="timeline-icon"><i data-lucide="utensils-crossed"></i></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">昼食・口腔ケア</h3>
                            <p class="timeline-text">管理栄養士が監修した、栄養バランスの取れた温かいお食事です。食後には、誤嚥予防のための口腔ケアも行い、お口の健康を保ちます。</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-scroll>
                        <div class="timeline-time">14:00</div>
                        <div class="timeline-icon"><i data-lucide="users-round"></i></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">集団リハビリ・レクリエーション</h3>
                            <p class="timeline-text">午後は、他の利用者様と一緒に楽しみながら体を動かします。音楽療法や園芸活動など、自然と笑顔になれるプログラムで、心と体の活性化を図ります。</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-scroll>
                        <div class="timeline-time">16:00</div>
                        <div class="timeline-icon"><i data-lucide="coffee"></i></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">自由時間・ティータイム</h3>
                            <p class="timeline-text">リハビリの後は、ゆっくりとリラックス。お好きな飲み物とお菓子を楽しみながら、談話室で仲間とおしゃべりしたり、趣味の時間を過ごしたり。思い思いの時間をお楽しみください。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php include 'partials/contact-section.php'; ?>
    </main>

<?php include 'partials/footer.php'; ?>