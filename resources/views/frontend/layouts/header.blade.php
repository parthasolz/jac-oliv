<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="XPU8cYawQv7tzOvZhypx31tIQpfHmGQM4mQDd5c5rP0" />
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,600&display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Page Specific CSS -->

    @if (!empty($page_css))
        <link rel="stylesheet" href="{{ asset('css/' . $page_css) }}">
    @endif

    <title>{{ $page_title ?? 'Jac Olivol' }}</title>

    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Jac Olivol",
        "image": "https://jacolivol.com/images/jack-olivol.webp",
        "@id": "",
        "url": "https://jacolivol.com/",
        "telephone": "+913322369376",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "1, Lower Rawdon St, opposite Premia - Kolkata - Sri Krishna Automotive - Hero Motocorp, Sreepally, Ballygunge,",
            "addressLocality": "Kolkata",
            "postalCode": "700020",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.54062977477615,
            "longitude": 88.35689811349178
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday"
            ],
            "opens": "10:00",
            "closes": "19:00"
        }
        }
    </script>

</head>


<body>


    <!-- NAVBAR -->

    <nav class="navbar-custom" id="mainNav">

        <div class="container d-flex align-items-center justify-content-between">

            <!-- LOGO -->

            <a href="{{ route('home') }}" class="logo-box">

                <img src="{{ asset('images/jack-olivol.webp') }}" alt="Jac Olivol">

            </a>


            <!-- =========================
           DESKTOP MENU
      ========================== -->

            <ul class="navbar-nav d-none d-lg-flex flex-row align-items-center">


                <!-- ABOUT US -->

                <li class="nav-item has-dd">

                    <a class="nav-link {{ in_array($active_menu, ['about', 'vision-legacy', 'leadership']) ? 'active-tab' : '' }}"
                        href="{{ route('about') }}">
                        About Us

                        <i class="fas fa-chevron-down arr-ic"></i>

                    </a>


                    <div class="dropdown-menu">


                        <a class="{{ $active_menu === 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                            Our Story
                        </a>


                        <a class="{{ $active_menu === 'vision-legacy' ? 'active' : '' }}"
                            href="{{ route('vision-legacy') }}">
                            Vision &amp; Legacy
                        </a>


                        <a class="{{ $active_menu === 'leadership' ? 'active' : '' }}"
                            href="{{ route('leadership') }}">
                            Leadership
                        </a>


                        <a href="{{ route('home') }}#global-presence">
                            Global Presence
                        </a>


                    </div>

                </li>


                <!-- OUR BRANDS -->

                <li class="nav-item">

                    <a class="nav-link {{ $active_menu === 'brands' ? 'active-tab' : '' }}"
                        href="{{ route('brands') }}">
                        Our Brands
                    </a>

                </li>


                <!-- OUR PHILOSOPHY -->

                <li class="nav-item">

                    <a class="nav-link {{ $active_menu === 'philosophy' ? 'active-tab' : '' }}"
                        href="{{ route('philosophy') }}">
                        Our Philosophy
                    </a>

                </li>


                <!-- SUSTAINABILITY -->

                <li class="nav-item">

                    <a class="nav-link nav-sep {{ $active_menu === 'sustainability-and-impact' ? 'active-tab' : '' }}"
                        style="padding-right:4px;" href="{{ route('sustainability-and-impact') }}">
                        Sustainability &amp; Impact
                    </a>

                </li>


                <!-- CAREERS -->

                <li class="nav-item">

                    <a class="nav-link {{ $active_menu === 'careers' ? 'active-tab' : '' }}"
                        href="{{ route('careers') }}">
                        Careers
                    </a>

                </li>


                <!-- CONTACT -->

                <li class="nav-item">

                    <a class="nav-link {{ $active_menu === 'contact' ? 'active-tab' : '' }}"
                        href="{{ route('contact') }}">
                        Contact Us
                    </a>

                </li>


            </ul>


            <!-- =========================
           MOBILE TOGGLE
      ========================== -->

            <button class="d-lg-none" id="mobToggle" style="background:none;border:none;color:#fff;font-size:21px;"
                type="button">

                <i class="fas fa-bars"></i>

            </button>

        </div>


        <!-- =========================
         MOBILE MENU
    ========================== -->

        <div id="mobMenu" style="display:none;background:#080808;border-top:1px solid #181818;">


            <!-- ABOUT US -->

            <div class="mob-item" data-dd="1">

                <a href="#"
                    class="mob-link {{ in_array($active_menu, ['about', 'vision-legacy', 'leadership']) ? 'active-tab' : '' }}">

                    About Us

                    <i class="fas fa-chevron-down arr-ic" style="font-size:10px;"></i>

                </a>


                <div class="mob-sub">


                    <a class="{{ $active_menu === 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                        Our Story
                    </a>


                    <a class="{{ $active_menu === 'vision-legacy' ? 'active' : '' }}"
                        href="{{ route('vision-legacy') }}">
                        Vision &amp; Legacy
                    </a>


                    <a class="{{ $active_menu === 'leadership' ? 'active' : '' }}" href="{{ route('leadership') }}">
                        Leadership
                    </a>


                    <a href="{{ route('home') }}#global-presence">
                        Global Presence
                    </a>


                </div>

            </div>


            <!-- OUR BRANDS -->

            <div class="mob-item">

                <a href="{{ route('brands') }}" class="mob-link {{ $active_menu === 'brands' ? 'active-tab' : '' }}">
                    Our Brands
                </a>

            </div>


            <!-- OUR PHILOSOPHY -->

            <div class="mob-item">

                <a href="{{ route('philosophy') }}"
                    class="mob-link {{ $active_menu === 'philosophy' ? 'active-tab' : '' }}">
                    Our Philosophy
                </a>

            </div>


            <!-- SUSTAINABILITY -->

            <div class="mob-item">

                <a href="{{ route('sustainability-and-impact') }}"
                    class="mob-link {{ $active_menu === 'sustainability-and-impact' ? 'active-tab' : '' }}">
                    Sustainability &amp; Impact
                </a>

            </div>


            <!-- CAREERS -->

            <div class="mob-item">

                <a href="{{ route('careers') }}"
                    class="mob-link {{ $active_menu === 'careers' ? 'active-tab' : '' }}">
                    Careers
                </a>

            </div>


            <!-- CONTACT -->

            <div class="mob-item">

                <a href="{{ route('contact') }}"
                    class="mob-link {{ $active_menu === 'contact' ? 'active-tab' : '' }}">
                    Contact Us
                </a>

            </div>


        </div>

    </nav>
