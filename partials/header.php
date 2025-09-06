<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    
    <title>Re-Step Garden</title> 

    <link rel="icon" href="favicon.webp" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@2.0.2/reset.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <header class="site-header pc-header" id="main-header">
        <div class="header-container">
            <div class="header-top">
                <h1 class="site-logo">
                    <a href="index.php">
                        <img src="img/logo.webp" alt="Re-Step Garden ロゴ">
                        <span class="facility-name">Re-Step Garden</span>
                    </a>
                </h1>
                <div class="header-nav-group">
                    <nav class="main-nav">
                        <ul class="main-nav__list">
                            <li class="main-nav__item has-dropdown">
                                <a href="index.php#service">サービス内容</a>
                                <ul class="dropdown">
                                    <li class="dropdown__item"><a href="rehabili.php">リハビリテーション</a></li>
                                    <li class="dropdown__item"><a href="life.php">日常生活サポート</a></li>
                                    <li class="dropdown__item"><a href="guid.php">料金案内</a></li>
                                </ul>
                            </li>
                            <li class="main-nav__item"><a href="facility.php">施設紹介</a></li>
                            <li class="main-nav__item"><a href="greet.php">ご挨拶</a></li>
                            <li class="main-nav__item"><a href="index.php#news">お知らせ</a></li>
                            <li class="main-nav__item nav-access"><a href="access.php">アクセス</a></li>
                        </ul>
                    </nav>
                    <div class="header-tel">
                        <i data-lucide="phone"></i>
                        <a href="tel:0282123456">0282-12-3456</a>
                    </div>
                </div>
            </div>
            <nav class="header-bottom">
                <ul class="sub-nav__list">
                    <li class="sub-nav__item"><a href="contact.php">資料請求・お問い合わせ</a></li>
                    <li class="sub-nav__item"><a href="apply.php">見学予約</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <header class="site-header-sp">
        <div class="header-sp-container">
            <h1 class="site-logo-sp">
                <a href="index.php">
                    <img src="img/logo.webp" alt="Re-Step Garden ロゴ">
                </a>
            </h1>
            <div class="header-tel-sp">
                <a href="tel:0282123456">
                    <i data-lucide="phone"></i>
                    <span>0282-12-3456</span>
                </a>
            </div>
            <button class="hamburger-menu" id="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    
    <nav class="mobile-nav" id="mobile-nav">
        <ul class="mobile-nav__list">
            <li class="mobile-nav__item has-sp-dropdown">
                <a href="index.php#service" class="sp-dd-toggle">サービス内容 <i data-lucide="chevron-down"></i></a>
                <ul class="sp-dropdown">
                    <li><a href="rehabili.php">リハビリテーション</a></li>
                    <li><a href="life.php">日常生活サポート</a></li>
                    <li><a href="guid.php">料金案内</a></li>
                </ul>
            </li>
            <li class="mobile-nav__item"><a href="facility.php">施設紹介</a></li>
            <li class="mobile-nav__item"><a href="greet.php">ご挨拶</a></li>
            <li class="mobile-nav__item"><a href="index.php#news">お知らせ</a></li>
            <li class="mobile-nav__item"><a href="access.php">アクセス</a></li>
            
            <li class="mobile-nav__item mobile-nav__tel">
                <a href="tel:0282123456">
                    <i data-lucide="phone"></i> <span>0282-12-3456</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <div class="sticky-subnav">
        <a href="contact.php" class="subnav-button">
            <i data-lucide="mail"></i>
            <span>資料請求・<br>お問い合わせ</span>
        </a>
        <a href="apply.php" class="subnav-button">
            <i data-lucide="calendar-check"></i>
            <span>見学予約</span>
        </a>
    </div>
</body>