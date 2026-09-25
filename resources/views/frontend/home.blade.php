<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="XPU8cYawQv7tzOvZhypx31tIQpfHmGQM4mQDd5c5rP0" />
  <meta name="robots" content="index, follow">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <title>Jac Olivol</title>
  <meta property="og:title" content="Jac Olivol">
  <meta property="og:description" content="Rooted in Ayurvedic wisdom, Jac Olivol brings purposeful wellness, care, and innovation to everyday life.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url('/') }}">
  <meta property="og:image" content="{{ asset('images/jack-olivol.webp') }}">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Jac Olivol">
  <meta name="twitter:description" content="Rooted in Ayurvedic wisdom, Jac Olivol brings purposeful wellness, care, and innovation to everyday life.">
  <meta name="twitter:image" content="{{ asset('images/jack-olivol.webp') }}">
  <script type="application/ld+json">
    {{ json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'Jac Olivol',
        'image' => 'https://jacolivol.com/images/jack-olivol.webp',
        '@id' => '',
        'url' => 'https://jacolivol.com/',
        'telephone' => '+913322369376',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '1, Lower Rawdon St, opposite Premia - Kolkata - Sri Krishna Automotive - Hero Motocorp, Sreepally, Ballygunge,',
            'addressLocality' => 'Kolkata',
            'postalCode' => '700020',
            'addressCountry' => 'IN',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 22.54062977477615,
            'longitude' => 88.35689811349178,
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens' => '10:00',
            'closes' => '19:00',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) }}
  </script>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar-custom" id="mainNav">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="./" class="logo-box">
        <img src="{{ asset('images/jack-olivol.webp') }}" alt="Jac Olivol">
      </a>
      <ul class="navbar-nav d-none d-lg-flex flex-row align-items-center">
        <li class="nav-item has-dd">
          <a class="nav-link" href="#">About Us <i class="fas fa-chevron-down arr-ic"></i></a>
          <div class="dropdown-menu">
            <a href="about">Our Story</a>
            <a href="vision-legacy">Vision & Legacy</a>
            <a href="leadership">Leadership</a>
            <a href="./#global-presence">Global
              Presence</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="brands">Our Brands</a></li>
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
          <a href="./#global-presence">Global
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
  <!-- HERO -->
  <section class="hero" id="hero">
    <div class="hero-inner-clip">
      <div class="hero-slide active" id="slide-0">
        <video class="hero-slide-bg hero-slide-video" autoplay muted loop playsinline preload="auto">
          <source src="./videos/banner-video-JAC-OLIVOL.mp4"
            type="video/mp4">
        </video>
      </div>
      <!-- <div class="hero-slide" id="slide-1">
        <div class="hero-slide-bg"
          style="background-image:url('./images/banner2.webp')">
        </div>
      </div>
      <div class="hero-slide" id="slide-2">
        <div class="hero-slide-bg"
          style="background-image:url('./images/banner3.webp')">
        </div>
      </div> -->
    </div>
    <div id="heroSlideData" style="display:none;">
      <div data-sub="" data-h1="" data-desc=""
        data-img="./images/hero-img.webp"
        data-video="./videos/banner-video-JAC-OLIVOL"></div>
      <!-- <div data-sub="Growing Responsibly" data-h1="Thoughtful Care, Lasting Impact"
        data-desc="We believe responsible growth begins with thoughtful choices - creating products that deliver trusted care while remaining mindful of the people and communities we serve."
        data-img="./images/hero-img2.webp"
        data-video="./videos/Jac-Olivol-Round-The-Year-Soft-Smooth-and-Glowing-Healthy-Skin.mp4">
      </div>
      <div data-sub="Pure Quality Delivered" data-h1="Old Wisdom, Refined for Today"
        data-desc="Rooted in generations of olive care and enhanced by modern innovation, our products are designed to deliver trusted wellness in forms that are convenient, effective, and easy to embrace every day."
        data-img="./images/hero-img3.webp" data-video=""></div> -->
    </div>
    <div class="dot-pattern" style="bottom:170px;right:32px;z-index:3;"></div>
    <div class="dot-pattern" style="top:32%;left:-28px;z-index:3;width:115px;height:190px;"></div>
    <div class="container hero-content">
      <div class="row align-items-center w-100">
        <div class="" style="position:relative;">
          <div id="heroTextWrap"></div>
          <div class="hero-dots mt-4" id="heroDots" style="display: none;">
            <button class="hero-dot active" data-s="0"></button>
            <button class="hero-dot" data-s="1"></button>
            <button class="hero-dot" data-s="2"></button>
          </div>
          <div class="side-arrows" style="display: none;">
            <button class="side-arr" id="heroUp">↑</button>
            <button class="side-arr" id="heroDown">↓</button>
          </div>
        </div>
        <!--
        <div class="col-lg-6 hero-right-col">
          <div style="position:relative;">
            <div class="hero-img-box" id="heroImgBox">
              <div class="hero-img-drop-wrap" id="heroDropWrap">
                <img src="" alt="Hero" id="heroMainImg">
                <div class="hero-img-shimmer"></div>
              </div>
              <div class="hero-vmodal" id="heroVModal" style="border-radius:80px 20px 80px 80px;">
                <button class="vclose" id="vClose"><i class="fas fa-times"></i></button>
                <video id="heroVideo" playsinline loop preload="auto"
                  controlslist="nodownload noplaybackrate nofullscreen" disablepictureinpicture>
                  <source id="heroVideoSrc" src="" type="video/mp4">
                </video>
              </div>
            </div>
            <div class="scroll-wrap" id="scrollWrap">
              <div class="play-btn hidden" id="playBtn"><i class="fas fa-play" style="margin-left:3px;"></i></div>
            </div>
          </div>
        </div>
        -->
      </div>
    </div>
    <div class="hero-curve">

      <!-- Gradient rising upward from the bottom -->
      <div class="hero-bottom-gradient"></div>

      <!-- Existing curved cream shape -->
      <svg class="hero-curve-svg" viewBox="0 0 1440 200" preserveAspectRatio="none">
        <path d="M0,120 C480,200 960,200 1440,120 L1440,200 L0,200 Z"></path>
      </svg>

    </div>
  </section>
  <!-- INNOVATION -->
  <section class="inno-sec" id="innovation">
    <div class="container">
      <div class="inno-top">
        <!-- <div class="inno-mini">Innovating Every Drop of Purity</div> -->
        <h2 class="inno-heading">Rooted in Purpose</h2>
        <p class="inno-desc">From age-old wisdom to thoughtful innovation, everything we do has a reason.</p>
        <div class="inno-mob-arrows">
          <button class="ncarr-btn" id="innoPrev">&#8592;</button>
          <button class="ncarr-btn" id="innoNext">&#8594;</button>
        </div>
      </div>
      <div class="inno-cntr">
        <div class="inno-wrap" id="innoWrap">
          <div class="inno-track" id="innoTrack">
            <a href="javascript:void(0)" class="inno-item">
              <div class="inno-img"><img
                  src="{{ asset('images/advanced-extraction.webp') }}"
                  alt="Advanced Extraction"></div>
              <div class="inno-body">
                <div class="inno-icon"><i class="fa-solid fa-gear"></i></div>
                <h3>Wellness</h3><span class="inno-line"></span>
                <p>Inspired by Ayurveda's timeless wisdom of balance and care. Everyday oiling becomes a ritual of
                  holistic wellness.</p>
                <!-- <div class="inno-link">Learn More <span>→</span></div> -->
              </div>
            </a>
            <a href="javascript:void(0)" class="inno-item">
              <div class="inno-img"><img src="{{ asset('images/care.webp') }}"
                  alt="Smart Quality Control"></div>
              <div class="inno-body">
                <div class="inno-icon"><i class="fa-solid fa-shield-heart"></i></div>
                <h3>Care</h3><span class="inno-line"></span>
                <p>It all comes back to care bringing comfort you can feel and trust that fits seamlessly into your
                  daily rituals.</p>
                <!-- <div class="inno-link">Learn More <span>→</span></div> -->
              </div>
            </a>
            <a href="javascript:void(0)" class="inno-item">
              <div class="inno-img"><img
                  src="{{ asset('images/Innovation.webp') }}"
                  alt="Sustainable Production"></div>
              <div class="inno-body">
                <div class="inno-icon"><i class="fa-solid fa-shield-alt"></i></div>
                <h3>Innovation</h3><span class="inno-line"></span>
                <p>It begins with ancient ingredients, thoughtfully refined through modern science into balanced,
                  mindful care.</p>
                <!-- <div class="inno-link">Learn More <span>→</span></div> -->
              </div>
            </a>
            <a href="javascript:void(0)" class="inno-item">
              <div class="inno-img"><img
                  src="{{ asset('images/quality.webp') }}" alt="Quality"></div>
              <div class="inno-body">
                <div class="inno-icon"><i class="fa-solid fa-shield-alt"></i></div>
                <h3>Quality</h3><span class="inno-line"></span>
                <p>Across every category, the focus remains the same consistent quality, dependable performance, and
                  uncompromised formulation integrity.</p>
                <!-- <div class="inno-link">Learn More <span>→</span></div> -->
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MARQUEE CURVE + SUSTAINABILITY -->

  <section class="sustain marquee-sustain" id="sustainability">
    <div class="sustain-overlay"></div>
    <div class="container">
      <div class="sustainability-arrow">
        <div>
          <p class="sec-sub">Sustainability</p>
          <h2>Building a future powered<br>by sustainability</h2>
        </div>
        <div style="display:flex;gap:9px;margin-top:10px;">
          <button class="carr-btn" id="susPrev"
            style="border-color:rgba(255,255,255,.35);color:rgba(255,255,255,.65);">←</button>
          <button class="carr-btn" id="susNext"
            style="border-color:rgba(255,255,255,.35);color:rgba(255,255,255,.65);">→</button>
        </div>
      </div>
      <div class="sustain-wrap">
        <div class="sus-track" id="susTrack">
          <div class="sus-card"><img
              src="{{ asset('images/thoughtful-production.webp') }}" alt="">
            <div class="sus-cc">
              <h5>Responsible sourcing</h5>
              <p>Choosing ingredients and materials with care, with a focus on quality, traceability and responsible procurement.</p>
            </div>
          </div>
          <div class="sus-card"><img
              src="{{ asset('images/sustainability-img1.webp') }}" alt="">
            <div class="sus-cc">
              <h5>Reducing waste</h5>
              <p>Working towards more efficient use of materials and minimizing waste across our operations.</p>
            </div>
          </div>
          <div class="sus-card"><img
              src="{{ asset('images/ses-growing.webp') }}" alt="">
            <div class="sus-cc">
              <h5>Thoughtful production</h5>
              <p>Balancing growing production needs with responsible processes and long-term environmental consideration.</p>
            </div>
          </div>
          <div class="sus-card"><img src="{{ asset('images/smarter-distribution.webp') }}"
              alt="">
            <div class="sus-cc">
              <h5>Smarter distribution</h5>
              <p>Building an efficient supply network that brings our products closer to consumers while reducing unnecessary movement and handling.</p>
            </div>
          </div>
          <!-- <div class="sus-card"><img
              src="./images/sustainability-advanced-extraction.webp" alt="">
            <div class="sus-cc">
              <h5>Powered by clean energy</h5>
              <p>Shifting to renewable sources across our production facilities.</p>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- our brands -->

  <!-- end our brands -->
  <!-- GLANCE + BRANDS -->
  <div class="glance-wrap" id="global-presence">
    <section class="glance">
      <div class="glance-imgbg"></div>
      <div class="glance-yt-bg">
        <!-- <video autoplay muted loop playsinline preload="auto" class="glance-bg-video">
          <source src="./videos/videoplayback-bg.mp4"
            type="video/mp4">
        </video> -->
        <img src="{{ asset('images/glance-bg.webp') }}" alt="" class="glance-bg-img">
      </div>
      <div class="glance-overlay"></div>
      <div class="container glance-content">
        <p class="sec-sub">Delivering purity at scale</p>
        <h2>Jac Olivol at a Glance</h2>
        <p class="desc">A growing brand focused on quality sourcing, advanced processing, and expanding market presence.
        </p>
        <div class="glance-stats">
          <div class="stat-item">
            <h4>17.5 Million+</h4>
            <p>Bottles Sold in Eastern India (2025)</p>
          </div>
          <div class="stat-item">
            <h4>10+ Brands</h4>
            <p>Under One Group</p>
          </div>
          <div class="stat-item">
            <h4>Skincare-Led</h4>
            <p>Innovation Pipeline 2026</p>
          </div>
          <div class="stat-item">
            <h4>Global</h4>
            <p>Expansion Vision</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- EVENTS & GALLERY -->
  <section class="event-gallery-sec" id="eventsGallery">
    <div class="container position-relative" style="z-index:3;">
      <div class="event-head">
        <div>
          <p class="event-mini">Moments that inspire</p>
          <h2 class="event-title">Events &amp; Gallery</h2>
          <p class="event-desc">Explore our journey through events, initiatives, and memorable moments that reflect our
            values and vision.</p>
        </div>
        <div class="event-nav">
          <button id="eventPrev"><i class="fa-solid fa-arrow-left"></i></button>
          <button id="eventNext"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
      </div>
      <div class="event-overflow">
        <div class="event-track" id="eventTrack">
          <div class="event-card" data-type="image" data-src="images/event_img1.webp">
            <div class="event-media"><img src="{{ asset('images/event_img1.webp') }}" alt="Jackfruit Expo"><span
                class="event-badge">Event</span></div>
            <div class="event-product-bar">
              <div class="epb-info">
                <div class="epb-name">Our Knight Riders’ family<br>grows stronger 💜</div>
              </div>
            </div>
          </div>
          <div class="event-card" data-type="video" data-src="videos/event_video1.mp4">
            <div class="event-media">
              <video autoplay muted loop playsinline>
                <source src="videos/event_video1.mp4" type="video/mp4">
              </video>
              <span class="event-badge">Video</span>
            </div>
            <div class="event-product-bar">
              <div class="epb-info">
                <div class="epb-name">New Protective Gear for<br>Kultali’s Tiger Response Team</div>
              </div>
            </div>
          </div>
          <div class="event-card" data-type="video" data-src="videos/event_video2.mp4">
            <div class="event-media">
              <video autoplay muted loop playsinline>
                <source src="videos/event_video2.mp4" type="video/mp4">
              </video>
              <span class="event-badge">Videos</span>
            </div>
            <div class="event-product-bar">
              <div class="epb-info">
                <div class="epb-name">Featured business story on<br>Ekam Studios.</div>
              </div>
            </div>
          </div>
          <!-- <div class="event-card" data-type="video"
            data-src="./videos/videoplayback.mp4">
            <div class="event-media">
              <video autoplay muted loop playsinline>
                <source src="./videos/videoplayback.mp4"
                  type="video/mp4">
              </video>
              <span class="event-badge">Video</span>
            </div>
            <div class="event-product-bar">
              <div class="epb-info">
                <div class="epb-name"> Hahnemann's Jac Olivol<br>Group of Products LLP</div>
              </div>
            </div>
          </div> -->
          <div class="event-card" data-type="video" data-src="videos/event_video3.mp4">
            <div class="event-media">
              <video autoplay muted loop playsinline>
                <source src="videos/event_video3.mp4" type="video/mp4">
              </video>
              <span class="event-badge">Video</span>
            </div>
            <div class="event-product-bar">
              <div class="epb-info">
                <div class="epb-name">400+ Dealers<br>One Grand Celebration.</div>
              </div>
            </div>
          </div>
          <!-- <div class="event-card" data-type="image"
            data-src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=600&auto=format&fit=crop">
            <div class="event-media"><img
                src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=600&auto=format&fit=crop"
                alt="Wellness Camp"><span class="event-badge">Event</span></div>
            <div class="event-product-bar">
              <div class="epb-info">
                <div class="epb-name">Wellness Camp 2026</div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- CAREERS -->
  <section class="careers" id="careers">
    <div class="careers-bg"></div>
    <div class="container">
      <div class="d-flex align-items-center justify-content-between flex-wrap gap-4">
        <div>
          <p class="sec-sub">Careers</p>
          <h2>Where ambition<br>meets opportunity.</h2>
          <p class="careers-desc">Join a team driven by innovation, purpose, and growth. At Jac Olivol, we create
            opportunities for
            passionate people to build meaningful careers and make a lasting impact.</p>
          <a href="careers" class="btn-career">Explore open roles <span class="barr">→</span></a>
        </div>
        <div class="career-img">
          <div class="dot-pattern" style="right:0;z-index:1;bottom:-108px;"></div>
          <div class="dot-pattern" style="top:140px;right:500px;"></div>
          <img src="{{ asset('images/careers.webp') }}" alt="Careers"
            onerror="this.style.display='none'">
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->

    @include('frontend.layouts.footer')


  <!-- EVENT LIGHTBOX -->
  <div class="event-lightbox" id="eventLightbox">
    <div class="event-lightbox-inner">
      <button class="event-lightbox-close" id="eventLightboxClose">
        <i class="fas fa-times"></i>
      </button>
      <img id="lightboxImage" src="" alt="Preview">
      <video id="lightboxVideo" controls playsinline controlslist="nodownload">
        <source id="lightboxVideoSrc" src="" type="video/mp4">
      </video>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    /* ═══════════════════════════════════════════════════════════════
       UNIVERSAL AUTO-LOOP CAROUSEL FACTORY
       - Seamless infinite loop (clone-based)
       - Auto-advances only when section is in viewport
       - Arrow click resets timer (no conflict)
       - Responsive: 4 → 2 (≤991) → 1 (≤767)
       - Each instance has its own independent interval + timer
    ═══════════════════════════════════════════════════════════════ */
    /**
     * createAutoCarousel(config)
     *
     * config = {
     *   trackId:      string   — ID of the flex track element
     *   prevId:       string   — ID of prev arrow button
     *   nextId:       string   — ID of next arrow button
     *   sectionId:    string   — ID of section to observe for viewport
     *   gap:          number   — gap in px between cards
     *   interval:     number   — ms between auto-slides
     *   visBreaks:    [{max, count}]  — breakpoints for visible count
     *   dotContainerId: string|null  — optional dot container ID
     *   cardSelector:  string  — CSS selector for cards within track
     * }
     */
    function createAutoCarousel(cfg) {
      const track = document.getElementById(cfg.trackId);
      const prevBtn = document.getElementById(cfg.prevId);
      const nextBtn = document.getElementById(cfg.nextId);
      const section = document.getElementById(cfg.sectionId);
      if (!track || !prevBtn || !nextBtn) return null;
      const GAP = cfg.gap || 20;
      const INTERVAL = cfg.interval || 4000;
      const cardSel = cfg.cardSelector || '.auto-card';
      // Grab original cards
      const origCards = [...track.querySelectorAll(cardSel)];
      if (!origCards.length) return null;
      const total = origCards.length;
      // Clone all originals and append → seamless forward/backward
      origCards.forEach(c => track.appendChild(c.cloneNode(true)));
      // Also prepend last `total` clones for reverse wrapping
      const prependFrag = document.createDocumentFragment();
      for (let i = 0; i < total; i++) {
        prependFrag.appendChild(origCards[(total - total + i) % total].cloneNode(true));
      }
      track.insertBefore(prependFrag, track.firstChild);
      // Real cards now start at index `total` (after the prepended clones)
      let cur = total; // points to first real card
      let locked = false;
      let timer = null;
      let inView = false;
      function vis() {
        if (cfg.visBreaks) {
          const w = window.innerWidth;
          for (const b of cfg.visBreaks) {
            if (w <= b.max) return b.count;
          }
        }
        return 4;
      }
      function cardW() {
        const c = track.children[cur];
        return c ? (c.getBoundingClientRect().width || c.offsetWidth) + GAP : 0;
      }
      function jump(animate) {
        track.style.transition = animate
          ? `transform .60s cubic-bezier(.22,.61,.36,1)`
          : 'none';
        track.style.transform = `translateX(-${cur * cardW()}px)`;
        updateDots();
      }
      function updateDots() {
        if (!cfg.dotContainerId) return;
        const dotWrap = document.getElementById(cfg.dotContainerId);
        if (!dotWrap) return;
        const realIdx = (cur - total + total) % total;
        dotWrap.querySelectorAll('.cdot').forEach((d, i) => {
          d.classList.toggle('active', i === realIdx % total);
        });
      }
      function stepNext(userAction) {
        if (locked) return;
        locked = true;
        cur++;
        jump(true);
        setTimeout(() => {
          // If we've gone into the appended clones, snap back silently
          if (cur >= total + total) {
            cur = total;
            jump(false);
          }
          locked = false;
        }, 680);
        if (userAction) resetTimer();
      }
      function stepPrev(userAction) {
        if (locked) return;
        locked = true;
        cur--;
        jump(true);
        setTimeout(() => {
          // If we've gone into the prepended clones, snap forward silently
          if (cur < total) {
            cur = total + total - 1;
            jump(false);
          }
          locked = false;
        }, 680);
        if (userAction) resetTimer();
      }
      function startTimer() {
        if (timer) clearInterval(timer);
        timer = setInterval(() => {
          if (inView && !locked) stepNext(false);
        }, INTERVAL);
      }
      function resetTimer() {
        if (timer) clearInterval(timer);
        // resume after one interval
        timer = setInterval(() => {
          if (inView && !locked) stepNext(false);
        }, INTERVAL);
      }
      function stopTimer() {
        if (timer) { clearInterval(timer); timer = null; }
      }
      // Viewport observer — only run when section is visible
      if (section) {
        const obs = new IntersectionObserver((entries) => {
          entries.forEach(e => {
            inView = e.isIntersecting;
            if (inView) startTimer();
            else stopTimer();
          });
        }, { threshold: 0.15 });
        obs.observe(section);
      } else {
        inView = true;
        startTimer();
      }
      prevBtn.addEventListener('click', () => stepPrev(true));
      nextBtn.addEventListener('click', () => stepNext(true));
      window.addEventListener('resize', () => {
        requestAnimationFrame(() => jump(false));
      });
      // Build dots if container given
      if (cfg.dotContainerId) {
        const dotWrap = document.getElementById(cfg.dotContainerId);
        if (dotWrap) {
          dotWrap.innerHTML = '';
          for (let i = 0; i < total; i++) {
            const btn = document.createElement('button');
            btn.className = 'cdot' + (i === 0 ? ' active' : '');
            btn.addEventListener('click', () => {
              cur = total + i;
              jump(true);
              resetTimer();
            });
            dotWrap.appendChild(btn);
          }
        }
      }
      // Initial position (no animation)
      requestAnimationFrame(() => jump(false));
      return { stepNext, stepPrev };
    }
    /* ══════════════════════════════════════════════════════════════
       SLIDE DATA
    ══════════════════════════════════════════════════════════════ */
    const slideDataEls = document.querySelectorAll('#heroSlideData > div');
    const heroSlides = Array.from(slideDataEls).map(el => ({
      sub: el.dataset.sub, h1: el.dataset.h1, desc: el.dataset.desc,
      img: el.dataset.img, video: el.dataset.video || ''
    }));
    /* ══════════════════════════════════════════════════════════════
       MOBILE MENU
    ══════════════════════════════════════════════════════════════ */
    document.getElementById('mobToggle').addEventListener('click', () => {
      const m = document.getElementById('mobMenu');
      m.style.display = m.style.display === 'none' ? 'block' : 'none';
    });
    document.querySelectorAll('.mob-item[data-dd="1"]').forEach(item => {
      item.querySelector('.mob-link').addEventListener('click', e => {
        e.preventDefault(); item.classList.toggle('open');
      });
    });
    /* ══════════════════════════════════════════════════════════════
       HERO TEXT ANIMATION
    ══════════════════════════════════════════════════════════════ */
    const heroTextWrap = document.getElementById('heroTextWrap');
    function buildAnimatedH1(text) {
      const words = text
        .replace(/<br>/g, ' <br> ')
        .split(' ')
        .filter(Boolean);
      let html = '<h1 style="overflow:visible;line-height:1.15;">';
      words.forEach(w => {
        if (w === '<br>') {
          html += '<br>';
        } else {
          html += `<span class="h1-word">
        <span class="h1-word-inner">${w}</span>
      </span> `;
        }
      });
      return html + '</h1>';
    }
    function renderHeroText(s) {
      heroTextWrap.innerHTML = `<p class="hero-sub hero-sub-anim">${s.sub}</p>` + buildAnimatedH1(s.h1) + `<p class="desc desc-anim">${s.desc}</p>`;
      requestAnimationFrame(() => requestAnimationFrame(() => {
        heroTextWrap.querySelector('.hero-sub-anim').classList.add('in');
        heroTextWrap.querySelectorAll('.h1-word').forEach(w => w.classList.add('h1-visible'));
        heroTextWrap.querySelector('.desc-anim').classList.add('in');
        heroTextWrap.querySelector('.btn-anim').classList.add('in');
      }));
    }
    function animateTextOut() {
      heroTextWrap.querySelector('.hero-sub-anim')?.classList.remove('in');
      heroTextWrap.querySelector('.desc-anim')?.classList.remove('in');
      heroTextWrap.querySelector('.btn-anim')?.classList.remove('in');
      heroTextWrap.querySelectorAll('.h1-word').forEach(w => w.classList.remove('h1-visible'));
    }
    /* ══════════════════════════════════════════════════════════════
       HERO CAROUSEL (auto + manual, viewport-gated)
    ══════════════════════════════════════════════════════════════ */
    const dropWrap = document.getElementById('heroDropWrap');
    const mainImg = document.getElementById('heroMainImg');
    const playBtn = document.getElementById('playBtn');
    const videoModal = document.getElementById('heroVModal');
    const heroVideoEl = document.getElementById('heroVideo');
    const heroVideoSrc = document.getElementById('heroVideoSrc');
    let curSlide = 0, isSliding = false;
    const slideEls = document.querySelectorAll('.hero-slide');
    const hDots = document.querySelectorAll('.hero-dot');
    let heroAutoTimer = null;
    let heroInView = false;
    let isVideoPlaying = false;
    let heroVideoEndedHandler = null;
    function clearHeroAutoTimer() {
      if (heroAutoTimer) { clearTimeout(heroAutoTimer); clearInterval(heroAutoTimer); heroAutoTimer = null; }
      if (heroVideoEndedHandler) {
        heroVideoEndedHandler.el.removeEventListener('ended', heroVideoEndedHandler.fn);
        heroVideoEndedHandler = null;
      }
    }
    function scheduleHeroAdvance() {
      clearHeroAutoTimer();
      if (!heroInView) return;
      if (slideEls.length <= 1) return; // only one slide — video loops natively, nothing to advance to
      const bgVideo = slideEls[curSlide].querySelector('video.hero-slide-video');
      if (bgVideo) {
        const onEnded = () => { if (heroInView && !isSliding) goSlide(curSlide + 1); };
        bgVideo.addEventListener('ended', onEnded, { once: true });
        heroVideoEndedHandler = { el: bgVideo, fn: onEnded };
        if (bgVideo.paused) { bgVideo.play().catch(() => { }); }
      } else {
        heroAutoTimer = setTimeout(() => {
          if (heroInView && !isSliding) goSlide(curSlide + 1);
        }, 5000);
      }
    }
    function goSlide(n) {
      if (isSliding) return; isSliding = true;
      const next = ((n % slideEls.length) + slideEls.length) % slideEls.length;
      if (next === curSlide) { isSliding = false; return; }
      clearHeroAutoTimer();
      slideEls[curSlide].classList.remove('active');
      hDots[curSlide].classList.remove('active');
      slideEls[next].classList.add('active');
      hDots[next].classList.add('active');
      animateTextOut();
      setTimeout(() => renderHeroText(heroSlides[next]), 260);
      if (mainImg) mainImg.src = heroSlides[next].img;
      if (heroSlides[next].video) {
        if (heroVideoSrc) heroVideoSrc.src = heroSlides[next].video;
        if (heroVideoEl) heroVideoEl.load();
        if (playBtn) playBtn.classList.remove('hidden');
      } else {
        if (playBtn) playBtn.classList.add('hidden');
      }
      const nextBgVideo = slideEls[next].querySelector('video.hero-slide-video');
      if (nextBgVideo) { nextBgVideo.currentTime = 0; nextBgVideo.play().catch(() => { }); }
      curSlide = next;
      setTimeout(() => { isSliding = false; }, 1200);
      scheduleHeroAdvance();
    }
    function startHeroAuto() {
      scheduleHeroAdvance();
    }
    function resetHeroAuto() {
      scheduleHeroAdvance();
    }
    const heroObs = new IntersectionObserver(entries => {
      entries.forEach(e => {
        heroInView = e.isIntersecting;
        if (heroInView) scheduleHeroAdvance();
        else clearHeroAutoTimer();
      });
    }, { threshold: 0.2 });
    heroObs.observe(document.getElementById('hero'));
    if (mainImg) mainImg.src = heroSlides[0].img;
    renderHeroText(heroSlides[0]);
    if (heroSlides[0].video) { if (heroVideoSrc) heroVideoSrc.src = heroSlides[0].video; if (heroVideoEl) heroVideoEl.load(); if (playBtn) playBtn.classList.remove('hidden'); }
    hDots.forEach(d => d.addEventListener('click', () => { goSlide(+d.dataset.s); resetHeroAuto(); }));
    document.getElementById('heroUp').addEventListener('click', () => { goSlide(curSlide - 1); resetHeroAuto(); });
    document.getElementById('heroDown').addEventListener('click', () => { goSlide(curSlide + 1); resetHeroAuto(); });
    const scrollWrapEl = document.getElementById('scrollWrap');
    if (scrollWrapEl) {
      scrollWrapEl.addEventListener('click', (e) => {
        if (e.target.closest('#playBtn')) {
          e.stopPropagation();
          return;
        }
        document
          .getElementById('innovation')
          .scrollIntoView({
            behavior: 'smooth'
          });
      });
    }
    /* VIDEO MODAL */
    if (playBtn) {
      playBtn.addEventListener('click', () => {
        // auto slider stop
        isVideoPlaying = true;
        clearInterval(heroAutoTimer);
        if (videoModal) videoModal.classList.add('open');
        playBtn.style.display = 'none';
        if (heroVideoEl) { heroVideoEl.muted = false; heroVideoEl.play(); }
      });
    }
    const vCloseBtn = document.getElementById('vClose');
    if (vCloseBtn) {
      vCloseBtn.addEventListener('click', () => {
        if (heroVideoEl) { heroVideoEl.pause(); heroVideoEl.currentTime = 0; }
        if (videoModal) videoModal.classList.remove('open');
        // auto slider abar start
        isVideoPlaying = false;
        startHeroAuto();
        if (heroSlides[curSlide].video && playBtn) {
          playBtn.style.display = 'flex';
        }
      });
    }
    if (heroVideoEl) {
      heroVideoEl.addEventListener('ended', () => {
        isVideoPlaying = false;
        startHeroAuto();
      });
    }
    /* ══════════════════════════════════════════════════════════════
       INNOVATION CAROUSEL — auto loop
    ══════════════════════════════════════════════════════════════ */
    createAutoCarousel({
      trackId: 'innoTrack',
      prevId: 'innoPrev',
      nextId: 'innoNext',
      sectionId: 'innovation',
      gap: 28,
      interval: 3500,
      cardSelector: '.inno-item',
      visBreaks: [
        { max: 767, count: 1 },
        { max: 991, count: 1 },
        { max: 1200, count: 1 },
        { max: 99999, count: 2 }
      ]
    });
    /* ══════════════════════════════════════════════════════════════
       SUSTAINABILITY CAROUSEL — auto loop
    ══════════════════════════════════════════════════════════════ */
    createAutoCarousel({
      trackId: 'susTrack',
      prevId: 'susPrev',
      nextId: 'susNext',
      sectionId: 'sustainability',
      gap: 20,
      interval: 3800,
      cardSelector: '.sus-card',
      visBreaks: [
        { max: 767, count: 1 },
        { max: 991, count: 2 },
        { max: 99999, count: 4 }
      ]
    });
    /* ══════════════════════════════════════════════════════════════
       EVENTS CAROUSEL — auto loop
    ══════════════════════════════════════════════════════════════ */
    createAutoCarousel({
      trackId: 'eventTrack',
      prevId: 'eventPrev',
      nextId: 'eventNext',
      sectionId: 'eventsGallery',
      gap: 16,
      interval: 4200,
      cardSelector: '.event-card',
      visBreaks: [
        { max: 480, count: 1 },
        { max: 767, count: 1 },
        { max: 991, count: 2 },
        { max: 1200, count: 3 },
        { max: 99999, count: 4 }
      ]
    });
    /* ══════════════════════════════════════════════════════════════
       LATEST UPDATES — TABS + PER-PANEL AUTO CAROUSEL
    ══════════════════════════════════════════════════════════════ */
    document.addEventListener('DOMContentLoaded', function () {
      const panels = document.querySelectorAll('.upd-panel');
      const tabs = document.querySelectorAll('.upd-tab');
      const panelCarousels = [];
      panels.forEach((panel, idx) => {
        const track = panel.querySelector('.upd-track');
        const cards = [...panel.querySelectorAll('.upd-card')];
        const dotWrap = panel.querySelector('.cdots');
        if (!track || !cards.length) return;
        const GAP = 20;
        const total = cards.length;
        const INTV = 3500 + idx * 200; // slightly different timings
        // Clone all for seamless loop
        cards.forEach(c => track.appendChild(c.cloneNode(true)));
        // Prepend clones
        const frag = document.createDocumentFragment();
        cards.forEach(c => frag.appendChild(c.cloneNode(true)));
        track.insertBefore(frag, track.firstChild);
        let cur = total;
        let locked = false;
        let timer = null;
        let inView = false;
        function vis() {
          const w = window.innerWidth;
          if (w <= 767) return 1;
          if (w <= 991) return 2;
          return 4;
        }
        function cW() { const c = track.children[0]; return c ? c.offsetWidth + GAP : 0; }
        function jump(animate) {
          track.style.transition = animate ? 'transform .55s cubic-bezier(.25,.46,.45,.94)' : 'none';
          track.style.transform = `translateX(-${cur * cW()}px)`;
          if (dotWrap) {
            const realIdx = (cur - total) % total;
            dotWrap.querySelectorAll('.cdot').forEach((d, i) => d.classList.toggle('active', i === realIdx));
          }
        }
        function stepNext() {
          if (locked) return; locked = true;
          cur++;
          jump(true);
          setTimeout(() => {
            if (cur >= total + total) { cur = total; jump(false); }
            locked = false;
          }, 580);
        }
        function stepPrev() {
          if (locked) return; locked = true;
          cur--;
          jump(true);
          setTimeout(() => {
            if (cur < total) { cur = total + total - 1; jump(false); }
            locked = false;
          }, 580);
        }
        function startTimer() {
          if (timer) clearInterval(timer);
          timer = setInterval(() => { if (inView && !locked && panel.classList.contains('active')) stepNext(); }, INTV);
        }
        function stopTimer() { if (timer) { clearInterval(timer); timer = null; } }
        function resetTimer() { stopTimer(); startTimer(); }
        // Observe the whole latestUpd section
        const secEl = document.getElementById('latestUpd');
        if (secEl) {
          const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
              inView = e.isIntersecting;
              if (inView && panel.classList.contains('active')) startTimer();
              else stopTimer();
            });
          }, { threshold: 0.15 });
          obs.observe(secEl);
        }
        // Build dots
        if (dotWrap) {
          dotWrap.innerHTML = '';
          for (let i = 0; i < total; i++) {
            const btn = document.createElement('button');
            btn.className = 'cdot' + (i === 0 ? ' active' : '');
            btn.addEventListener('click', () => { cur = total + i; jump(true); resetTimer(); });
            dotWrap.appendChild(btn);
          }
        }
        window.addEventListener('resize', () => jump(false));
        jump(false);
        function resetToStart() {
          cur = total;
          jump(false);
        }
        panelCarousels.push({ panel, startTimer, stopTimer, resetTimer, resetToStart });
      });
      // Tabs
      tabs.forEach(tab => {
        tab.addEventListener('click', function () {
          const target = +this.getAttribute('data-tab');
          tabs.forEach(t => t.classList.remove('active'));
          this.classList.add('active');
          panels.forEach((panel, i) => {
            panel.classList.toggle('active', i === target);
          });
          // Reset carousel position to start for newly active panel, then restart timer
          panelCarousels.forEach(pc => {
            pc.stopTimer();
            if (pc.panel.classList.contains('active')) {
              // Reset to beginning (no animation)
              pc.resetToStart();
              pc.startTimer();
            }
          });
        });
      });
    });
    /* ══════════════════════════════════════════════════════════════
       BRANDS AUTO-SCROLL (marquee)
    ══════════════════════════════════════════════════════════════ */
    (() => {
      const track = document.getElementById('brandsTrack');
      if (!track) return;
      let off = 0, paused = false;
      track.parentElement.addEventListener('mouseenter', () => paused = true);
      track.parentElement.addEventListener('mouseleave', () => paused = false);
      function tick() {
        if (!paused) {
          off -= 0.55;
          if (off < -(track.scrollWidth / 2)) off = 0;
          track.style.transform = `translateX(${off}px)`;
        }
        requestAnimationFrame(tick);
      }
      tick();
    })();
    /* ══════════════════════════════════════════════════════════════
       ARC MARQUEE
    ══════════════════════════════════════════════════════════════ */
    (() => {
      const tp = document.getElementById('sustainArcTP');
      if (!tp) return;
      let off = 0;
      function tick() { off -= 0.022; if (off <= -33.34) off = 0; tp.setAttribute('startOffset', off + '%'); requestAnimationFrame(tick); }
      tick();
    })();
    /* ══════════════════════════════════════════════════════════════
       SUSTAINABILITY SCROLL REVEAL
    ══════════════════════════════════════════════════════════════ */
    const marqueeSustain = document.querySelector('.marquee-sustain');
    if (marqueeSustain) {
      const sustainObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) marqueeSustain.classList.add('in-view');
          else marqueeSustain.classList.remove('in-view');
        });
      }, { threshold: 0.15 });
      sustainObs.observe(marqueeSustain);
    }
  </script>
  <script>
    /* EVENT LIGHTBOX */
    const eventLightbox = document.getElementById('eventLightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxVideo = document.getElementById('lightboxVideo');
    const lightboxVideoSrc = document.getElementById('lightboxVideoSrc');
    const lightboxClose = document.getElementById('eventLightboxClose');
    document.querySelectorAll('.event-card').forEach(card => {
      card.addEventListener('click', () => {
        const type = card.dataset.type;
        const src = card.dataset.src;
        eventLightbox.classList.add('active');
        document.body.classList.add('lightbox-open');
        lightboxImage.classList.remove('show');
        lightboxVideo.classList.remove('show');
        /* IMAGE */
        if (type === 'image') {
          lightboxImage.src = src;
          lightboxImage.classList.add('show');
          lightboxVideo.pause();
          lightboxVideo.currentTime = 0;
        }
        /* VIDEO */
        if (type === 'video') {
          lightboxVideoSrc.src = src;
          lightboxVideo.load();
          lightboxVideo.classList.add('show');
          setTimeout(() => {
            lightboxVideo.play();
          }, 200);
        }
      });
    });
    /* CLOSE */
    function closeEventLightbox() {
      eventLightbox.classList.remove('active');
      document.body.classList.remove('lightbox-open');
      lightboxVideo.pause();
      lightboxVideo.currentTime = 0;
      lightboxImage.src = '';
      lightboxVideoSrc.src = '';
    }
    lightboxClose.addEventListener('click', closeEventLightbox);
    /* OUTSIDE CLICK */
    eventLightbox.addEventListener('click', (e) => {
      if (e.target === eventLightbox) {
        closeEventLightbox();
      }
    });
    /* ESC */
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        closeEventLightbox();
      }
    });
  </script>
</body>

</html>
