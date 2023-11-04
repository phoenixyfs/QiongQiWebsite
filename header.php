    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base_url; ?>assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base_url; ?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base_url; ?>assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base_url; ?>assets/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $base_url; ?>assets/images/favicon/safari-pinned-tab.svg" color="#161117">
    <meta name="msapplication-TileColor" content="#161117">
    <meta name="theme-color" content="#161117">
    <!-- favicon -->   
   
   
   
   <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bower_components/aos/dist/aos.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />

</head>

<body>



<div class="header">
    <div id="container-fluid">
        <div class="no-padding flex">
            <div class="col-3 logo">
                <a href="index.php"><img class="header-logo" src="assets/images/qiongqi_logo_white.png" alt=""></a>
            </div>
            <!-- Desktop -->
            <div class="col-9 d-none d-lg-block header-nav">
                <a href="index.php" class="nav-item nav-item-active">主頁</a>
                <a href="about.php" class="nav-item">遊戲背景</a>
                <a href="howtoplay.php" class="nav-item">遊戲玩法</a>
                <a href="characters.php" class="nav-item">角色介紹</a>
                <a href="news.php" class="nav-item">最新資訊</a>
                <a href="#" class="download-btn">立即下載</a>
            </div> 

            <!-- Mobile -->
            <div class="col-9 d-lg-none header-nav-mobile">
                <div id="menuToggle">
                    <!-- A fake / hidden checkbox is used as click reciever, so you can use the :checked selector on it.-->
                    <input type="checkbox" />
                    <!-- Some spans to act as a hamburger.-->
                    <span></span>
                    <span></span>
                    <span></span>
                    
                    <ul id="menuMobile">
                        <a href="index.php" class="nav-item nav-item-active"><li>主頁</li></a>
                        <a href="about.php" class="nav-item"><li>遊戲背景</li></a>
                        <a href="howtoplay.php" class="nav-item"><li>遊戲玩法</li></a>
                        <a href="characters.php" class="nav-item"><li>角色介紹</li></a>
                        <a href="news.php" class="nav-item"><li>最新資訊</li></a>
                        <a href="#" class="download-btn">立即下載</a>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>