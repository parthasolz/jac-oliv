<?php

$page_title  = 'Jac Olivol — Brand History';
$active_menu = 'history';
$page_css    = 'history.css';

require_once __DIR__ . '/header-inner.php';

?>

  <div class="page-hero">
    <div class="page-hero-bg hist-hero"></div>
    <div class="page-hero-overlay"></div>
    <div class="dot-pattern" style="bottom:130px;right:32px;z-index:3;"></div>
    <div class="page-hero-content">
      <p class="hero-eyebrow">Brand History</p>
      <h1>Rooted. Trusted. And <br><span class="gold">always evolving.</span></h1>
      <p class="lead-txt">Six decades of purposeful growth. From a small dispensary to India's leading herbal body oil.</p>
    </div>
    <div class="hero-curve"><svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0,60 C480,130 960,130 1440,60 L1440,120 L0,120 Z" fill="#F4EFE6" />
      </svg></div>
  </div>

  <section class="belief-section">
    <img src="./images/left-side-leaf.webp" class="inno-deco-left"
      alt="" onerror="this.style.display='none'" style="bottom:-40px;">
    <div class="container" style="position:relative;z-index:2;">
      <div class="belief-grid">
        <div class="belief-img-wrap reveal-l">
          <img class="belief-img-main"
            src="./images/rashmoy-das.jpeg"
            alt="Our Philosophy"
            onerror="this.src='./images/rashmoy-das.jpeg'">   
             <div class="founder-caption">
              <strong>Late. Sri Rashmoy Das</strong>
              <span>Founder</span>
            </div>       
        </div>
        <div class="reveal-r">
          <p class="eyebrow">Our Founding Story</p>
          <div class="belief-big">Vision & <em>Legacy</em>
          </div>
          <div class="gold-divider"></div>
          <div class="belief-body">
            <p>Hahnemann Laboratory Ltd. was founded by Late. Sri Rashmoy Das (Ayurveda Ratna), who began his journey in homeopathy at just 17. By 18, he became a Super Stockist for a German pharma company and, in 1969, transformed his father's dispensary into a five-story clinic.</p>
            <p>After moving to Kolkata, he set up the first production unit and registered office, incorporating the company in 1980. By 1985, it had become India's largest manufacturer of homeopathic medicines.</p>
            <p>His legacy is now led by his son, Mr. Rajarshi Das, who draws inspiration from his father, Late Sri Rashmoy Das the creator of JAC OLIVOL Body Oil.</p>
            <p>Under Rajarshi's leadership, the brand has grown into a household name in personal care, blending heritage with modern innovation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>