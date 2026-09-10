<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap"
    rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="css/custom.css">
  <!-- Page Specific CSS -->
    <?php if (!empty($page_css)): ?>
    <link rel="stylesheet" href="css/<?= htmlspecialchars($page_css); ?>">
    <?php endif; ?>
  <title><?= htmlspecialchars($page_title ?? 'Jac Olivol'); ?></title>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar-custom" id="mainNav">

  <div class="container d-flex align-items-center justify-content-between">

    <!-- LOGO -->
    <a href="./" class="logo-box">
      <img src="./images/jack-olivol.webp" alt="Jac Olivol">
    </a>


    <!-- =========================
           DESKTOP MENU
      ========================== -->
    <ul class="navbar-nav d-none d-lg-flex flex-row align-items-center">

      <!-- ABOUT US -->
      <li class="nav-item has-dd">

        <a class="nav-link <?= in_array($active_menu, ['about', 'vision-legacy', 'leadership']) ? 'active-tab' : ''; ?>" href="#">
          About Us
          <i class="fas fa-chevron-down arr-ic"></i>
        </a>

        <div class="dropdown-menu">

          <a class="<?= $active_menu === 'about' ? 'active' : ''; ?>" href="about">
            Our Story
          </a>

          <a class="<?= $active_menu === 'vision-legacy' ? 'active' : ''; ?>" href="vision-legacy">
            Vision &amp; Legacy
          </a>

          <a class="<?= $active_menu === 'leadership' ? 'active' : ''; ?>" href="leadership">
            Leadership
          </a>

          <a href="./#global-presence">
            Global Presence
          </a>

        </div>

      </li>


      <!-- OUR BRANDS -->
      <li class="nav-item">

        <a class="nav-link <?= $active_menu === 'brands' ? 'active-tab' : ''; ?>" href="brands">
          Our Brands
        </a>

      </li>


      <!-- OUR PHILOSOPHY -->
      <li class="nav-item">

        <a class="nav-link <?= $active_menu === 'philosophy' ? 'active-tab' : ''; ?>" href="philosophy">
          Our Philosophy
        </a>

      </li>


      <!-- SUSTAINABILITY -->
      <li class="nav-item">

        <a class="nav-link nav-sep <?= $active_menu === 'sustainability-and-impact' ? 'active-tab' : ''; ?>" style="padding-right:4px;" href="sustainability-and-impact">
          Sustainability &amp; Impact
        </a>

      </li>


      <!-- CAREERS -->
      <li class="nav-item">

        <a class="nav-link <?= $active_menu === 'careers' ? 'active-tab' : ''; ?>" href="careers">
          Careers
        </a>

      </li>


      <!-- CONTACT -->
      <li class="nav-item">

        <a class="nav-link <?= $active_menu === 'contact' ? 'active-tab' : ''; ?>" href="contact">
          Contact Us
        </a>

      </li>

    </ul>


    <!-- =========================
           MOBILE TOGGLE
      ========================== -->
    <button class="d-lg-none" id="mobToggle" style="background:none;border:none;color:#fff;font-size:21px;" type="button">
      <i class="fas fa-bars"></i>
    </button>

  </div>


  <!-- =========================
         MOBILE MENU
    ========================== -->
  <div id="mobMenu" style="display:none;background:#080808;border-top:1px solid #181818;">

    <!-- ABOUT US -->
    <div class="mob-item" data-dd="1">

      <a href="#" class="mob-link <?= in_array($active_menu, ['about', 'vision-legacy', 'leadership']) ? 'active-tab' : ''; ?>">
        About Us
        <i class="fas fa-chevron-down arr-ic" style="font-size:10px;"></i>
      </a>

      <div class="mob-sub">

        <a class="<?= $active_menu === 'about' ? 'active' : ''; ?>" href="about">
          Our Story
        </a>

        <a class="<?= $active_menu === 'vision-legacy' ? 'active' : ''; ?>" href="vision-legacy">
          Vision &amp; Legacy
        </a>

        <a class="<?= $active_menu === 'leadership' ? 'active' : ''; ?>" href="leadership">
          Leadership
        </a>

        <a href="./#global-presence">
          Global Presence
        </a>

      </div>

    </div>


    <!-- OUR BRANDS -->
    <div class="mob-item">

      <a href="brands" class="mob-link <?= $active_menu === 'brands' ? 'active-tab' : ''; ?>">
        Our Brands
      </a>

    </div>


    <!-- OUR PHILOSOPHY -->
    <div class="mob-item">

      <a href="philosophy" class="mob-link <?= $active_menu === 'philosophy' ? 'active-tab' : ''; ?>">
        Our Philosophy
      </a>

    </div>


    <!-- SUSTAINABILITY -->
    <div class="mob-item">

      <a href="sustainability-and-impact" class="mob-link <?= $active_menu === 'sustainability-and-impact' ? 'active-tab' : ''; ?>">
        Sustainability &amp; Impact
      </a>

    </div>


    <!-- CAREERS -->
    <div class="mob-item">

      <a href="careers" class="mob-link <?= $active_menu === 'careers' ? 'active-tab' : ''; ?>">
        Careers
      </a>

    </div>


    <!-- CONTACT -->
    <div class="mob-item">

      <a href="contact" class="mob-link <?= $active_menu === 'contact' ? 'active-tab' : ''; ?>">
        Contact Us
      </a>

    </div>

  </div>

</nav>