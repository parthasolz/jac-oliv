@php
    $page_title  = 'Jac Olivol — Our Philosophy';
    $active_menu = 'philosophy';
    $page_css    = 'philosophy.css';
@endphp

@include('frontend.layouts.header')

<!-- PAGE HERO -->
<div class="page-hero">
    <div class="page-hero-bg phil-hero"></div>
    <div class="page-hero-overlay"></div>

    <div class="dot-pattern" style="bottom:130px;right:32px;z-index:3;"></div>

    <div class="page-hero-content">
        <p class="hero-eyebrow">Our Philosophy</p>

        <h1>
            Where Trust Meets <br>
            <span class="gold">Innovation</span>
        </h1>

        <p class="lead-txt">
            Everything we create is guided by a simple belief: ensuring consumer trust is earned through
            quality, care, and a commitment to constant improvement.
        </p>
    </div>

    <div class="hero-curve">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path
                d="M0,60 C480,130 960,130 1440,60 L1440,120 L0,120 Z"
                fill="#F4EFE6"
            />
        </svg>
    </div>
</div>


<!-- WHAT WE BELIEVE -->
<section class="belief-section">

    <img
        src="{{ asset('images/left-side-leaf.webp') }}"
        class="inno-deco-left"
        alt=""
        onerror="this.style.display='none'"
        style="bottom:-40px;"
    >

    <div class="container" style="position:relative;z-index:2;">

        <div class="belief-grid">

            <div class="belief-img-wrap reveal-l">

                <img
                    class="belief-img-main"
                    src="{{ asset('images/advanced-extraction.webp') }}"
                    alt="Our Philosophy"
                    onerror="this.src='{{ asset('images/advanced-extraction.webp') }}'"
                >

                <img
                    class="belief-img-overlay"
                    src="{{ asset('images/care.webp') }}"
                    alt="Care"
                    onerror="this.src='{{ asset('images/care.webp') }}'"
                >

                <div class="belief-badge">
                    <strong>60+</strong>
                    Years of<br>Trusted Care
                </div>

            </div>

            <div class="reveal-r">

                <p class="eyebrow">What We Believe</p>

                <div class="belief-big">
                    Modern wellness is about choosing what works and staying
                    <em>consistent</em> with it.
                </div>

                <div class="gold-divider"></div>

                <div class="belief-body">

                    <p>
                        At Jac Olivol Group, we believe the best products are built on a balance
                        of trusted experience and continuous innovation. We honour the values
                        that shaped our legacy while embracing modern science and evolving
                        consumer needs.
                    </p>

                    <p>
                        Our goal is simple: to create products that deliver reliable care,
                        lasting value, and meaningful relevance across generations.
                    </p>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- GUIDING PRINCIPLES -->
<section class="principles-alt">

    <div class="container">

        <div class="principles-alt-header reveal">

            <p class="eyebrow center">Guiding Principles</p>

            <h2 class="section-title light" style="text-align:center;">
                How We Think About <span class="gold">Care</span>
            </h2>

        </div>


        <!-- Row 1 -->
        <div class="principle-row reveal">

            <div class="pr-img">

                <img
                    src="{{ asset('images/heritage.webp') }}"
                    alt="Nature-Inspired"
                    onerror="this.src='{{ asset('images/heritage.webp') }}'"
                >

                <div class="pr-img-overlay"></div>
                <div class="pr-num">01</div>

            </div>

            <div class="pr-txt">

                <div class="pr-tag">Principle 01</div>

                <h3>
                    Heritage with <br>
                    <span>Purpose</span>
                </h3>

                <div class="pr-divider"></div>

                <p>
                    We honour the values and expertise that have shaped our journey for
                    generations, while continuously adapting to meet the needs of a changing world.
                </p>

            </div>

        </div>


        <!-- Row 2 -->
        <div class="principle-row reverse reveal">

            <div class="pr-img">

                <img
                    src="{{ asset('images/quality.webp') }}"
                    alt="Honest Care"
                    onerror="this.src='{{ asset('images/quality.webp') }}'"
                >

                <div class="pr-img-overlay"></div>
                <div class="pr-num">02</div>

            </div>

            <div class="pr-txt">

                <div class="pr-tag">Principle 02</div>

                <h3>
                    Trusted <br>
                    <span>Care</span>
                </h3>

                <div class="pr-divider"></div>

                <p>
                    Consumer trust is earned through consistency, quality, and integrity.
                    Every product we create reflects our commitment to delivering dependable care.
                </p>

            </div>

        </div>


        <!-- Row 3 -->
        <div class="principle-row reveal">

            <div class="pr-img">

                <img
                    src="{{ asset('images/convenience.webp') }}"
                    alt="Daily Ritual"
                    onerror="this.src='{{ asset('images/convenience.webp') }}'"
                >

                <div class="pr-img-overlay"></div>
                <div class="pr-num">03</div>

            </div>

            <div class="pr-txt">

                <div class="pr-tag">Principle 03</div>

                <h3>
                    Meaningful <br>
                    <span>Innovation</span>
                </h3>

                <div class="pr-divider"></div>

                <p>
                    We innovate with purpose-driven solutions that address real consumer needs,
                    improve quality, and create lasting value.
                </p>

            </div>

        </div>


        <!-- Row 4 -->
        <div class="principle-row reverse reveal">

            <div class="pr-img">

                <img
                    src="{{ asset('images/care.webp') }}"
                    alt="Balance"
                    onerror="this.src='{{ asset('images/care.webp') }}'"
                >

                <div class="pr-img-overlay"></div>
                <div class="pr-num">04</div>

            </div>

            <div class="pr-txt">

                <div class="pr-tag">Principle 04</div>

                <h3>
                    Long-Term<br>
                    <span>Thinking</span>
                </h3>

                <div class="pr-divider"></div>

                <p>
                    We build for the future, making decisions that strengthen our brands,
                    support our consumers, and create sustainable growth across generations.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- PHILOSOPHY VIDEO STATEMENT -->
<section class="phil-video-sec">

    <div class="promise-bg">
        <img
            src="{{ asset('images/promise-bg.webp') }}"
            alt=""
            class="promise-bg-img"
        >
    </div>

    <div class="container">

        <div class="phil-video-content">

            <div class="row align-items-center g-5">

                <div class="col-lg-6 reveal-l">

                    <p class="eyebrow">Our Promise</p>

                    <h2>
                        Four Pillars of<br>
                        <span>Our Commitment</span>
                    </h2>

                    <p>
                        Every product, every ingredient, every process, shaped by four
                        commitments that have guided us for over six decades.
                    </p>

                    <a href="{{ url('about') }}" class="promise-btn">
                        Our Story
                        <span style="transition:transform .3s;display:inline-block;">→</span>
                    </a>

                </div>

                <div class="col-lg-6 reveal-r">

                    <div class="phil-video-right">

                        <div class="phil-vid-thumb">

                            <img
                                src="{{ asset('images/promise-above.webp') }}"
                                alt="Our Promise"
                            >

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FOUR PILLARS -->
<section class="pillars-img-sec">

    <div class="container">

        <div class="pillars-img-header reveal">

            <p class="eyebrow center">Four Pillars</p>

            <h2
                class="section-title"
                style="text-align:center;color:#000;"
            >
                What Guides Every<br>
                <span style="color:var(--gold-dark);">
                    Product We Make
                </span>
            </h2>

        </div>


        <div class="pillars-img-grid">


            <!-- Pillar 01 -->
            <div class="pillar-img-card reveal" data-d="1">

                <img
                    src="{{ asset('images/philosophy-clean-formulation.webp') }}"
                    alt="Clean Formulation"
                    onerror="this.src='{{ asset('images/philosophy-clean-formulation.webp') }}'"
                >

                <div class="pillar-img-overlay"></div>

                <div class="pillar-img-body">

                    <div class="pillar-img-num">01</div>

                    <div class="pillar-gold-bar"></div>

                    <h4>Clean Formulation</h4>

                    <p>
                        Every ingredient is chosen with purpose. Nothing extra,
                        nothing unnecessary, just what your skin truly needs.
                    </p>

                </div>

            </div>


            <!-- Pillar 02 -->
            <div class="pillar-img-card reveal" data-d="2">

                <img
                    src="{{ asset('images/philosophy-indful-process.webp') }}"
                    alt="Mindful Process"
                    onerror="this.src='{{ asset('images/philosophy-indful-process.webp') }}'"
                >

                <div class="pillar-img-overlay"></div>

                <div class="pillar-img-body">

                    <div class="pillar-img-num">02</div>

                    <div class="pillar-gold-bar"></div>

                    <h4>Mindful Process</h4>

                    <p>
                        Our manufacturing is clean, responsible and proudly cruelty free.
                        Made with integrity at every step.
                    </p>

                </div>

            </div>


            <!-- Pillar 03 -->
            <div class="pillar-img-card reveal" data-d="3">

                <img
                    src="{{ asset('images/quality.webp') }}"
                    alt="Proven Quality"
                    onerror="this.src='{{ asset('images/quality.webp') }}'"
                >

                <div class="pillar-img-overlay"></div>

                <div class="pillar-img-body">

                    <div class="pillar-img-num">03</div>

                    <div class="pillar-gold-bar"></div>

                    <h4>Proven Quality</h4>

                    <p>
                        Tested, trusted and consistent because your trust is our most
                        important product. Six decades of proof.
                    </p>

                </div>

            </div>


            <!-- Pillar 04 -->
            <div class="pillar-img-card reveal" data-d="4">

                <img
                    src="{{ asset('images/philosophy-everyday-people.webp') }}"
                    alt="For Everyone"
                    onerror="this.src='{{ asset('images/philosophy-everyday-people.webp') }}'"
                >

                <div class="pillar-img-overlay"></div>

                <div class="pillar-img-body">

                    <div class="pillar-img-num">04</div>

                    <div class="pillar-gold-bar"></div>

                    <h4>For Everyday People</h4>

                    <p>
                        Accessible wellness that fits every home, every budget,
                        every routine. Care that belongs to all.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- FOOTER -->
@include('frontend.layouts.footer')


<!-- VIDEO MODAL -->
<div class="vid-modal" id="philVidModal">

    <div class="vid-modal-inner">

        <button
            class="vid-modal-close"
            id="philVidClose"
        >
            <i class="fas fa-times"></i>
        </button>

        <video
            controls
            id="philModalVideo"
            playsinline
        >
            <source
                src="{{ asset('videos/videoplayback.mp4') }}"
                type="video/mp4"
            >
        </video>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>
