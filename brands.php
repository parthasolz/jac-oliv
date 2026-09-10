<?php
$page_title  = 'Jac Olivol — Our Brands';
$active_menu = 'brands';
require_once __DIR__ . '/header-inner.php';
?>

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
              <a href="catalogue#jac-olivol" class="bd-tile" data-search="jac olivol skin body care olive chemistry">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/JacCircle.webp"
                    alt="Jac Olivol" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-droplet"></i></div>
                </div>
                <p class="bd-tile-name">Jac Olivol</p>
                <p class="bd-tile-caption">Olive Chemistry innovation rooted in tradition.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
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
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
              <!-- <a href="catalogue.php?page=10" class="bd-tile" data-search="olicerin skin hydration olive glycerin">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/olicerin.webp" alt="OliCerin"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-hand-sparkles"></i></div>
                </div>
                <p class="bd-tile-name">OliCerin</p>
                <p class="bd-tile-caption">Olive + Glycerin Hydration Specialists</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
              <a href="catalogue.php?page=6" class="bd-tile"
                data-search="cocoolive skin body care coconut olive tropical">
                <div class="bd-tile-logo">
                  <div class="bd-tile-icon"><i class="fas fa-sun"></i></div>
                </div>
                <p class="bd-tile-name">CocoOlive</p>
                <p class="bd-tile-caption">Tropical Meets Mediterranean</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a> -->

            </div>
          </div>

          <!-- <div class="bd-cat-block reveal" data-cat="baby-care">
            <h2 class="bd-cat-title">Baby Care</h2>
            <div class="bd-grid">
              <a href="catalogue.php?page=8" class="bd-tile" data-search="tortli baby care gentle first day">
                <div class="bd-tile-logo">
                  <div class="bd-tile-icon"><i class="fas fa-baby"></i></div>
                </div>
                <p class="bd-tile-name">Tortli</p>
                <p class="bd-tile-caption">Gentle from the Very First Day</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
              <a href="catalogue.php?page=9" class="bd-tile" data-search="tortli baby care gentle first day">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/MaaCareLogo.png" alt="OliCerin"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                </div>
                <p class="bd-tile-name">Maa Care</p>
                <p class="bd-tile-caption">Health and care you can rely on.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
            </div>
          </div> -->

          <div class="bd-cat-block reveal" data-cat="bath_essential">
            <h2 class="bd-cat-title">Bath Essentials</h2>
            <div class="bd-grid">
              <a href="catalogue#zestup" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/ZestUpCircle.webp"
                    alt="ZestUpLogo" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Zest Up</p>
                <p class="bd-tile-caption">Burst of zest in every wash.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
              <a href="catalogue#hyper-lush" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/HyperlushCircle.webp" alt="Hyper Lush"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Hyper Lush</p>
                <p class="bd-tile-caption">Bold beauty, beautifully you.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
            </div>
          </div>

          <div class="bd-cat-block reveal" data-cat="hygiene_protection">
            <h2 class="bd-cat-title">Personal Care Essentials</h2>
            <div class="bd-grid">
              <a href="catalogue#active-guard" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/ActiveGuardCircle.webp"
                    alt="ActiveGuardLogo"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Active Guard</p>
                <p class="bd-tile-caption">Active protection for a healthy everyday.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
              <a href="catalogue#boro-care" class="bd-tile"
                data-search="cocoolive skin body care coconut olive tropical">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/BoroCareCircle.webp"
                    alt="OliCerin" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                </div>
                <p class="bd-tile-name">Boro Care+</p>
                <p class="bd-tile-caption">Everyday hygiene, elevated.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
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
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a> -->
              <a href="catalogue#arnitone" class="bd-tile" data-search="arnitone hair care arnica oil">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/ArnitoneCircle.webp"
                    alt="Arnitone" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-spa"></i></div>
                </div>
                <p class="bd-tile-name">Arnitone</p>
                <p class="bd-tile-caption">Fragrance led hair care.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
            </div>
          </div>

          <div class="bd-cat-block reveal" data-cat="traditional_rituals">
            <h2 class="bd-cat-title">Ritual Essentials</h2>
            <div class="bd-grid">
              <a href="catalogue#maa-care" class="bd-tile" data-search="tortli baby care gentle first day">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/MaacareCircle.webp"
                    alt="Maa Care" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                </div>
                <p class="bd-tile-name">Maa Care</p>
                <p class="bd-tile-caption">Tradition, worn with pride.</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
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
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
              </a>
              <!-- <a href="javascript:void(0);" class="bd-tile" data-search="hahnemann wellness everyday household">
                <div class="bd-tile-logo">
                  <img src="https://brandaid.digital/proposals/jac-olivol/new/html/images/hl.webp" alt="Hahnemann"
                    onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                  <div class="bd-tile-icon" style="display:none;"><i class="fas fa-capsules"></i></div>
                </div>
                <p class="bd-tile-name">Hahnemann</p>
                <p class="bd-tile-caption">Everyday Wellness for Every Household</p>
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
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
                <span class="bd-tile-visit">View in Catalogue <i class="fas fa-arrow-right"></i></span>
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