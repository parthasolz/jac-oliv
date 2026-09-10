<?php
$page_title  = 'Jac Olivol — Our Story';
$active_menu = 'about';

require_once __DIR__ . '/header-inner.php';
?>

  <div class="page-hero">
    <div class="page-hero-bg about-hero"></div>
    <div class="page-hero-overlay"></div>
    <div class="dot-pattern" style="bottom:130px;right:32px;z-index:3;"></div>
    <div class="dot-pattern" style="top:38%;left:-28px;z-index:3;width:115px;height:190px;"></div>
    <div class="page-hero-content">
      <p class="hero-eyebrow">Our Story</p>
      <h1>Where Tradition <br>Meets <span class="gold">Care</span></h1>
      <p class="lead-txt">Founded on a belief in the restorative power of nature, Jac Olivol has evolved through
        generations while staying true to its purpose: creating products that deliver trusted care, quality, and everyday
        wellness.</p>
    </div>
    <div class="hero-curve"><svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path d="M0,60 C480,130 960,130 1440,60 L1440,120 L0,120 Z" fill="#F4EFE6" />
      </svg></div>
  </div>

  <!-- Story Section -->
  <section class="sec sec-cream" style="position:relative;overflow:hidden;">
    <div class="container" style="position:relative;z-index:2;">
      <div class="story-split">
        <div class="story-img-wrap reveal-l">
          <img class="story-img-main"
            src="./images/advanced-extraction.webp"
            alt="Jac Olivol Heritage"
            onerror="this.src='https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop'">
          <img class="story-img-accent" src="./images/care.webp"
            alt="Jac Olivol Products"
            onerror="this.src='https://images.unsplash.com/photo-1608248597279-f99d160bfcbc?q=80&w=600&auto=format&fit=crop'">
          <div class="story-badge">
            <strong>60+</strong>
            Years of Heritage
          </div>
        </div>
        <div class="reveal-r">
          <p class="eyebrow">Our Founding Story</p>
          <h2 class="section-title">Rooted in Purpose,<br><span class="gold">Built on Trust</span></h2>
          <div class="gold-divider"></div>
          <p style="font-size:14.5px;line-height:1.9;color:rgba(0,0,0,.75);margin-bottom:16px;">The Jac Olivol journey
            began with Late Sri Rashmoy Das, a visionary who believed in the healing power of nature and the importance
            of accessible, dependable care. Guided by this belief, he established a small dispensary that gradually
            evolved into a trusted homeopathic clinic, built on integrity, compassion, and a commitment to improving
            everyday well-being.</p>
          <p style="font-size:14.5px;line-height:1.9;color:rgba(0,0,0,.75);margin-bottom:16px;">This foundation led to
            the establishment of Hahnemann Laboratory, laying the groundwork for a business dedicated to quality,
            innovation, and consumer trust. Over the years, the company expanded its expertise and deepened its
            understanding of the evolving needs of Indian consumers. The success of Jac Olivol Body Oil marked an
            important milestone in this journey. More than a product, it became a symbol of trust for generations of
            consumers and helped create a strong foundation for future growth. The confidence earned through this
            success enabled the company to expand its vision, develop new brands, and enter diverse personal care and
            wellness categories.</p>
          <p style="font-size:14.5px;line-height:1.9;color:rgba(0,0,0,.75);margin-bottom:16px;">Today, under the leadership of Mr. Rajarshi Das and Mr. Ritesh Das, Jac Olivol Group continues to build on this legacy, bringing together tradition, innovation, and everyday wellness to create brands that serve consumers across generations and markets.</p>
          <!-- <p style="font-size:14.5px;line-height:1.9;color:rgba(0,0,0,.75);margin-bottom:32px;">The four cards appearing
            below this would be:</p> -->
          <!-- <div class="story-chips">
            <div class="story-chip"><i class="fas fa-leaf"></i> Natural Wellness (where we started)</div>
            <div class="story-chip"><i class="fas fa-shield-heart"></i> Trusted Care (what we built)</div>
            <div class="story-chip"><i class="fas fa-flask"></i> Meaningful Innovation (how we evolve)</div>
            <div class="story-chip"><i class="fas fa-hands-holding"></i> Enduring Legacy (what we leave behind)</div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Core Values -->
  <section class="sec sec-dark">
    <div class="container">
      <div class="reveal" style="text-align:center;">
        <p class="eyebrow center">What Drives Us</p>
        <h2 class="section-title light" style="text-align:center;">Our Core <span class="gold">Values</span></h2>
      </div>
      <div class="values-grid">
        <div class="value-card reveal" data-d="1">
          <div class="value-num">01</div>
          <div class="value-icon"><i class="fas fa-landmark"></i></div>
          <h3>Heritage</h3>
          <p>Honouring the values that shaped our journey.</p>
        </div>
        <div class="value-card reveal" data-d="2">
          <div class="value-num">02</div>
          <div class="value-icon"><i class="fas fa-handshake"></i></div>
          <h3>Trust</h3>
          <p>Building lasting relationships through quality and consistency.</p>
        </div>
        <div class="value-card reveal" data-d="3">
          <div class="value-num">03</div>
          <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
          <h3>Innovation</h3>
          <p>Transforming ideas into meaningful everyday solutions.</p>
        </div>
        <div class="value-card reveal" data-d="4">
          <div class="value-num">04</div>
          <div class="value-icon"><i class="fas fa-hand-holding-heart"></i></div>
          <h3>Care</h3>
          <p>Putting people at the centre of everything we do.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Quote Block — image 1 style: cream bg, dark centered block -->
  <div class="quote-section">
    <div class="container" style="position:relative;">
      <!-- <span class="quote-page-label">Our Story Page</span> -->
      <div class="quote-block reveal">
        <!-- <span class="quote-mark-big">"</span> -->
        <blockquote>
          From a small dispensary to a growing portfolio of trusted brands, our purpose has remained constant:
          enriching everyday lives through trust, care, and innovation.
          <cite>— The Jac Olivol Story</cite>
        </blockquote>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>