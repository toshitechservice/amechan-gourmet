<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>あめちゃんグルメ</title>
  <meta name="description" content="デブの大阪B級グルメ紹介🍚">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/amechan-logo.ico" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/amechan-logo.ico" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/amechan-logo.png" alt="">
        <h1 class="sitename">あめちゃんグルメ</h1>
      </a>

      <nav id="navmenu" class="navmenu nav-menu-pc">
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>/category/recommend">おすすめ</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>/category/area"><span>エリア一覧</span></a></li>
          <li class="dropdown"><a href="<?php echo esc_url(home_url('/')); ?>/category/genre"><span>ジャンル</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/noodle">麺類</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/meat">肉系</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/chinese-food">中華</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/other">その他</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>/contact">お問い合わせ</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>/privacypolicy">プライバシーポリシー</a></li>
        </ul>
        <!-- <i class="mobile-nav-toggle d-xl-none bi bi-list"></i> -->
      </nav>

      <div class="header-social-links">
        <a href="https://www.instagram.com/amechan_gourmet?igsh=MW43ZmdrcnE0czBhdQ==" class="instagram"><i class="bi bi-instagram"></i><span>Instagram</span></a>
      </div>

      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav id="navi" class="navmenu">
        <ul class="nav-menu">
          <li><a href="<?php echo esc_url(home_url('/')); ?>/category/recommend">おすすめ</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>/category/area"><span>エリア一覧</span></a></li>
          <li class="dropdown"><a href="<?php echo esc_url(home_url('/')); ?>/category/genre"><span>ジャンル</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/noodle">麺類</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/meat">肉系</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/chinese-food">中華</a></li>
              <li><a href="<?php echo esc_url(home_url('/')); ?>/category/other">その他</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>/contact">お問い合わせ</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>/privacypolicy">プライバシーポリシー</a></li>
        </ul>

        <!-- <ul class="nav-menu">
          <li><a href="#works">WORKS</a></li>
          <li><a href="#skill">SKILL</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul> -->
        <!-- <ul class="sns">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">facebook</a></li>
          <li><a href="#">instagram</a></li>
        </ul> -->
      </nav>
  
      <div id="mask"></div>

    </div>
  </header>
