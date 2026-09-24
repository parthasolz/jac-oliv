@php
    $page_title  = 'Jac Olivol — Contact Us';
    $active_menu = 'contact';
    $page_css    = 'contact.css';
@endphp

@include('frontend.layouts.header')

<style>
    /* =========================================================
       REQUIRED STAR
    ========================================================= */

    .required {
        color: #c49a6c;
        font-weight: 600;
    }

    /* =========================================================
       FIELD ERROR
    ========================================================= */

    .field-error {
        display: none;
        color: #c62828;
        font-size: 13px;
        margin-top: 6px;
        line-height: 1.4;
    }

    /* =========================================================
       RED BORDER WHEN VALIDATION ERROR
    ========================================================= */

    .cf-input.input-error,
    .cf-textarea.input-error {
        border: 1px solid #c62828 !important;
        border-color: #c62828 !important;
        outline: none !important;
    }

    .cf-input.input-error:focus,
    .cf-textarea.input-error:focus {
        border: 1px solid #c62828 !important;
        border-color: #c62828 !important;
        outline: none !important;
        box-shadow: 0 0 0 1px rgba(198, 40, 40, 0.08) !important;
    }

    /* =========================================================
       SUCCESS SECTION
    ========================================================= */

    .cf-success {
        display: none;
        text-align: center;
        padding: 40px 20px;
    }

    .cf-success .check-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: #000;
        color: #c49a6c;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 22px;
        font-size: 28px;
    }

    .cf-success h4 {
        margin-bottom: 12px;
    }

    .cf-success p {
        margin-bottom: 0;
    }

    /* =========================================================
       SEND ANOTHER MESSAGE BUTTON
    ========================================================= */

    .another-message-btn {
        margin-top: 25px;
        border: none;
        background: #000;
        color: #c49a6c;
        padding: 13px 28px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .another-message-btn:hover {
        background: #c49a6c;
        color: #000;
    }

    .another-message-btn .arr {
        margin-left: 8px;
    }

    /* =========================================================
       DISABLED SUBMIT BUTTON
    ========================================================= */

    .cf-submit:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }
</style>


<div class="container d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo-box">
        <img src="{{ asset('images/jack-olivol.webp') }}" alt="Jac Olivol">
    </a>

    <ul class="navbar-nav d-none d-lg-flex flex-row align-items-center">

        <li class="nav-item has-dd">

            <a class="nav-link" href="javascript:void(0)">
                About Us
                <i class="fas fa-chevron-down arr-ic"></i>
            </a>

            <div class="dropdown-menu">

                <a href="{{ route('about') }}">
                    Our Story
                </a>

                <a href="{{ route('vision-legacy') }}">
                    Vision & Legacy
                </a>

                <a href="{{ route('leadership') }}">
                    Leadership
                </a>

                <a href="{{ url('/#global-presence') }}">
                    Global Presence
                </a>

            </div>

        </li>


        <li class="nav-item">

            <a
                class="nav-link"
                href="{{ route('brands') }}"
            >
                Our Brands
            </a>

        </li>


        <li class="nav-item">

            <a
                class="nav-link"
                href="{{ route('philosophy') }}"
            >
                Our Philosophy
            </a>

        </li>


        <li class="nav-item">

            <a
                class="nav-link nav-sep"
                style="padding-right:4px;"
                href="{{ route('sustainability-and-impact') }}"
            >
                Sustainability & Impact
            </a>

        </li>


        <li class="nav-item">

            <a
                class="nav-link"
                href="{{ route('careers') }}"
            >
                Careers
            </a>

        </li>


        <li class="nav-item">

            <a
                class="nav-link active-tab"
                href="{{ route('contact') }}"
            >
                Contact Us
            </a>

        </li>

    </ul>


    <!-- MOBILE MENU BUTTON -->

    <button
        class="d-lg-none"
        id="mobToggle"
        style="background:none;border:none;color:#fff;font-size:21px;"
    >
        <i class="fas fa-bars"></i>
    </button>

</div>


<!-- MOBILE MENU -->

<div
    id="mobMenu"
    style="display:none;background:#080808;border-top:1px solid #181818;"
>

    <div
        class="mob-item"
        data-dd="1"
    >

        <a
            href="#"
            class="mob-link"
        >
            About Us

            <i
                class="fas fa-chevron-down arr-ic"
                style="font-size:10px;"
            ></i>
        </a>


        <div class="mob-sub">

            <a href="{{ route('about') }}">
                Our Story
            </a>

            <a href="{{ route('vision-legacy') }}">
                Vision & Legacy
            </a>

            <a href="{{ route('leadership') }}">
                Leadership
            </a>

            <a href="{{ url('/#global-presence') }}">
                Global Presence
            </a>

        </div>

    </div>


    <div class="mob-item">

        <a
            href="{{ route('brands') }}"
            class="mob-link"
        >
            Our Brands
        </a>

    </div>


    <div class="mob-item">

        <a
            href="{{ route('philosophy') }}"
            class="mob-link"
        >
            Our Philosophy
        </a>

    </div>


    <div class="mob-item">

        <a
            href="{{ route('sustainability-and-impact') }}"
            class="mob-link"
        >
            Sustainability & Impact
        </a>

    </div>


    <div class="mob-item">

        <a
            href="{{ route('careers') }}"
            class="mob-link"
        >
            Careers
        </a>

    </div>


    <div class="mob-item">

        <a
            href="{{ route('contact') }}"
            class="mob-link"
        >
            Contact Us
        </a>

    </div>

</div>


<!-- =========================================================
     PAGE HERO
========================================================= -->

<div class="page-hero">

    <div class="page-hero-bg contact-hero"></div>

    <div class="page-hero-overlay"></div>


    <div
        class="dot-pattern"
        style="bottom:130px;right:32px;z-index:3;"
    ></div>


    <div
        class="dot-pattern"
        style="top:38%;left:-28px;z-index:3;width:115px;height:190px;"
    ></div>


    <div class="page-hero-content">

        <p class="hero-eyebrow">
            Contact Us
        </p>

        <h1>
            Let's start a<br>
            <span class="gold">
                conversation
            </span>.
        </h1>

        <p class="lead-txt">
            Whether it's a business inquiry, a partnership proposal, or just a question; we'd love to hear from you.
        </p>

    </div>


    <div class="hero-curve">

        <svg
            viewBox="0 0 1440 120"
            preserveAspectRatio="none"
        >
            <path
                d="M0,60 C480,130 960,130 1440,60 L1440,120 L0,120 Z"
                fill="#F4EFE6"
            />
        </svg>

    </div>

</div>


<!-- =========================================================
     CONTACT MAIN
========================================================= -->

<section class="contact-main">

    <div class="container">

        <div class="contact-grid">


            <!-- =====================================================
                 LEFT: FORM
            ===================================================== -->

            <div class="reveal-l">

                <div class="contact-form-wrap">

                    <h3 id="formTitle">
                        Send Us a Message
                    </h3>

                    <p id="formDesc">
                        Fill in the form below and our team will get back to you within 48 hours.
                    </p>


                    <!-- =================================================
                         CONTACT FORM
                    ================================================= -->

                    <div id="cfForm">


                        <!-- FIRST NAME + LAST NAME -->

                        <div class="cf-row two-col">


                            <!-- FIRST NAME -->

                            <div>

                                <label class="cf-label">
                                    First Name
                                    <span class="required">
                                        *
                                    </span>
                                </label>

                                <input
                                    type="text"
                                    class="cf-input"
                                    placeholder="First Name"
                                    id="cfFirstName"
                                    maxlength="50"
                                    autocomplete="given-name"
                                    required
                                >

                                <div
                                    class="field-error"
                                    id="cfFirstNameError"
                                ></div>

                            </div>


                            <!-- LAST NAME -->

                            <div>

                                <label class="cf-label">
                                    Last Name
                                    <span class="required">
                                        *
                                    </span>
                                </label>

                                <input
                                    type="text"
                                    class="cf-input"
                                    placeholder="Last Name"
                                    id="cfLastName"
                                    maxlength="50"
                                    autocomplete="family-name"
                                    required
                                >

                                <div
                                    class="field-error"
                                    id="cfLastNameError"
                                ></div>

                            </div>

                        </div>


                        <!-- EMAIL -->

                        <div class="cf-row">

                            <label class="cf-label">
                                Email Address
                                <span class="required">
                                    *
                                </span>
                            </label>

                            <input
                                type="email"
                                class="cf-input"
                                placeholder="you@example.com"
                                id="cfEmail"
                                maxlength="150"
                                autocomplete="email"
                                required
                            >

                            <div
                                class="field-error"
                                id="cfEmailError"
                            ></div>

                        </div>


                        <!-- PHONE -->

                        <div class="cf-row">

                            <label class="cf-label">
                                Phone Number
                                <span class="required">
                                    *
                                </span>
                            </label>

                            <input
                                type="tel"
                                class="cf-input"
                                placeholder="+91 9876543210"
                                id="cfPhone"
                                maxlength="18"
                                autocomplete="tel"
                                required
                            >

                            <div
                                class="field-error"
                                id="cfPhoneError"
                            ></div>

                        </div>


                        <!-- INQUIRY TYPE -->

                        <div class="cf-row">

                            <label class="cf-label">
                                Inquiry Type
                                <span class="required">
                                    *
                                </span>
                            </label>

                            <select
                                class="cf-select cf-input"
                                id="cfInquiryType"
                                required
                            >

                                <option
                                    value=""
                                    disabled
                                    selected
                                >
                                    Select a topic
                                </option>

                                <option value="Business / Distribution Inquiry">
                                    Business / Distribution Inquiry
                                </option>

                                <option value="Media & Press">
                                    Media & Press
                                </option>

                                <option value="Partnership Proposal">
                                    Partnership Proposal
                                </option>

                                <option value="Product Feedback">
                                    Product Feedback
                                </option>

                                <option value="Careers">
                                    Careers
                                </option>

                                <option value="General Query">
                                    General Query
                                </option>

                            </select>

                            <div
                                class="field-error"
                                id="cfInquiryTypeError"
                            ></div>

                        </div>


                        <!-- MESSAGE -->

                        <div class="cf-row">

                            <label class="cf-label">
                                Your Message
                                <span class="required">
                                    *
                                </span>
                            </label>

                            <textarea
                                class="cf-textarea"
                                placeholder="Tell us more about your inquiry…"
                                id="cfMessage"
                                maxlength="5000"
                                required
                            ></textarea>

                            <div
                                class="field-error"
                                id="cfMessageError"
                            ></div>

                        </div>


                        <!-- SUBMIT BUTTON -->

                        <button
                            type="button"
                            class="cf-submit"
                            id="cfSubmit"
                        >
                            Send Message
                            <span class="arr">
                                →
                            </span>
                        </button>

                    </div>


                    <!-- =================================================
                         SUCCESS MESSAGE
                    ================================================= -->

                    <div
                        class="cf-success"
                        id="cfSuccess"
                    >

                        <div class="check-circle">
                            <i class="fas fa-check"></i>
                        </div>

                        <h4>
                            Message Sent!
                        </h4>

                        <p>
                            Thank you for reaching out.
                            Our team will respond within 48 hours.
                        </p>

                        <button
                            type="button"
                            class="another-message-btn"
                            id="cfAnotherMessage"
                        >
                            Send Another Message

                            <span class="arr">
                                →
                            </span>
                        </button>

                    </div>

                </div>

            </div>


            <!-- =====================================================
                 RIGHT: CONTACT INFORMATION
            ===================================================== -->

            <div class="contact-info-side reveal-r">

                <p class="eyebrow">
                    Get In Touch
                </p>

                <h2>
                    We're here when you need <span>us</span>.
                </h2>

                <div class="gold-divider"></div>


                <!-- OFFICE CARDS -->

                <div class="office-cards">


                    <!-- REGISTERED OFFICE -->

                    <div class="office-card">

                        <div class="office-card-icon">
                            <i class="fas fa-building"></i>
                        </div>

                        <div class="office-card-body">

                            <h5>
                                Registered Office
                            </h5>

                            <p>
                                285A, B.B. Ganguly Street,<br>
                                Kolkata - 700012,<br>
                                West Bengal, India
                            </p>

                        </div>

                    </div>


                    <!-- CORPORATE OFFICE -->

                    <div class="office-card">

                        <div class="office-card-icon">
                            <i class="fas fa-city"></i>
                        </div>

                        <div class="office-card-body">

                            <h5>
                                Corporate Office
                            </h5>

                            <p>
                                1, Lower Rawdon St.<br>
                                Sreepally, Ballygunge,<br>
                                Kolkata – 700020, West Bengal, India
                            </p>

                        </div>

                    </div>


                    <!-- GLOBAL OFFICE -->

                    <div class="office-card">

                        <div class="office-card-icon">
                            <i class="fas fa-city"></i>
                        </div>

                        <div class="office-card-body">

                            <h5>
                                Thailand Office
                            </h5>

                            <p>
                                Floor 12A, True Digital Park,<br>
                                East Side. 101 Sukhumvit Road,<br>
                                Bangkok- 10260, Thailand
                            </p>

                        </div>

                    </div>

                </div>


                <!-- QUICK CONTACT -->

                <div class="quick-contact">


                    <!-- PHONE -->

                    <a
                        class="qc-item"
                        href="tel:+913322369376"
                    >

                        <div class="qc-icon">
                            <i class="fas fa-phone"></i>
                        </div>

                        <div class="qc-label">
                            Call Us
                        </div>

                        <div class="qc-val">
                            +91 33 2236 9376
                        </div>

                    </a>


                    <!-- EMAIL -->

                    <a
                        class="qc-item"
                        href="mailto:contact@jacolivol.com"
                        target="_blank"
                    >

                        <div class="qc-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="qc-label">
                            Email
                        </div>

                        <div class="qc-val">
                            contact@jacolivol.com
                        </div>

                    </a>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================================
         MAP
    ========================================================= -->

    <div class="map-section">

        <div class="container">

            <div
                class="reveal"
                style="text-align:center;margin-bottom:40px;"
            >

                <p class="eyebrow center">
                    Find Us
                </p>

                <h2
                    class="section-title"
                    style="text-align:center;color:#000;"
                >
                    Our
                    <span style="color:var(--gold-dark);">
                        Corporate Office
                    </span>
                </h2>

            </div>


            <div class="map-wrap reveal">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.020779707038!2d88.35440577590212!3d22.540894334130527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027700478a7185%3A0xc55dadac1a3321cc!2sJAC%20OLIVOL%20CORPORATION!5e0!3m2!1sen!2sin!4v1788417316119!5m2!1sen!2sin"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen>
                </iframe>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CTA STRIP
========================================================= -->

<section class="contact-cta">

    <div class="container">

        <div class="contact-cta-inner reveal">

            <p
                class="eyebrow center"
                style="justify-content:center;margin-bottom:18px;"
            >
                Join Our Story
            </p>

            <h3>
                Explore career opportunities,
                business partnerships,
                <br>
                or simply stay connected
                <span>
                    with the Jac Olivol journey.
                </span>
            </h3>

            <div class="cta-btns">

                <a
                    href="{{ route('careers') }}"
                    class="btn-cta-gold"
                >
                    Explore Careers
                    <span>
                        →
                    </span>
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FOOTER
========================================================= -->

@include('frontend.layouts.footer')


<!-- =========================================================
     BOOTSTRAP
========================================================= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- =========================================================
     CUSTOM JS
========================================================= -->

<script src="{{ asset('js/custom.js') }}"></script>


<!-- =========================================================
     CONTACT FORM JAVASCRIPT
========================================================= -->

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =======================================================
       FIELD CONFIGURATION
    ======================================================= */

    const fields = {

        firstName: {
            input: 'cfFirstName',
            error: 'cfFirstNameError'
        },

        lastName: {
            input: 'cfLastName',
            error: 'cfLastNameError'
        },

        email: {
            input: 'cfEmail',
            error: 'cfEmailError'
        },

        phone: {
            input: 'cfPhone',
            error: 'cfPhoneError'
        },

        inquiryType: {
            input: 'cfInquiryType',
            error: 'cfInquiryTypeError'
        },

        message: {
            input: 'cfMessage',
            error: 'cfMessageError'
        }

    };


    /* =======================================================
       CLEAR SINGLE FIELD ERROR
    ======================================================= */

    function clearFieldError(key) {

        const input =
            document.getElementById(fields[key].input);

        const error =
            document.getElementById(fields[key].error);


        if (error) {
            error.textContent = '';
            error.style.display = 'none';
        }


        if (input) {
            input.classList.remove('input-error');
        }

    }


    /* =======================================================
       SHOW SINGLE FIELD ERROR
    ======================================================= */

    function showFieldError(key, message) {

        const input =
            document.getElementById(fields[key].input);

        const error =
            document.getElementById(fields[key].error);


        if (error) {
            error.textContent = message;
            error.style.display = 'block';
        }


        if (input) {
            input.classList.add('input-error');
        }

    }


    /* =======================================================
       CLEAR ALL FIELD ERRORS
    ======================================================= */

    function clearAllErrors() {

        Object.keys(fields).forEach(function (key) {
            clearFieldError(key);
        });

    }


    /* =======================================================
       SUBMIT BUTTON
    ======================================================= */

    document
        .getElementById('cfSubmit')
        .addEventListener('click', function () {


            /* ===================================================
               GET FORM VALUES
            =================================================== */

            const firstName =
                document
                    .getElementById('cfFirstName')
                    .value
                    .trim();


            const lastName =
                document
                    .getElementById('cfLastName')
                    .value
                    .trim();


            const email =
                document
                    .getElementById('cfEmail')
                    .value
                    .trim();


            const phone =
                document
                    .getElementById('cfPhone')
                    .value
                    .trim();


            const inquiryType =
                document
                    .getElementById('cfInquiryType')
                    .value;


            const message =
                document
                    .getElementById('cfMessage')
                    .value
                    .trim();


            const submitBtn =
                document.getElementById('cfSubmit');


            /* ===================================================
               CLEAR OLD ERRORS
            =================================================== */

            clearAllErrors();


            let firstInvalid = null;


            /* ===================================================
               ERROR HELPER
            =================================================== */

            function setError(key, message) {

                showFieldError(key, message);

                if (!firstInvalid) {
                    firstInvalid =
                        document.getElementById(
                            fields[key].input
                        );
                }

            }


            /* ===================================================
               FIRST NAME VALIDATION
            =================================================== */

            if (!firstName) {

                setError(
                    'firstName',
                    'Please enter your first name.'
                );

            } else if (firstName.length < 2) {

                setError(
                    'firstName',
                    'First name must contain at least 2 characters.'
                );

            }


            /* ===================================================
               LAST NAME VALIDATION
            =================================================== */

            if (!lastName) {

                setError(
                    'lastName',
                    'Please enter your last name.'
                );

            } else if (lastName.length < 2) {

                setError(
                    'lastName',
                    'Last name must contain at least 2 characters.'
                );

            }


            /* ===================================================
               EMAIL VALIDATION
            =================================================== */

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


            /* ===================================================
               PHONE VALIDATION
            =================================================== */

            const phoneRegex =
                /^(?=.*\d)\+?[0-9 ]{9,17}$/;


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


            /* ===================================================
               INQUIRY TYPE VALIDATION
            =================================================== */

            if (!inquiryType) {

                setError(
                    'inquiryType',
                    'Please select an inquiry type.'
                );

            }


            /* ===================================================
               MESSAGE VALIDATION
            =================================================== */

            if (!message) {

                setError(
                    'message',
                    'Please enter your message.'
                );

            } else if (message.length < 10) {

                setError(
                    'message',
                    'Your message must contain at least 10 characters.'
                );

            }


            /* ===================================================
               STOP SUBMISSION IF VALIDATION FAILED
            =================================================== */

            if (firstInvalid) {

                firstInvalid.focus();
                return;

            }


            /* ===================================================
               PREVENT DOUBLE SUBMISSION
            =================================================== */

            submitBtn.disabled = true;


            const originalButtonText =
                submitBtn.innerHTML;


            submitBtn.innerHTML =
                '<i class="fas fa-spinner fa-spin"></i> Sending...';


            /* ===================================================
               FORM DATA
            =================================================== */

            const formData =
                new FormData();


            formData.append(
                'first_name',
                firstName
            );


            formData.append(
                'last_name',
                lastName
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
                'inquiry_type',
                inquiryType
            );


            formData.append(
                'message',
                message
            );


            /* ===================================================
               SEND DATA TO LARAVEL
            =================================================== */

            fetch(
                "{{ route('contact.submit') }}",
                {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN':
                            document
                                .querySelector('meta[name="csrf-token"]')
                                ?.getAttribute('content') || ''
                    }
                }
            )

            .then(function (response) {

                if (!response.ok) {

                    throw new Error(
                        'Server error: ' + response.status
                    );

                }

                return response.json();

            })


            .then(function (data) {


                /* ===============================================
                   RESTORE BUTTON
                =============================================== */

                submitBtn.disabled = false;

                submitBtn.innerHTML =
                    originalButtonText;


                /* ===============================================
                   SUCCESS
                =============================================== */

                if (data.success) {


                    /* Hide form */

                    document
                        .getElementById('cfForm')
                        .style.display = 'none';


                    /* Hide title */

                    document
                        .getElementById('formTitle')
                        .style.display = 'none';


                    /* Hide description */

                    document
                        .getElementById('formDesc')
                        .style.display = 'none';


                    /* Show success */

                    document
                        .getElementById('cfSuccess')
                        .style.display = 'block';


                    /* Scroll to success */

                    document
                        .getElementById('cfSuccess')
                        .scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });

                }


                /* ===============================================
                   SERVER ERROR
                =============================================== */

                else {

                    showFieldError(
                        'message',
                        data.message ||
                        'Something went wrong. Please try again.'
                    );

                }

            })


            /* ===================================================
               CATCH ERROR
            =================================================== */

            .catch(function (error) {

                console.error(error);


                submitBtn.disabled = false;


                submitBtn.innerHTML =
                    originalButtonText;


                showFieldError(
                    'message',
                    'Unable to send your message. Please try again later.'
                );

            });

        });


    /* =======================================================
       CLEAR ERROR WHEN USER TYPES
    ======================================================= */

    Object.keys(fields).forEach(function (key) {

        const input =
            document.getElementById(
                fields[key].input
            );


        if (!input) {
            return;
        }


        const eventName =
            input.tagName === 'SELECT'
                ? 'change'
                : 'input';


        input.addEventListener(
            eventName,
            function () {
                clearFieldError(key);
            }
        );

    });


    /* =======================================================
       SEND ANOTHER MESSAGE
    ======================================================= */

    document
        .getElementById('cfAnotherMessage')
        .addEventListener('click', function () {


            /* SHOW FORM AGAIN */

            document
                .getElementById('cfForm')
                .style.display = 'block';


            /* SHOW FORM TITLE AGAIN */

            document
                .getElementById('formTitle')
                .style.display = 'block';


            /* SHOW FORM DESCRIPTION AGAIN */

            document
                .getElementById('formDesc')
                .style.display = 'block';


            /* HIDE SUCCESS */

            document
                .getElementById('cfSuccess')
                .style.display = 'none';


            /* RESET FORM VALUES */

            document
                .getElementById('cfFirstName')
                .value = '';


            document
                .getElementById('cfLastName')
                .value = '';


            document
                .getElementById('cfEmail')
                .value = '';


            document
                .getElementById('cfPhone')
                .value = '';


            document
                .getElementById('cfInquiryType')
                .value = '';


            document
                .getElementById('cfMessage')
                .value = '';


            /* CLEAR ALL VALIDATION ERRORS */

            clearAllErrors();


            /* RESET SUBMIT BUTTON */

            const submitBtn =
                document.getElementById('cfSubmit');


            submitBtn.disabled = false;


            submitBtn.innerHTML =
                'Send Message <span class="arr">→</span>';


            /* FOCUS FIRST FIELD */

            document
                .getElementById('cfFirstName')
                .focus();


            /* SCROLL BACK TO FORM */

            document
                .getElementById('cfForm')
                .scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });

        });

});
</script>


</body>
</html>
