<?php

$page_title  = 'Jac Olivol — Careers';
$active_menu = 'careers';
$page_css    = 'careers.css';

require_once __DIR__ . '/header-inner.php';

?>

  <!-- ==========================================
       PAGE HERO
  ========================================== -->

  <div class="page-hero">

    <div class="page-hero-bg careers-hero"></div>

    <div class="page-hero-overlay"></div>

    <div
      class="dot-pattern"
      style="bottom:130px;right:32px;z-index:3;">
    </div>

    <div
      class="dot-pattern"
      style="top:38%;left:-28px;z-index:3;width:115px;height:190px;">
    </div>

    <div class="page-hero-content">

      <p class="hero-eyebrow">Careers</p>

      <h1>
        Build something<br>
        that <span class="gold">truly matters</span>
      </h1>

      <p class="lead-txt">
        Join a team where heritage meets ambition, and every role contributes to care that reaches
        millions of homes across India.
      </p>

    </div>

    <div class="hero-curve">
      <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
        <path
          d="M0,60 C480,130 960,130 1440,60 L1440,120 L0,120 Z"
          fill="#F4EFE6" />
      </svg>
    </div>

  </div>


  <!-- ==========================================
       LIFE AT JAC OLIVOL
  ========================================== -->

  <section class="life-sec">

    <div class="container" style="position:relative;z-index:2;">

      <div class="reveal" style="text-align:center;">

        <p class="eyebrow center">
          Life at Jac Olivol
        </p>

        <h2
          class="section-title"
          style="text-align:center;color:#111;">

          Where Work Feels<br>
          <span class="gold">Like Purpose</span>

        </h2>

      </div>


      <div class="life-mosaic">

        <div class="life-tile tall reveal-l">

          <img
            src="./images/careers-g1.png"
            alt="Team collaboration"
            onerror="this.src='./images/careers-g1.png'">

          <div class="life-tile-label">
            Collaboration
          </div>

        </div>


        <div class="life-tile reveal" data-d="1">

          <img
            src="./images/careers-g5.png"
            alt="R&D Lab"
            onerror="this.src='./images/careers-g5.png'">

          <div class="life-tile-label">
            R&D Lab
          </div>

        </div>


        <div class="life-tile reveal" data-d="2">

          <img
            src="./images/careers-g4.png"
            alt="Team culture"
            onerror="this.src='./images/careers-g4.png'">

          <div class="life-tile-label">
            Our Culture
          </div>

        </div>


        <div class="life-tile reveal" data-d="1">

          <img
            src="./images/careers-g3.png"
            alt="Office life"
            onerror="this.src='./images/careers-g3.png'">

          <div class="life-tile-label">
            Office Life
          </div>

        </div>


        <div class="life-tile reveal" data-d="2">

          <img
            src="./images/careers-g2.png"
            alt="Growth"
            onerror="this.src='./images/careers-g2.png'">

          <div class="life-tile-label">
            Growth
          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- ==========================================
       OPEN POSITIONS
  ========================================== -->

  <section class="positions-sec">

    <div class="container">

      <div
        class="reveal"
        style="text-align:center;margin-bottom:8px;">

        <p class="eyebrow center">
          Current Openings
        </p>

        <h2
          class="section-title light"
          style="text-align:center;">

          Open <span class="gold">Positions</span>

        </h2>

      </div>


      <div class="pos-filter-row reveal">

        <button
          class="pos-filter-btn active"
          data-filter="all">
          All Departments
        </button>

        <button
          class="pos-filter-btn"
          data-filter="sales">
          Sales
        </button>

        <button
          class="pos-filter-btn"
          data-filter="ops">
          Operations
        </button>

      </div>


      <!-- SALES -->

      <div
        class="job-card reveal"
        data-dept="sales">

        <div>

          <span class="job-dept">
            Sales
          </span>

          <h4>
            Area Sales Manager (B2B)
          </h4>

          <div class="job-meta">

            <span>
              <i class="fas fa-location-dot"></i>
              Andaman, Punjab, Chhattisgarh, Gujrat, Chennai
            </span>

            <span>
              <i class="fas fa-briefcase"></i>
              Full Time, Permanent
            </span>

            <span>
              <i class="fas fa-layer-group"></i>
              5 years to 10 years
            </span>

          </div>

        </div>


        <div class="job-card-actions">

          <button
            class="job-view-btn"
            onclick="openJobDetailsModal('Area Sales Manager (B2B)')">

            <i class="fas fa-file-lines"></i>
            View Details

          </button>

          <button
            class="job-apply-btn"
            onclick="openApplyModal(
              'Area Sales Manager (B2B)',
              'Sales',
              'Andaman, Punjab, Chhattisgarh, Gujrat, Chennai | Full Time, Permanent | 5 years to 10 years'
            )">

            Apply Now <span>→</span>

          </button>

        </div>

      </div>


      <!-- OPERATIONS -->

      <div
        class="job-card reveal"
        data-dept="ops">

        <div>

          <span class="job-dept">
            Operations
          </span>

          <h4>
            Senior Executive- Procurement
          </h4>

          <div class="job-meta">

            <span>
              <i class="fas fa-location-dot"></i>
              Kolkata (May have to travel based on the requirement- within India)
            </span>

            <span>
              <i class="fas fa-briefcase"></i>
              Full Time, Permanent
            </span>

            <span>
              <i class="fas fa-layer-group"></i>
              2 years to 5 years
            </span>

          </div>

        </div>


        <div class="job-card-actions">

          <button
            class="job-view-btn"
            onclick="openJobDetailsModal(
              'Senior Executive- Procurement'
            )">

            <i class="fas fa-file-lines"></i>
            View Details

          </button>

          <button
            class="job-apply-btn"
            onclick="openApplyModal(
              'Senior Executive- Procurement',
              'Operations',
              'Kolkata (May have to travel based on the requirement- within India) | Full Time, Permanent | 2 years to 5 years'
            )">

            Apply Now <span>→</span>

          </button>

        </div>

      </div>


      <!-- E-COMMERCE -->

      <div
        class="job-card reveal"
        data-dept="sales">

        <div>

          <span class="job-dept">
            Sales
          </span>

          <h4>
            E-commerce Manager / Assistant Manager – E-commerce
          </h4>

          <div class="job-meta">

            <span>
              <i class="fas fa-location-dot"></i>
              Kolkata
            </span>

            <span>
              <i class="fas fa-briefcase"></i>
              Full Time, Permanent
            </span>

            <span>
              <i class="fas fa-layer-group"></i>
              4 years to 7 years
            </span>

          </div>

        </div>


        <div class="job-card-actions">

          <button
            class="job-view-btn"
            onclick="openJobDetailsModal(
              'E-commerce Manager / Assistant Manager – E-commerce'
            )">

            <i class="fas fa-file-lines"></i>
            View Details

          </button>

          <button
            class="job-apply-btn"
            onclick="openApplyModal(
              'E-commerce Manager / Assistant Manager – E-commerce',
              'Sales',
              'Kolkata | Full Time, Permanent | 4 years to 7 years'
            )">

            Apply Now <span>→</span>

          </button>

        </div>

      </div>

    </div>

  </section>


  <!-- ==========================================
       APPLY CTA
  ========================================== -->

  <section class="apply-cta-sec">

    <div class="container">

      <div class="apply-cta-inner reveal">

        <p
          class="eyebrow center"
          style="color:#caa46c;">
          Don't See a Fit?
        </p>

        <h2>
          Send us your profile<br>
          anyway.
        </h2>

        <p>
          We are always looking for talented, driven people who share our values.
          Drop us your CV and tell us how you'd like to contribute to the Jac Olivol story.
        </p>

        <div class="cta-btn-row">

          <a
            href="mailto:careers@jacolivol.com?subject=Open Application — Jac Olivol"
            class="btn-gold">

            <i class="fas fa-envelope"></i>
            Send Your CV

          </a>

          <a
            href="contact"
            class="btn-outline-dark">

            <i class="fas fa-phone"></i>
            Contact Us

          </a>

        </div>

      </div>

    </div>

  </section>


  <!-- ==========================================
       CULTURE STRIP
  ========================================== -->

  <section class="cult-strip-sec">

    <div class="container">

      <div
        class="reveal"
        style="text-align:center;margin-bottom:60px;">

        <p class="eyebrow center">
          Our Culture
        </p>

        <h2
          class="section-title light"
          style="text-align:center;">

          How We <span class="gold">Show Up</span>

        </h2>

      </div>


      <div class="cult-strip">

        <div
          class="cult-item reveal"
          data-d="1">

          <div class="cult-icon">
            <i class="fas fa-handshake-simple"></i>
          </div>

          <h4>
            Integrity First
          </h4>

          <p>
            Honest work, honest products. The same values that go into our formulations
            guide how we treat each other.
          </p>

        </div>


        <div
          class="cult-item reveal"
          data-d="2">

          <div class="cult-icon">
            <i class="fas fa-rocket"></i>
          </div>

          <h4>
            Ownership Mindset
          </h4>

          <p>
            We give our people real responsibility and real trust.
            Initiative is celebrated, not second-guessed.
          </p>

        </div>


        <div
          class="cult-item reveal"
          data-d="3">

          <div class="cult-icon">
            <i class="fas fa-infinity"></i>
          </div>

          <h4>
            Long Term Thinking
          </h4>

          <p>
            We build slowly and carefully whether it's a brand, a product,
            or a career. There are no quick shortcuts here.
          </p>

        </div>


        <div
          class="cult-item reveal"
          data-d="4">

          <div class="cult-icon">
            <i class="fas fa-heart"></i>
          </div>

          <h4>
            Care in Every Detail
          </h4>

          <p>
            We care about what we make and who we make it for.
            That spirit extends to how we build our teams too.
          </p>

        </div>

      </div>

    </div>

  </section>


  <!-- ==========================================
       WHY JOIN US
  ========================================== -->

  <section class="why-section">

    <div
      class="container"
      style="position:relative;z-index:2;">

      <div
        class="reveal"
        style="text-align:center;">

        <p class="eyebrow center">
          Why Join Us
        </p>

        <h2
          class="section-title"
          style="text-align:center;color:#111;">

          More than a job,<br>
          <span class="gold">a meaningful journey</span>

        </h2>

      </div>


      <div class="why-grid">

        <div
          class="why-card reveal"
          data-d="1">

          <div class="why-card-num">01</div>

          <div class="why-icon">
            <i class="fas fa-seedling"></i>
          </div>

          <h4>
            Rooted in Purpose
          </h4>

          <p>
            Every product we make touches real lives. Working here means your effort
            directly contributes to the health and care of families across India.
          </p>

        </div>


        <div
          class="why-card reveal"
          data-d="2">

          <div class="why-card-num">02</div>

          <div class="why-icon">
            <i class="fas fa-chart-line"></i>
          </div>

          <h4>
            Grow With a Growing Brand
          </h4>

          <p>
            We are in an active phase of expansion; new categories, new markets,
            new opportunities. This is a place where your ambitions have room to grow.
          </p>

        </div>


        <div
          class="why-card reveal"
          data-d="3">

          <div class="why-card-num">03</div>

          <div class="why-icon">
            <i class="fas fa-users"></i>
          </div>

          <h4>
            A Team That Cares
          </h4>

          <p>
            Collaboration, openness, and mutual respect define how we work here.
            You will find people who are genuinely invested in each other's success.
          </p>

        </div>


        <div
          class="why-card reveal"
          data-d="1">

          <div class="why-card-num">04</div>

          <div class="why-icon">
            <i class="fas fa-flask"></i>
          </div>

          <h4>
            Formulation-First Culture
          </h4>

          <p>
            We believe quality starts at the source. Our teams work with real science,
            real ingredients, and a genuine passion for getting it right.
          </p>

        </div>


        <div
          class="why-card reveal"
          data-d="2">

          <div class="why-card-num">05</div>

          <div class="why-icon">
            <i class="fas fa-graduation-cap"></i>
          </div>

          <h4>
            Learning & Development
          </h4>

          <p>
            We invest in our people. From cross-functional exposure to mentorship
            from leadership, growth here is intentional and continuous.
          </p>

        </div>


        <div
          class="why-card reveal"
          data-d="3">

          <div class="why-card-num">06</div>

          <div class="why-icon">
            <i class="fas fa-landmark"></i>
          </div>

          <h4>
            60 Years of Legacy
          </h4>

          <p>
            Be part of a brand with six decades of trust. The story is long,
            but the next chapter is still being written and you can help shape it.
          </p>

        </div>

      </div>

    </div>

  </section>


  <!-- ==========================================
       FOOTER
  ========================================== -->
  <?php include 'footer.php'; ?>


  <!-- ==========================================
       JOB DETAILS MODAL
  ========================================== -->

  <div
    class="job-details-overlay"
    id="jobDetailsOverlay"
    onclick="handleDetailsOverlayClick(event)">

    <div
      class="job-details-modal"
      id="jobDetailsModal">

      <button
        class="modal-close-btn"
        onclick="closeJobDetailsModal()"
        aria-label="Close">

        <i class="fas fa-xmark"></i>

      </button>

      <div id="jobDetailsContent"></div>

    </div>

  </div>


  <!-- ==========================================
       APPLICATION MODAL
  ========================================== -->

  <div
    class="apply-modal-overlay"
    id="applyModalOverlay"
    onclick="handleOverlayClick(event)">

    <div
      class="apply-modal"
      id="applyModal">

      <button
        class="modal-close-btn"
        onclick="closeApplyModal()"
        aria-label="Close">

        <i class="fas fa-xmark"></i>

      </button>


      <!-- ======================================
           FORM VIEW
      ====================================== -->

      <div id="modalFormView">

        <p
          class="modal-eyebrow"
          id="modalDeptLabel">
          Marketing
        </p>

        <h2
          class="modal-job-title"
          id="modalJobTitle">
          Brand Manager Personal Care
        </h2>


        <div
          class="modal-job-meta"
          id="modalJobMeta">

          <span>
            <i class="fas fa-location-dot"></i>
            Kolkata, West Bengal
          </span>

          <span>
            <i class="fas fa-briefcase"></i>
            Full-time
          </span>

        </div>


        <div class="modal-divider"></div>


        <!-- FULL NAME + EMAIL -->

        <div class="modal-field-row">

          <div class="modal-field">

            <label>
              Full Name
              <span class="req">*</span>
            </label>

            <input
              type="text"
              class="modal-input"
              id="appName"
              placeholder="Your full name"
              maxlength="100">

            <p
              class="modal-field-error"
              id="appNameError">
            </p>

          </div>


          <div class="modal-field">

            <label>
              Email Address
              <span class="req">*</span>
            </label>

            <input
              type="email"
              class="modal-input"
              id="appEmail"
              placeholder="you@email.com"
              maxlength="150">

            <p
              class="modal-field-error"
              id="appEmailError">
            </p>

          </div>

        </div>


        <!-- PHONE + LOCATION -->

        <div class="modal-field-row">

          <div class="modal-field">

            <label>
              Phone Number
              <span class="req">*</span>
            </label>

            <input
              type="tel"
              class="modal-input"
              id="appPhone"
              placeholder="+91 98765 43210"
              maxlength="20">

            <p
              class="modal-field-error"
              id="appPhoneError">
            </p>

          </div>


          <div class="modal-field">

            <label>
              Current Location
            </label>

            <input
              type="text"
              class="modal-input"
              id="appLocation"
              placeholder="City, State"
              maxlength="150">

          </div>

        </div>


        <!-- EXPERIENCE -->

        <div class="modal-field">

          <label>
            Total Experience
            <span class="req">*</span>
          </label>

          <select
            class="modal-select"
            id="appExp">

            <option
              value=""
              disabled
              selected>
              Select years of experience
            </option>

            <option value="Fresher (0–1 year)">
              Fresher (0–1 year)
            </option>

            <option value="1–3 years">
              1–3 years
            </option>

            <option value="3–5 years">
              3–5 years
            </option>

            <option value="5–8 years">
              5–8 years
            </option>

            <option value="8–12 years">
              8–12 years
            </option>

            <option value="12+ years">
              12+ years
            </option>

          </select>

          <p
            class="modal-field-error"
            id="appExpError">
          </p>

        </div>


        <!-- LINKEDIN -->

        <div class="modal-field">

          <label>
            LinkedIn Profile / Portfolio URL
          </label>

          <input
            type="url"
            class="modal-input"
            id="appLinkedin"
            placeholder="https://linkedin.com/in/yourname"
            maxlength="500">

          <p
            class="modal-field-error"
            id="appLinkedinError">
          </p>

        </div>


        <!-- COVER NOTE -->

        <div class="modal-field">

          <label>
            Cover Note
            <span class="req">*</span>
          </label>

          <textarea
            class="modal-textarea"
            id="appCover"
            placeholder="Tell us why you're a great fit for this role. Keep it brief and genuine."
            maxlength="5000"></textarea>

          <p
            class="modal-field-error"
            id="appCoverError">
          </p>

        </div>


        <!-- RESUME -->

        <div class="modal-field">

          <label>
            Attach Resume / CV
            <span class="req">*</span>
          </label>

          <label
            class="modal-file-label"
            for="modalFileInput"
            id="fileDropLabel">

            <i class="fas fa-paperclip"></i>

            <div>

              <strong id="fileNameDisplay">
                Click to upload your CV
              </strong>

              <span class="file-hint">
                PDF, DOC, or DOCX — max 5MB
              </span>

            </div>

          </label>

          <input
            type="file"
            id="modalFileInput"
            accept=".pdf,.doc,.docx">

          <p
            class="modal-field-error"
            id="appResumeError">
          </p>

        </div>


        <!-- SERVER ERROR -->

        <p
          id="modalError"
          style="
            color:#e07a7a;
            font-size:12.5px;
            margin-bottom:12px;
            display:none;
          ">
        </p>


        <!-- SUBMIT -->

        <button
          class="modal-submit-btn"
          id="applicationSubmitBtn"
          onclick="submitApplication()">

          <i class="fas fa-paper-plane"></i>
          Submit Application

        </button>

      </div>


      <!-- ======================================
           SUCCESS VIEW
           NO SEND ANOTHER APPLICATION BUTTON
      ====================================== -->

      <div
        class="modal-success"
        id="modalSuccessView">

        <div class="modal-success-icon">

          <i class="fas fa-check"></i>

        </div>

        <h3>
          Application Submitted!
        </h3>

        <p>
          Thank you for your interest in joining Jac Olivol.<br>
          Our team will review your profile and get back to you
          within 5–7 working days.
        </p>

        <!-- ONLY CLOSE BUTTON -->

        <button
          class="modal-submit-btn"
          style="
            margin-top:28px;
            max-width:220px;
            margin-left:auto;
            margin-right:auto;
          "
          onclick="closeApplyModal()">

          Close

        </button>

      </div>

    </div>

  </div>


  <!-- ==========================================
       BOOTSTRAP
  ========================================== -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/custom.js"></script>


  <script>

    // ==========================================
    // DEPARTMENT FILTER
    // ==========================================

    const filterBtns = document.querySelectorAll('.pos-filter-btn');
    const jobCards = document.querySelectorAll('.job-card[data-dept]');

    filterBtns.forEach(btn => {

      btn.addEventListener('click', () => {

        filterBtns.forEach(b => {
          b.classList.remove('active');
        });

        btn.classList.add('active');

        const filter = btn.dataset.filter;

        jobCards.forEach(card => {

          if (
            filter === 'all' ||
            card.dataset.dept === filter
          ) {

            card.style.display = 'flex';

          } else {

            card.style.display = 'none';

          }

        });

      });

    });


    // ==========================================
    // VALIDATION FIELD CONFIG
    // ==========================================

    const applicationFields = {

      name: {
        input: 'appName',
        error: 'appNameError'
      },

      email: {
        input: 'appEmail',
        error: 'appEmailError'
      },

      phone: {
        input: 'appPhone',
        error: 'appPhoneError'
      },

      exp: {
        input: 'appExp',
        error: 'appExpError'
      },

      linkedin: {
        input: 'appLinkedin',
        error: 'appLinkedinError'
      },

      cover: {
        input: 'appCover',
        error: 'appCoverError'
      },

      resume: {
        input: 'modalFileInput',
        error: 'appResumeError'
      }

    };


    // ==========================================
    // CLEAR FIELD ERROR
    // ==========================================

    function clearApplicationFieldError(key) {

      const field = applicationFields[key];

      if (!field) {
        return;
      }

      const input = document.getElementById(field.input);
      const error = document.getElementById(field.error);

      if (error) {

        error.textContent = '';
        error.style.display = 'none';

      }

      if (input) {

        input.classList.remove('input-error');

      }

      // Resume upload box
      if (key === 'resume') {

        const fileLabel =
          document.getElementById('fileDropLabel');

        if (fileLabel) {

          fileLabel.classList.remove('input-error');

        }

      }

    }


    // ==========================================
    // SHOW FIELD ERROR
    // ==========================================

    function showApplicationFieldError(key, message) {

      const field = applicationFields[key];

      if (!field) {
        return;
      }

      const input =
        document.getElementById(field.input);

      const error =
        document.getElementById(field.error);

      if (error) {

        error.textContent = message;
        error.style.display = 'block';

      }

      if (input) {

        input.classList.add('input-error');

      }

      // Resume upload box
      if (key === 'resume') {

        const fileLabel =
          document.getElementById('fileDropLabel');

        if (fileLabel) {

          fileLabel.classList.add('input-error');

        }

      }

    }


    // ==========================================
    // CLEAR ALL APPLICATION ERRORS
    // ==========================================

    function clearAllApplicationErrors() {

      Object.keys(applicationFields).forEach(key => {

        clearApplicationFieldError(key);

      });

      const serverError =
        document.getElementById('modalError');

      serverError.style.display = 'none';
      serverError.textContent = '';

    }


    // ==========================================
    // OPEN APPLICATION MODAL
    // ==========================================

    function openApplyModal(title, dept, meta) {

      document.getElementById('modalJobTitle').textContent =
        title;

      document.getElementById('modalDeptLabel').textContent =
        dept;


      document.getElementById('modalJobMeta').innerHTML =
        meta
          .split('|')
          .map(m => `
            <span>
              <i
                class="fas fa-circle-dot"
                style="
                  font-size:8px;
                  color:rgba(202,164,108,.5)
                ">
              </i>
              ${m.trim()}
            </span>
          `)
          .join('');


      // Show form
      document.getElementById('modalFormView').style.display =
        'block';


      // Hide success
      document
        .getElementById('modalSuccessView')
        .classList.remove('show');


      // Clear fields

      document.getElementById('appName').value = '';
      document.getElementById('appEmail').value = '';
      document.getElementById('appPhone').value = '';
      document.getElementById('appLocation').value = '';
      document.getElementById('appExp').value = '';
      document.getElementById('appLinkedin').value = '';
      document.getElementById('appCover').value = '';
      document.getElementById('modalFileInput').value = '';


      document.getElementById('fileNameDisplay').textContent =
        'Click to upload your CV';


      clearAllApplicationErrors();


      // Enable submit button

      const submitBtn =
        document.getElementById('applicationSubmitBtn');

      submitBtn.disabled = false;

      submitBtn.innerHTML =
        '<i class="fas fa-paper-plane"></i> Submit Application';


      // Open modal

      document
        .getElementById('applyModalOverlay')
        .classList.add('open');

      document.body.style.overflow = 'hidden';

    }


    // ==========================================
    // CLOSE APPLICATION MODAL
    // ==========================================

    function closeApplyModal() {

      document
        .getElementById('applyModalOverlay')
        .classList.remove('open');

      document.body.style.overflow = '';

    }


    // ==========================================
    // OVERLAY CLICK
    // ==========================================

    function handleOverlayClick(e) {

      if (
        e.target ===
        document.getElementById('applyModalOverlay')
      ) {

        closeApplyModal();

      }

    }


    // ==========================================
    // ESC KEY
    // ==========================================

    document.addEventListener('keydown', e => {

      if (e.key === 'Escape') {

        closeApplyModal();
        closeJobDetailsModal();

      }

    });


    // ==========================================
    // FILE CHANGE
    // ==========================================

    document
      .getElementById('modalFileInput')
      .addEventListener('change', function () {

        const file = this.files[0];

        const name = file
          ? file.name
          : 'Click to upload your CV';

        document.getElementById(
          'fileNameDisplay'
        ).textContent = name;


        if (file) {

          clearApplicationFieldError('resume');

        }

      });


    // ==========================================
    // APPLICATION SUBMIT
    // ==========================================

    function submitApplication() {

      const name =
        document.getElementById('appName').value.trim();

      const email =
        document.getElementById('appEmail').value.trim();

      const phone =
        document.getElementById('appPhone').value.trim();

      const location =
        document.getElementById('appLocation').value.trim();

      const exp =
        document.getElementById('appExp').value;

      const linkedin =
        document.getElementById('appLinkedin').value.trim();

      const cover =
        document.getElementById('appCover').value.trim();

      const file =
        document.getElementById('modalFileInput').files[0];

      const title =
        document.getElementById('modalJobTitle').textContent.trim();


      clearAllApplicationErrors();


      let firstInvalid = null;


      // Helper

      const setError = (key, message) => {

        showApplicationFieldError(
          key,
          message
        );

        if (!firstInvalid) {

          firstInvalid =
            document.getElementById(
              applicationFields[key].input
            );

        }

      };


      // ==========================================
      // NAME VALIDATION
      // ==========================================

      if (!name) {

        setError(
          'name',
          'Please enter your full name.'
        );

      } else if (name.length < 2) {

        setError(
          'name',
          'Full name must contain at least 2 characters.'
        );

      } else if (!/^[A-Za-zÀ-ÿ\s.'-]+$/.test(name)) {

        setError(
          'name',
          'Please enter a valid name.'
        );

      }


      // ==========================================
      // EMAIL VALIDATION
      // ==========================================

      const emailRegex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;


      if (!email) {

        setError(
          'email',
          'Please enter your email address.'
        );

      } else if (!emailRegex.test(email)) {

        setError(
          'email',
          'Please enter a valid email address.'
        );

      }


      // ==========================================
      // PHONE VALIDATION
      // ==========================================

      const phoneRegex =
        /^[0-9+\-\s().]{10,12}$/;


      if (!phone) {

        setError(
          'phone',
          'Please enter your phone number.'
        );

      } else if (!phoneRegex.test(phone)) {

        setError(
          'phone',
          'Please enter a valid phone number.'
        );

      }


      // ==========================================
      // EXPERIENCE VALIDATION
      // ==========================================

      if (!exp) {

        setError(
          'exp',
          'Please select your total experience.'
        );

      }


      // ==========================================
      // COVER NOTE VALIDATION
      // ==========================================

      if (!cover) {

        setError(
          'cover',
          'Please enter your cover note.'
        );

      } else if (cover.length < 10) {

        setError(
          'cover',
          'Cover note must contain at least 10 characters.'
        );

      }


      // ==========================================
      // RESUME REQUIRED
      // ==========================================

      if (!file) {

        setError(
          'resume',
          'Please attach your resume / CV.'
        );

      }


      // ==========================================
      // RESUME TYPE VALIDATION
      // ==========================================

      if (file) {

        const allowedTypes = [

          'application/pdf',

          'application/msword',

          'application/vnd.openxmlformats-officedocument.wordprocessingml.document'

        ];


        const fileName =
          file.name.toLowerCase();

        const allowedExtensions =
          ['.pdf', '.doc', '.docx'];


        const hasValidExtension =
          allowedExtensions.some(ext =>
            fileName.endsWith(ext)
          );


        if (
          !allowedTypes.includes(file.type) &&
          !hasValidExtension
        ) {

          setError(
            'resume',
            'Only PDF, DOC, and DOCX files are allowed.'
          );

        }


        // ==========================================
        // MAX 5MB
        // ==========================================

        if (file.size > 5 * 1024 * 1024) {

          setError(
            'resume',
            'Resume size must be less than 5MB.'
          );

        }

      }


      // ==========================================
      // STOP IF INVALID
      // ==========================================

      if (firstInvalid) {

        firstInvalid.focus();

        return;

      }


      // ==========================================
      // FORM DATA
      // ==========================================

      const formData =
        new FormData();

      formData.append(
        'job_title',
        title
      );

      formData.append(
        'full_name',
        name
      );

      formData.append(
        'email',
        email
      );

      formData.append(
        'phone',
        phone
      );

      formData.append(
        'current_location',
        location
      );

      formData.append(
        'total_experience',
        exp
      );

      formData.append(
        'linkedin',
        linkedin
      );

      formData.append(
        'cover_note',
        cover
      );

      formData.append(
        'resume',
        file
      );


      // ==========================================
      // SUBMIT BUTTON
      // ==========================================

      const submitBtn =
        document.getElementById(
          'applicationSubmitBtn'
        );


      const originalButtonText =
        submitBtn.innerHTML;


      submitBtn.disabled = true;

      submitBtn.innerHTML =
        '<i class="fas fa-spinner fa-spin"></i> Submitting...';


      // ==========================================
      // SEND TO PHP
      // ==========================================

      fetch(
        'submit-application.php',
        {
          method: 'POST',
          body: formData
        }
      )

      .then(response => {

        if (!response.ok) {

          throw new Error(
            'Server error: ' + response.status
          );

        }

        return response.json();

      })

      .then(data => {

        submitBtn.disabled = false;

        submitBtn.innerHTML =
          originalButtonText;


        if (data.success) {

          // Hide form
          document
            .getElementById('modalFormView')
            .style.display = 'none';


          // Show success modal
          document
            .getElementById('modalSuccessView')
            .classList.add('show');

        } else {

          const serverError =
            document.getElementById('modalError');

          serverError.textContent =
            data.message ||
            'Something went wrong. Please try again.';

          serverError.style.display =
            'block';

        }

      })

      .catch(error => {

        console.error(error);

        submitBtn.disabled = false;

        submitBtn.innerHTML =
          originalButtonText;


        const serverError =
          document.getElementById('modalError');

        serverError.textContent =
          'Unable to submit application. Please try again later.';

        serverError.style.display =
          'block';

      });

    }


    // ==========================================
    // LIVE CLEAR VALIDATION
    // ==========================================

    document
      .getElementById('appName')
      .addEventListener('input', function () {

        if (this.value.trim()) {

          clearApplicationFieldError('name');

        }

      });


    document
      .getElementById('appEmail')
      .addEventListener('input', function () {

        if (this.value.trim()) {

          clearApplicationFieldError('email');

        }

      });


    document
      .getElementById('appPhone')
      .addEventListener('input', function () {

        if (this.value.trim()) {

          clearApplicationFieldError('phone');

        }

      });


    document
      .getElementById('appExp')
      .addEventListener('change', function () {

        if (this.value) {

          clearApplicationFieldError('exp');

        }

      });


    document
      .getElementById('appLinkedin')
      .addEventListener('input', function () {

        clearApplicationFieldError('linkedin');

      });


    document
      .getElementById('appCover')
      .addEventListener('input', function () {

        if (this.value.trim()) {

          clearApplicationFieldError('cover');

        }

      });


    // ==========================================
    // JOB DETAILS DATA
    // ==========================================

    const jobDetailsData = {

      "Area Sales Manager (B2B)": {

        dept: "Sales",

        details: [

          [
            "Job Title",
            "Area Sales Manager (B2B)"
          ],

          [
            "Job Number",
            "Jac_ASM-001_25-26"
          ],

          [
            "Employment type",
            "Full Time, Permanent"
          ],

          [
            "Work mode",
            "In Office"
          ],

          [
            "Job Location",
            "Andaman, Punjab, Chhattisgarh, Gujrat, Chennai"
          ],

          [
            "Work experience",
            "5 years to 10 years"
          ],

          [
            "Remuneration",
            "As per Industry standard"
          ],

          [
            "Skill sets / Candidate profile",
            "• Proven experience in sales within the Beauty & Personal Care category\n• Strong exposure to the Local markets\n• Deep understanding of distribution-led FMCG sales models\n• Analytical mindset with strong execution orientation\n• Understanding of local languages and market culture\n• Willingness to travel extensively and operate close to the mark\n• Should have exposure both in General Trade (GT) & Modern Trade (MT)"
          ],

          [
            "Key Responsibilities",
            "Market Immersion & Partner Onboarding:\n• Conduct ground-level immersion to understand consumer behavior and purchase triggers\n• Map retail, distributor, and trade dynamics across the assigned territory\n• Identify, evaluate and onboard strong distribution partners\n• Establish clear distributor working norms and execution standards\n• Build structured trade programs including transparent trade policies, distributor and retailer margin structures, in-store visibility programs\n• Support brand awareness through local activation initiatives\n• Recruit, train and mentor a high-performing field sales team\n• Establish a strong distribution and retail ecosystem with the right partners, clear trade structures, and an execution-ready field team to support market scale-up.\n\nPeople & Distribution Management:\n• Lead and mentor the Team for that respective region (Team includes ISR, SR, SO)\n• Support market seeding of new product launches\n• Coordinate demand planning and sales forecasting\n• Design beat plans, territory structures and sales targets\n• Build incentive frameworks to drive performance\n• Drive primary and secondary sales growth\n• Ensure strong in-store visibility and execution standards\n• Track trade scheme ROI and maintain profitability discipline\n• Demonstrated capability in team leadership, distribution scale-up, and managing sales growth with strong commercial discipline"
          ],

          [
            "Educational qualification",
            "Any Graduate / MBA"
          ]

        ]

      },


      "Senior Executive- Procurement": {

        dept: "Operations",

        details: [

          [
            "Job Title",
            "Senior Executive- Procurement"
          ],

          [
            "Job Number",
            "Jac_PCRE-001_25-26"
          ],

          [
            "Employment type",
            "Full Time, Permanent"
          ],

          [
            "Work mode",
            "In Office"
          ],

          [
            "Job Location",
            "Kolkata (May have to travel based on the requirement- within India)"
          ],

          [
            "Work experience",
            "2 years to 5 years"
          ],

          [
            "Remuneration",
            "As per Industry standard"
          ],

          [
            "Skill sets / Candidate profile",
            "1. Experience in Personal care and Cosmetic with Experience in Handling Purchase over 80 Cr in a Year\n2. Handling any ERP system would be a added advantage"
          ],

          [
            "Key Responsibilities",
            "Strategic Sourcing: Analyze market trends to identify new suppliers and cost-reduction opportunities while ensuring quality\n\nContract Management: Negotiate, draft, and review supplier contracts to secure favorable terms, pricing, and compliance\n\nSupplier Relationship Management (SRM): Manage vendor performance, fostering long-term relationships, and addressing service failures\n\nOperational Procurement: Oversee the purchasing cycle, from raising Purchase Orders (POs) to ensuring timely delivery and invoice processing\n\nInventory and Budget Control: Monitor stock levels to prevent shortages/overstocking and ensure purchasing adheres to budgetary constraints\n\nReporting & Compliance: Prepare procurement reports for senior management and ensure compliance with internal policies and legal standards\n\nCommon Performance Metrics:\n• Cost savings achieved (year-over-year reduction)\n• Supplier on-time delivery rates\n• Reduction in procurement cycle time\n• Inventory turnover ratio"
          ],

          [
            "Educational qualification",
            "Any Graduate (MBA in Supply chain management will be a big advantage)"
          ]

        ]

      },


      "E-commerce Manager / Assistant Manager – E-commerce": {

        dept: "Sales",

        details: [

          [
            "Job Title",
            "E-commerce Manager / Assistant Manager – E-commerce"
          ],

          [
            "Job Number",
            "Jac_ECMRCE-001_25-26"
          ],

          [
            "Employment type",
            "Full Time, Permanent"
          ],

          [
            "Work mode",
            "In Office"
          ],

          [
            "Job Location",
            "Kolkata"
          ],

          [
            "Work experience",
            "4 years to 7 years"
          ],

          [
            "Remuneration",
            "As per Industry standard"
          ],

          [
            "Skill sets / Candidate profile",
            "• Prior experience in FMCG, personal care, beauty, wellness or consumer products will be preferred\n• Understanding of marketplace onboarding, catalogue creation, fulfilment, advertising and settlement processes\n• Strong knowledge of marketplace performance metrics and commercial structures\n• Ability to manage multiple SKUs, platforms and internal stakeholders simultaneously\n• Strong analytical skills and proficiency in Microsoft Excel or Google Sheets\n• Comfortable working with sales reports, inventory reports, profitability calculations and dashboards\n• Good communication, coordination and negotiation skills\n• Ability to take ownership and operate independently in a fast-moving environment"
          ],

          [
            "Key Responsibilities",
            "Marketplace Management: Manage the company's presence across Amazon, Flipkart, quick-commerce platforms and other online marketplaces. Lead the onboarding of the company, brands and products on new e-commerce platforms. Coordinate account setup, documentation, brand registration and listing approvals. Maintain strong working relationships with marketplace account managers and platform representatives. Ensure compliance with marketplace policies, category requirements and operational standards.\n\nProduct Catalogue and Content: Create, upload and maintain accurate product listings across platforms. Manage product titles, descriptions, bullet points, keywords, specifications, images and enhanced content. Ensure that product variants, pack sizes, bundles and combo packs are correctly structured. Coordinate with the marketing, design, regulatory and packaging teams to obtain listing content and product information. Monitor listings for suppression, content errors, duplicate listings and unauthorized changes. Ensure consistent brand representation and communication across all marketplaces.\n\nSales and Growth: Develop and execute platform-wise sales plans to achieve monthly and annual targets. Identify opportunities to improve product visibility, conversion rates and market share. Recommend the right product assortment, pricing, pack sizes and promotional strategy for each platform. Plan new product launches and phased SKU rollouts across marketplaces. Work closely with marketplace teams to secure visibility, campaign participation and promotional opportunities. Track competitor pricing, assortment, promotions, ratings and marketplace activity.\n\nAdvertising and Promotions: Plan and manage marketplace advertising campaigns, including sponsored product and sponsored brand campaigns. Monitor advertising spend, return on advertising spend, cost of sales and campaign performance. Coordinate discounts, coupons, deals, bundles and platform-specific promotions.\n\nInventory and Order Coordination: Coordinate with production, supply chain, warehousing and finance teams to ensure timely product availability. Prepare SKU-wise inventory forecasts based on sales trends, promotional plans and platform requirements. Monitor stock levels, replenishment, ageing inventory and out-of-stock risks. Coordinate inventory movement to fulfilment centres and marketplace warehouses. Manage fulfilment models such as FBA, Easy Ship, Self Ship or platform-equivalent systems. Ensure that packaging, labelling, barcoding and dispatch requirements are followed.\n\nCommercial and Profitability Management: Track marketplace fees, fulfilment charges, advertising costs, discounts, returns and other deductions. Prepare SKU-level and platform-level profitability reports. Monitor gross sales, net sales, contribution margins and return on investment. Reconcile marketplace settlements in coordination with the finance team. Recommend pricing and promotional actions that balance growth with profitability.\n\nReporting and Analysis: Prepare regular reports on sales, inventory, advertising, returns, ratings and profitability. Analyse platform performance by SKU, category, geography and campaign. Monitor key metrics including gross merchandise value, net sales, conversion rate, advertising cost of sales, return on advertising spend, inventory cover, out-of-stock rate, return and cancellation rate, product ratings and reviews, platform-wise profitability. Present actionable recommendations to improve marketplace performance. Prepare monthly and quarterly e-commerce business reviews for management.\n\nCustomer Experience and Brand Protection: Monitor product ratings, reviews and customer feedback. Coordinate with internal teams to address recurring product or service issues. Track returns, damages, leakage, incorrect deliveries and customer complaints. Report counterfeit products, unauthorized sellers and incorrect product listings. Support the implementation of marketplace brand-protection tools."
          ],

          [
            "Educational qualification",
            "Graduate or postgraduate degree in Marketing, Business Administration, E-commerce or a related field"
          ]

        ]

      }

    };


    // ==========================================
    // JOB DETAILS MODAL
    // ==========================================

    function openJobDetailsModal(jobTitle) {

        const jobData =
            jobDetailsData[jobTitle];

        if (!jobData) {

            console.error(
                'Job not found:',
                jobTitle
            );

            return;
        }


        const contentDiv =
            document.getElementById(
                'jobDetailsContent'
            );


        // ==========================================
        // GET REQUIRED FIELDS
        // ==========================================

        let jobTitleValue = '';
        let jobNumberValue = '';

        let employmentType = null;
        let workMode = null;
        let workExperience = null;
        let jobLocation = null;

        let educationalQualification = null;
        let remuneration = null;

        let otherDetails = [];


        jobData.details.forEach(
            ([label, value]) => {

                const lowerLabel =
                    label.toLowerCase().trim();


                // ------------------------------------------
                // JOB TITLE
                // ------------------------------------------

                if (lowerLabel === 'job title') {

                    jobTitleValue = value;

                }


                // ------------------------------------------
                // JOB NUMBER
                // ------------------------------------------

                else if (lowerLabel === 'job number') {

                    jobNumberValue = value;

                }


                // ------------------------------------------
                // EMPLOYMENT TYPE
                // ------------------------------------------

                else if (
                    lowerLabel === 'employment type'
                ) {

                    employmentType = {
                        label: label,
                        value: value
                    };

                }


                // ------------------------------------------
                // WORK MODE
                // ------------------------------------------

                else if (
                    lowerLabel === 'work mode'
                ) {

                    workMode = {
                        label: label,
                        value: value
                    };

                }


                // ------------------------------------------
                // WORK EXPERIENCE
                // ------------------------------------------

                else if (
                    lowerLabel === 'work experience'
                ) {

                    workExperience = {
                        label: label,
                        value: value
                    };

                }


                // ------------------------------------------
                // JOB LOCATION
                // ------------------------------------------

                else if (
                    lowerLabel === 'job location'
                ) {

                    jobLocation = {
                        label: label,
                        value: value
                    };

                }


                // ------------------------------------------
                // EDUCATIONAL QUALIFICATION
                // ------------------------------------------

                else if (
                    lowerLabel ===
                    'educational qualification'
                ) {

                    educationalQualification = {
                        label: label,
                        value: value
                    };

                }


                // ------------------------------------------
                // REMUNERATION
                // ------------------------------------------

                else if (
                    lowerLabel === 'remuneration'
                ) {

                    remuneration = {
                        label: label,
                        value: value
                    };

                }


                // ------------------------------------------
                // ALL OTHER FIELDS
                // ------------------------------------------

                else {

                    otherDetails.push({
                        label: label,
                        value: value
                    });

                }

            }
        );


        // ==========================================
        // HTML START
        // ==========================================

        let html =
            '<div class="job-details-header">';


        // ==========================================
        // JOB TITLE + JOB NUMBER
        // ==========================================

        html +=
            '<p class="job-details-dept">' +
            'Job Title (' +
            jobNumberValue +
            ')' +
            '</p>';


        html +=
            '<h2 class="job-details-title">' +
            (jobTitleValue || jobTitle) +
            '</h2>';


        html +=
            '</div>';


        // ==========================================
        // CONTENT START
        // ==========================================

        html +=
            '<div class="job-details-content">';


        // ==========================================
        // EMPLOYMENT TYPE
        // WORK MODE
        // WORK EXPERIENCE
        //
        // DESKTOP = 3 COLUMNS
        // MOBILE = ONE BY ONE
        //
        // ONE FULL WIDTH UNDERLINE
        // ==========================================

        html +=
            '<div class="job-details-three-col">';


        // ------------------------------------------
        // EMPLOYMENT TYPE
        // ------------------------------------------

        if (employmentType) {

            html +=
                '<div>' +

                '<p class="job-detail-label">' +
                employmentType.label +
                '</p>' +

                '<p class="job-detail-value">' +
                employmentType.value +
                '</p>' +

                '</div>';

        }


        // ------------------------------------------
        // WORK MODE
        // ------------------------------------------

        if (workMode) {

            html +=
                '<div>' +

                '<p class="job-detail-label">' +
                workMode.label +
                '</p>' +

                '<p class="job-detail-value">' +
                workMode.value +
                '</p>' +

                '</div>';

        }


        // ------------------------------------------
        // WORK EXPERIENCE
        // ------------------------------------------

        if (workExperience) {

            html +=
                '<div>' +

                '<p class="job-detail-label">' +
                workExperience.label +
                '</p>' +

                '<p class="job-detail-value">' +
                workExperience.value +
                '</p>' +

                '</div>';

        }


        html +=
            '</div>';


        // ==========================================
        // JOB LOCATION
        // FULL WIDTH
        // ==========================================

        if (jobLocation) {

            const safeValue =
                (jobLocation.value || '')
                    .replace(/</g, '&lt;')
                    .replace(/>/g, '&gt;');


            html +=
                '<div class="job-detail-row">' +

                '<p class="job-detail-label">' +
                jobLocation.label +
                '</p>' +

                '<p class="job-detail-value">' +
                safeValue +
                '</p>' +

                '</div>';

        }


        // ==========================================
        // ALL OTHER EXISTING FIELDS
        // ==========================================

        otherDetails.forEach(
            detail => {

                const safeValue =
                    (detail.value || '')
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;');


                html +=
                    '<div class="job-detail-row">';


                html +=
                    '<p class="job-detail-label">' +
                    detail.label +
                    '</p>';


                html +=
                    '<p class="job-detail-value">' +
                    safeValue +
                    '</p>';


                html +=
                    '</div>';

            }
        );


        // ==========================================
        // EDUCATIONAL QUALIFICATION
        // +
        // REMUNERATION
        //
        // DESKTOP = 2 COLUMNS
        // MOBILE = ONE BY ONE
        //
        // NO EXTRA BORDER
        // ==========================================

        if (
            educationalQualification ||
            remuneration
        ) {

            html +=
                '<div class="job-details-final-pair">';


            // --------------------------------------
            // EDUCATIONAL QUALIFICATION
            // --------------------------------------

            if (educationalQualification) {

                const safeValue =
                    (
                        educationalQualification.value ||
                        ''
                    )
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;');


                html +=
                    '<div class="job-detail-row">' +

                    '<p class="job-detail-label">' +
                    educationalQualification.label +
                    '</p>' +

                    '<p class="job-detail-value">' +
                    safeValue +
                    '</p>' +

                    '</div>';

            }


            // --------------------------------------
            // REMUNERATION
            // --------------------------------------

            if (remuneration) {

                const safeValue =
                    (remuneration.value || '')
                        .replace(/</g, '&lt;')
                        .replace(/>/g, '&gt;');


                html +=
                    '<div class="job-detail-row">' +

                    '<p class="job-detail-label">' +
                    remuneration.label +
                    '</p>' +

                    '<p class="job-detail-value">' +
                    safeValue +
                    '</p>' +

                    '</div>';

            }


            html +=
                '</div>';

        }


        // ==========================================
        // CLOSE CONTENT
        // ==========================================

        html +=
            '</div>';


        // ==========================================
        // MODAL FOOTER
        // ==========================================

        html +=
            '<div class="job-details-footer">';


        // ==========================================
        // APPLY NOW BUTTON
        // ==========================================

        html +=
            '<button class="job-details-apply-btn" id="detailsApplyBtn">' +
            '<i class="fas fa-paper-plane"></i> Apply Now' +
            '</button>';


        // ==========================================
        // CLOSE BUTTON
        // ==========================================

        html +=
            '<button class="job-details-close-btn" onclick="closeJobDetailsModal()">' +
            'Close' +
            '</button>';


        html +=
            '</div>';


        // ==========================================
        // INSERT CONTENT
        // ==========================================

        contentDiv.innerHTML =
            html;


        // ==========================================
        // APPLY BUTTON FUNCTIONALITY
        // IMPORTANT:
        // DEPARTMENT IS STILL USED INTERNALLY
        // ==========================================

        document
            .getElementById('detailsApplyBtn')
            .addEventListener(
                'click',
                () => {

                    applyFromDetails(
                        jobTitle,
                        jobData.dept
                    );

                }
            );


        // ==========================================
        // OPEN MODAL
        // ==========================================

        document
            .getElementById('jobDetailsOverlay')
            .classList.add('open');


        // Prevent background scrolling
        document.body.style.overflow =
            'hidden';

    }


    // ==========================================
    // CLOSE JOB DETAILS
    // ==========================================

    function closeJobDetailsModal() {

      document
        .getElementById('jobDetailsOverlay')
        .classList.remove('open');

      document.body.style.overflow =
        '';

    }


    // ==========================================
    // JOB DETAILS OVERLAY
    // ==========================================

    function handleDetailsOverlayClick(e) {

      if (
        e.target ===
        document.getElementById(
          'jobDetailsOverlay'
        )
      ) {

        closeJobDetailsModal();

      }

    }


    // ==========================================
    // APPLY FROM DETAILS
    // ==========================================

    function applyFromDetails(
      jobTitle,
      dept
    ) {

      closeJobDetailsModal();

      openApplyModal(
        jobTitle,
        dept,
        jobTitle +
        ' | Full-time | Permanent'
      );

    }

  </script>

</body>

</html>