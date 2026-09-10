<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap"
    rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="css/custom.css">
  <title>Jac Olivol — Our Brands</title>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar-custom" id="mainNav">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="./" class="logo-box">
        <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/jack-olivol.webp" alt="Jac Olivol">
      </a>
      <ul class="navbar-nav d-none d-lg-flex flex-row align-items-center">
        <li class="nav-item has-dd">
          <a class="nav-link" href="#">About Us <i class="fas fa-chevron-down arr-ic"></i></a>
          <div class="dropdown-menu">
            <a href="about">Our Story</a>
            <a href="vision-legacy">Vision & Legacy</a>
            <a href="leadership">Leadership</a>
            <a href="https://brandaid.digital/proposals/jac-olivol/new/html/#global-presence">Global
              Presence</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link active-tab" href="brands">Our Brands</a></li>
        <li class="nav-item"><a class="nav-link" href="philosophy">Our Philosophy</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="#">Innovation</a></li>
        <li class="nav-item"><a class="nav-link nav-sep" style="padding-right:4px;" href="#">Sustainability</a></li> -->
        <li class="nav-item"><a class="nav-link nav-sep" style="padding-right:4px;" href="sustainability-and-impact">Sustainability &
            Impact</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="careers">Careers</a></li>
        <li class="nav-item"><a class="nav-link" href="contact">Contact Us</a></li>
      </ul>
      <button class="d-lg-none" id="mobToggle" style="background:none;border:none;color:#fff;font-size:21px;">
        <i class="fas fa-bars"></i>
      </button>
    </div>
    <div id="mobMenu" style="display:none;background:#080808;border-top:1px solid #181818;">
      <div class="mob-item" data-dd="1">
        <a href="#" class="mob-link">About Us<i class="fas fa-chevron-down arr-ic" style="font-size:10px;"></i></a>
        <div class="mob-sub">
          <a href="about">Our Story</a>
          <a href="vision-legacy">Vision & Legacy</a>
          <a href="leadership">Leadership</a>
          <a href="https://brandaid.digital/proposals/jac-olivol/new/html/#global-presence">Global
            Presence</a>
        </div>
      </div>
      <div class="mob-item"><a href="brands" class="mob-link">Our Brands</a></div>
      <div class="mob-item"><a href="philosophy" class="mob-link">Our Philosophy</a></div>
      <div class="mob-item"><a href="sustainability-and-impact" class="mob-link">Sustainability & Impact</a></div>
      <div class="mob-item"><a href="careers" class="mob-link">Careers</a></div>
      <div class="mob-item"><a href="contact" class="mob-link">Contact Us</a></div>
    </div>
  </nav>

  <div class="page-hero">
    <div class="page-hero-bg brands-hero"></div>
    <div class="page-hero-overlay"></div>
    <div class="dot-pattern" style="bottom:130px;right:32px;z-index:3;"></div>
    <div class="page-hero-content">
      <p class="hero-eyebrow">Our Brands</p>
      <h1>The Brands of<br><span class="gold">Jac Olivol Group</span></h1>
      <p class="lead-txt">Each brand serves a distinct purpose all sharing a single commitment to honest, effective,
        everyday care.</p>
    </div>
    <div class="hero-curve"><svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0,60 C480,130 960,130 1440,60 L1440,120 L0,120 Z" fill="#F4EFE6" />
      </svg></div>
  </div>

  <section class="sec sec-cream brand-directory">
    <div class="container">
      <div class="brand-directory-layout">

        <!-- FILTER SIDEBAR -->
        <!-- <aside class="brand-filter-panel reveal-l">
          <div class="bf-sticky">
            <p class="bf-label">Filter</p>
            <ul class="bf-list" id="bfList">
              <li><label class="bf-opt"><input type="checkbox" class="bf-check" value="skin-body-care"><span
                    class="bf-circle"></span>Skin &amp; Body Care</label></li>
              <li><label class="bf-opt"><input type="checkbox" class="bf-check" value="baby-care"><span
                    class="bf-circle"></span>Baby Care</label></li>
              <li><label class="bf-opt"><input type="checkbox" class="bf-check" value="hair-care"><span
                    class="bf-circle"></span>Hair Care</label></li>
              <li><label class="bf-opt"><input type="checkbox" class="bf-check" value="performance-care"><span
                    class="bf-circle"></span>Performance Care</label></li>
              <li><label class="bf-opt"><input type="checkbox" class="bf-check" value="wellness-care"><span
                    class="bf-circle"></span>Wellness Care</label></li>
            </ul>
            <button type="button" class="bf-clear" id="bfClear">Clear</button>
          </div>
        </aside> -->
        <aside class="brand-filter-panel reveal-l">
          <div class="bf-sticky">
            <span class="bf-title d-none d-md-flex align-items-center gap-2 mb-2">
              <i class="bi bi-funnel"></i>
              <span class="bf-label">Filter by</span>
            </span>
            <button class="bf-toggle" id="bfToggle" type="button">
              <span class="bf-title">
                <i class="bi bi-funnel"></i>
                <span class="bf-label">Filter by</span>
              </span>
              <i class="bi bi-chevron-down" id="bfIcon"></i>
            </button>
            <div class="bf-content" id="bfContent">

              <ul class="bf-list" id="bfList">
                <li>
                  <label class="bf-opt">
                    <input type="checkbox" class="bf-check" value="skin-body-essential">
                    <span class="bf-circle"></span>
                    Skin &amp; Body Essentials
                  </label>
                </li>

                <!-- <li>
                        <label class="bf-opt">
                            <input type="checkbox" class="bf-check" value="baby-care">
                            <span class="bf-circle"></span>
                            Baby Care
                        </label>
                    </li> -->

                <li>
                  <label class="bf-opt">
                    <input type="checkbox" class="bf-check" value="bath_essential">
                    <span class="bf-circle"></span>
                    Bath Essentials
                  </label>
                </li>

                <li>
                  <label class="bf-opt">
                    <input type="checkbox" class="bf-check" value="hygiene_protection">
                    <span class="bf-circle"></span>
                    Personal Care Essentials
                  </label>
                </li>

                <li>
                  <label class="bf-opt">
                    <input type="checkbox" class="bf-check" value="hair-care">
                    <span class="bf-circle"></span>
                    Hair Care Essentials
                  </label>
                </li>

                <label class="bf-opt">
                  <input type="checkbox" class="bf-check" value="traditional_rituals">
                  <span class="bf-circle"></span>
                  Ritual Essentials
                </label>
                </li>

                <li>
                  <label class="bf-opt">
                    <input type="checkbox" class="bf-check" value="men_rooming">
                    <span class="bf-circle"></span>
                    Men’s Care Essentials
                  </label>
                </li>

              </ul>

              <button type="button" class="bf-clear" id="bfClear">
                Clear
              </button>

            </div>
          </div>
        </aside>

        <!-- BRAND LISTING -->
        <div class="brand-directory-main" id="brandMain">

          <div class="bd-cat-block reveal" data-cat="skin-body-essential">
            <h2 class="bd-cat-title">Skin &amp; Body Essentials</h2>
            <div class="bd-grid">
              <a href="javascript:void(0);" class="bd-tile" data-search="jac olivol skin body care olive chemistry">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/JacCircle.webp"
                    alt="Jac Olivol" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-droplet"></i></div>
                </div>
                <p class="bd-tile-name">Jac Olivol</p>
                <p class="bd-tile-caption">Olive Chemistry innovation rooted in tradition.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              <a href="javascript:void(0);" class="bd-tile" data-search="jac olivol skin body care olive chemistry">
                <div class="bd-tile-logo">
                  <!-- OliCerin -->
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/OlicerinCircle.webp" alt="OliCerin"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-droplet"></i></div>
                </div>
                <p class="bd-tile-name">OliCerin</p>
                <p class="bd-tile-caption">Olive. Glycerin. Hydration, simplified.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              <!-- <a href="javascript:void(0);" class="bd-tile" data-search="olicerin skin hydration olive glycerin">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/olicerin.webp" alt="OliCerin"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-hand-sparkles"></i></div>
                </div>
                <p class="bd-tile-name">OliCerin</p>
                <p class="bd-tile-caption">Olive + Glycerin Hydration Specialists</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              <a href="javascript:void(0);" class="bd-tile"
                data-search="cocoolive skin body care coconut olive tropical">
                <div class="bd-tile-logo">
                  <div class="bd-tile-icon"><i class="fas fa-sun"></i></div>
                </div>
                <p class="bd-tile-name">CocoOlive</p>
                <p class="bd-tile-caption">Tropical Meets Mediterranean</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a> -->

            </div>
          </div>

          <!-- <div class="bd-cat-block reveal" data-cat="baby-care">
            <h2 class="bd-cat-title">Baby Care</h2>
            <div class="bd-grid">
              <a href="javascript:void(0);" class="bd-tile" data-search="tortli baby care gentle first day">
                <div class="bd-tile-logo">
                  <div class="bd-tile-icon"><i class="fas fa-baby"></i></div>
                </div>
                <p class="bd-tile-name">Tortli</p>
                <p class="bd-tile-caption">Gentle from the Very First Day</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              <a href="javascript:void(0);" class="bd-tile" data-search="tortli baby care gentle first day">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/MaaCareLogo.png" alt="OliCerin"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                </div>
                <p class="bd-tile-name">Maa Care</p>
                <p class="bd-tile-caption">Health and care you can rely on.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
            </div>
          </div> -->

          <div class="bd-cat-block reveal" data-cat="bath_essential">
            <h2 class="bd-cat-title">Bath Essentials</h2>
            <div class="bd-grid">
              <a href="javascript:void(0);" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/ZestUpCircle.webp"
                    alt="ZestUpLogo" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Zest Up</p>
                <p class="bd-tile-caption">Burst of zest in every wash.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              <a href="javascript:void(0);" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/HyperlushCircle.webp" alt="Hyper Lush"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Hyper Lush</p>
                <p class="bd-tile-caption">Bold beauty, beautifully you.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
            </div>
          </div>

          <div class="bd-cat-block reveal" data-cat="hygiene_protection">
            <h2 class="bd-cat-title">Personal Care Essentials</h2>
            <div class="bd-grid">
              <a href="javascript:void(0);" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/ActiveGuardCircle.webp"
                    alt="ActiveGuardLogo"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Active Guard</p>
                <p class="bd-tile-caption">Active protection for a healthy everyday.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              <a href="javascript:void(0);" class="bd-tile"
                data-search="cocoolive skin body care coconut olive tropical">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/BoroCareCircle.webp"
                    alt="OliCerin" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                </div>
                <p class="bd-tile-name">Boro Care+</p>
                <p class="bd-tile-caption">Everyday hygiene, elevated.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
            </div>
          </div>

          <div class="bd-cat-block reveal" data-cat="hair-care">
            <h2 class="bd-cat-title">Hair Care Essentials</h2>
            <div class="bd-grid">
              <!-- <a href="javascript:void(0);" class="bd-tile" data-search="keshamrit hair care nectar for hair">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/kesh-amrit.webp"
                    alt="KeshAmrit" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-wind"></i></div>
                </div>
                <p class="bd-tile-name">KeshAmrit</p>
                <p class="bd-tile-caption">The Simple Way to Better Hair</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a> -->
              <a href="javascript:void(0);" class="bd-tile" data-search="arnitone hair care arnica oil">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/ArnitoneCircle.webp"
                    alt="Arnitone" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-spa"></i></div>
                </div>
                <p class="bd-tile-name">Arnitone</p>
                <p class="bd-tile-caption">Fragrance led hair care.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
            </div>
          </div>

          <div class="bd-cat-block reveal" data-cat="traditional_rituals">
            <h2 class="bd-cat-title">Ritual Essentials</h2>
            <div class="bd-grid">
              <a href="javascript:void(0);" class="bd-tile" data-search="tortli baby care gentle first day">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/MaacareCircle.webp"
                    alt="Maa Care" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                </div>
                <p class="bd-tile-name">Maa Care</p>
                <p class="bd-tile-caption">Tradition, worn with pride.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
            </div>
          </div>

          <div class="bd-cat-block reveal" data-cat="men_rooming">
            <h2 class="bd-cat-title">Men’s Care Essentials</h2>
            <div class="bd-grid">

              <a href="javascript:void(0);" class="bd-tile" data-search="kryo performance sports personal care">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/HammerCircle.webp" alt="Hammer"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <!-- <div class="bd-tile-icon" style="display:none;"><i class="fas fa-bolt"></i></div> -->
                </div>
                <p class="bd-tile-name">Hammer</p>
                <p class="bd-tile-caption">Created for the modern man.</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              <!-- <a href="javascript:void(0);" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/hl.webp" alt="Hahnemann"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Hahnemann</p>
                <p class="bd-tile-caption">Everyday Wellness for Every Household</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a> -->
            </div>
          </div>

          <!-- <div class="bd-cat-block reveal" data-cat="hygiene">
            <h2 class="bd-cat-title">Hygiene</h2>
            <div class="bd-grid">
              <a href="javascript:void(0);" class="bd-tile" data-search="kryo performance sports personal care">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/arctiq.webp" alt="Kryo"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-bolt"></i></div>
                </div>
                <p class="bd-tile-name">Kryo</p>
                <p class="bd-tile-caption">Performance-Grade Personal Care</p>
                <span class="bd-tile-visit">Visit Website <i class="fas fa-arrow-up-right-from-square"></i></span>
              </a>
              

            </div>
          </div> -->

          <div class="bd-empty" id="bdEmpty">
            <i class="fas fa-magnifying-glass"></i>
            <p>No brands match your filter. Try clearing it.</p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
  <script>
    const bfToggle = document.getElementById("bfToggle");
    const bfContent = document.getElementById("bfContent");
    const bfIcon = document.getElementById("bfIcon");

    bfToggle.addEventListener("click", function () {
      bfContent.classList.toggle("show");
      bfIcon.classList.toggle("rotate");
    });
  </script>
</body>

</html>