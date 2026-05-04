<!DOCTYPE html><html lang="en"><head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour - What is Glamour</title>

    <!-- Favicon and SEO Tags -->
    <link rel="apple-touch-icon" sizes="180x180" href="glamour/golove.png">
    <link rel="icon" type="image/png" sizes="32x32" href="glamour/golove.png">
    <link rel="icon" type="image/png" sizes="16x16" href="glamour/golove.png">
    <link rel="shortcut icon" href="glamour/golove.png">
    <meta name="theme-color" content="#03082E">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Glamour is a European institution that partners with Africans to showcase your lifestyle, creativity, daily habits and get paid for it.">
    <meta name="keywords" content="Glamour, step rewards, play games, digital real estate, affiliate marketing, skill acquisition, get rewards, personal growth">
    <meta name="author" content="Glamour">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="/">
    <meta property="og:title" content="Glamour - What is Glamour">
    <meta property="og:description" content="Glamour is a European institution that partners with Africans to showcase your lifestyle, creativity, daily habits and get paid for it.">
    <meta property="og:image" content="assets/about-image.jpeg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="/">
    <meta property="twitter:title" content="Animo - What is Glamour">
    <meta property="twitter:description" content="Join Animo, the innovative ecosystem that rewards you for your daily steps. Explore our features, including affiliate marketing, skill acquisition, and digital real estate.">
    <meta property="twitter:image" content="glamour/golove.png">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<!-- Font Awesome 6.5.2 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- AOS 2.3.1 CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --deep-blue: #070705;
            --primary-green-start: #03ffaf;
            --primary-green-end: #03ffaf;
            --light-green-translucent: rgba(184, 230, 140, 0.25);
            --accent-blue: #4A90E2;
            --glow-color: rgba(185, 255, 60, 0.4);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--deep-blue);
            color: #ffffff;
        }

        /* --- Custom Scrollbar --- */
        ::-webkit-scrollbar {
            width: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #020624;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, var(--primary-green-start) 0%, var(--primary-green-end) 100%);
            border-radius: 10px;
            border: 2px solid #020624;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #d4ff7a 0%, #8cff40 100%);
        }


        /* --- Global Section Separator --- */
        section:not(#hero-section) {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* --- Hero Section --- */
        #hero-section {
            background-image: url('glamour/gohovio.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            overflow-x: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        .hero-logo {
            width: 150px;
            margin-bottom: 1.5rem;
        }

        .hero-pre-heading {
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1.5rem;
        }

        /* --- Buttons --- */
        .btn {
            padding: 0.8rem 2rem;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            border: 2px solid transparent;
            transition: all 0.3s ease;
        }
        
        .btn-sm {
            padding: 0.5rem 1.2rem;
            font-size: 0.9rem;
        }

        .btn-gradient {
            background-image: linear-gradient(135deg, var(--primary-green-start) 0%, var(--primary-green-end) 100%);
            color: var(--deep-blue);
            border: none;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            color: var(--deep-blue);
        }

        .btn-solid-light {
            background-color: transparent;
            color: var(--primary-green-start);
             border: 2px solid var(--primary-green-start);
        }
        
        .btn-solid-light:hover {
            background-color: #f0f0f0;
            border-color: #f0f0f0;
            color: var(--deep-blue);
        }

        /* --- Navbar --- */
        .navbar {
            padding: 1rem 0;
            transition: background-color 0.4s ease, border-color 0.4s ease;
        }

        .navbar.scrolled {
            background-color: #03ffaf1f;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid #03ffaf;
        }

        .navbar-brand img {
            height: 25px;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-weight: 500;
            margin: 0 1rem;
        }
        .navbar-nav .nav-link:hover {
            color: var(--primary-green-start);
        }

        .navbar-toggler {
            border: none;
            color: rgba(255,255,255,0.8);
        }

        .navbar-toggler-icon {
           background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* --- Floating Cards --- */
        .floating-card {
            position: absolute;
            z-index: 5;
            padding: 0.8rem 1.5rem;
            border-radius: 15px;
            background-color: rgba(184, 230, 140, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            font-weight: 600;
            font-size: 1rem;
            white-space: nowrap;
            opacity: 0;
            transform: translateY(-500%);
        }

        .floating-card::before {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: var(--accent-blue);
            border-radius: 50%;
        }

        /* Animation Classes */
        .floating-card.animate-in {
            animation: drop-bounce 1s cubic-bezier(0.68, -0.55, 0.27, 1.55) forwards;
        }

        .floating-card.animate-out {
            animation: rise-up 0.5s ease-in forwards;
        }

        @keyframes drop-bounce {
            0% {
                transform: translateY(-500%);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes rise-up {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(-500%);
                opacity: 0;
            }
        }

        /* --- Section Heading --- */
        .section-heading {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            background: linear-gradient(135deg, #00e9fa 0%, #00e9fa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        
        .section-text {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }

        /* --- About Section --- */
        #about-section {
            padding: 6rem 0;
        }

        .about-image {
            max-width: 85%;
            height: auto;
        }

        /* --- Features Section --- */
        #features-section {
            padding: 6rem 0;
        }
        .feature-item {
            padding-bottom: 24rem; 
        }
        .feature-title {
            font-size: 2.5rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 1rem;
        }
        .features-image-col-sticky {
            position: sticky;
            top: 100px; 
            height: calc(100vh - 120px);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .features-image-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            max-height: 500px;
        }
        .feature-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 1.5rem;
            opacity: 0;
            transition: opacity 0.6s ease-in-out;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        .feature-image.active {
            opacity: 1;
        }

        /* --- Packages Section --- */
        #packages-section {
            padding: 6rem 0;
        }
        .package-card {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 2rem;
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }
        .package-card.popular {
            border: 2px solid var(--primary-green-start);
            box-shadow: 0 0 30px 5px var(--glow-color);
        }
        .popular-ribbon {
            position: absolute;
            top: 30px;
            right: -60px;
            width: 220px;
            background-image: linear-gradient(135deg, var(--primary-green-start) 0%, var(--primary-green-end) 100%);
            color: var(--deep-blue);
            padding: 0.5rem 0;
            font-size: 0.9rem;
            font-weight: 700;
            text-transform: uppercase;
            text-align: center;
            transform: rotate(45deg);
            z-index: 3;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .package-bg {
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 140%; /* Taller to allow for vertical movement */
            background-size: cover;
            background-position: center;
            z-index: 1;
            will-change: transform; /* Performance hint for browser */
        }
        .package-content {
            position: relative;
            z-index: 2;
        }
        .package-title-wrapper {
            background: linear-gradient(135deg, rgba(185, 255, 60, 0.2) 0%, rgba(118, 255, 3, 0.2) 100%);
            border-radius: 50px;
            padding: 0.5rem 1rem;
            display: inline-block;
            margin-bottom: 1rem;
        }
        .package-title {
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 0;
            text-transform: uppercase;
        }
        .package-name {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, #fff 0%, #d4d4d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        
        .package-features {
            list-style: none;
            padding: 0;
            margin-bottom: 2.5rem;
            text-align: left;
        }
        .package-features li {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            font-size: 1rem;
            background: rgba(3, 8, 46, 0.5);
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
        }
        .package-features .fa-check-circle {
            color: var(--primary-green-end);
            margin-right: 0.75rem;
            font-size: 1.2rem;
        }

        .incentives-box {
            background: rgba(3, 8, 46, 0.5);
            padding: 2rem;
            border-radius: 1rem;
            margin-bottom: 2.5rem;
        }
        .incentive-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }
        .incentive-item:last-child {
            margin-bottom: 0;
        }
        .incentive-status {
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.2rem 0.6rem;
            border-radius: 50px;
            text-transform: uppercase;
        }
        .incentive-status.active {
            background-color: var(--primary-green-end);
            color: var(--deep-blue);
        }
        .incentive-status.inactive {
            background-color: #4a4a4a;
            color: #ccc;
        }

        /* --- FAQ Section --- */
        #faq-section {
            padding: 6rem 0;
        }
        .accordion {
            max-width: 800px;
            margin: 0 auto;
        }
        .accordion-item {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 1rem;
            border-radius: 1rem !important;
        }
        .accordion-item:last-child {
            margin-bottom: 0;
        }
        .accordion-header {
            border-radius: 1rem;
        }
        .accordion-button {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            border-radius: 1rem !important;
            padding: 1.5rem;
        }
        .accordion-button:not(.collapsed) {
            background-image: linear-gradient(135deg, var(--primary-green-start) 0%, var(--primary-green-end) 100%);
            color: var(--deep-blue);
            box-shadow: 0 0 15px 2px var(--glow-color);
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0,0,0,0);
        }
        .accordion-button::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        .accordion-button:not(.collapsed)::after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2303082E'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        .accordion-body {
            color: rgba(255, 255, 255, 0.85);
            padding: 0 1.5rem 1.5rem 1.5rem;
        }

        /* --- CTA Section --- */
        #cta-section {
            padding: 6rem 0;
            background: linear-gradient(#080805, #000) center center;
            background-size: cover;
            background-attachment: fixed;
        }
        #cta-section .btn-lg {
             padding: 1rem 3rem;
             font-size: 1.1rem;
        }

        /* --- Footer --- */
        #footer {
            background-color: #000;
            padding: 4rem 0 2rem 0;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
        }
        .footer-logo img {
            height: 25px;
            margin-bottom: 1rem;
        }
        #footer .footer-info p {
            font-size: 0.9rem;
        }
        #footer .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.7);
            margin-right: 10px;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }
        #footer .social-links a:hover {
            color: var(--deep-blue);
            background: var(--primary-green-start);
            border-color: var(--primary-green-start);
        }
        #footer .footer-links {
            margin-bottom: 2rem;
        }
        #footer .footer-links h4 {
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 1rem;
        }
         #footer .footer-links h4::after {
             content: '';
             position: absolute;
             left: 0;
             bottom: 0;
             width: 30px;
             height: 2px;
             background-image: linear-gradient(135deg, var(--primary-green-start) 0%, var(--primary-green-end) 100%);
         }
        #footer .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        #footer .footer-links ul li:not(:last-child) {
            margin-bottom: 0.75rem;
        }
        #footer .footer-links ul a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: 0.3s;
        }
        #footer .footer-links ul a:hover {
            color: var(--primary-green-start);
        }
        #footer .footer-contact p {
            line-height: 1.8;
        }
        #footer .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.85rem;
        }
        #footer .copyright span {
            font-weight: 600;
            color: var(--primary-green-start);
        }

        /* --- Mobile Styles (< 992px) --- */
        @media (max-width: 991.98px) {
            .navbar-custom {
                background-color: transparent;
            }
            .navbar-custom.toggled {
                background-color: rgba(3, 8, 46, 0.7);
                backdrop-filter: blur(10px);
                -webkit-backdrop-filter: blur(10px);
            }
            #hero-section {
                background-image: url('glamour/gohovio.png');
                padding-top: 6rem;
                padding-bottom: 0;
                text-align: center;
            }

            .hero-pre-heading {
                max-width: 90%;
                margin-left: auto;
                margin-right: auto;
            }

            .hero-image-container-mobile {
                position: relative;
                margin-top: 3rem;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            .hero-image-mobile {
                width: 100%;
                max-width: 450px;
                display: block;
            }
            
            .floating-card-1-mobile {
                top: 35%;
                left: 5%;
            }

            .floating-card-2-mobile {
                bottom: 15%;
                right: 5%;
            }

            .floating-card-1-mobile::before {
                top: 10px;
                left: 10px;
            }

            .floating-card-2-mobile::before {
                bottom: 10px;
                right: 10px;
            }
            
            .section-heading {
                font-size: 2.5rem;
            }

            #about-section, #features-section, #packages-section, #faq-section, #cta-section {
                padding: 4rem 0;
                text-align: center;
            }
            .about-image {
                max-width: 100%;
            }
            .feature-item {
                padding-bottom: 5rem;
            }
            .feature-title {
                font-size: 2rem;
            }
            .package-card {
                margin-bottom: 2.5rem;
                padding: 2rem;
            }
            .package-name {
                font-size: 2.2rem;
            }
            .incentives-box {
                padding: 1.5rem;
            }
            #footer {
                text-align: center;
            }
            #footer .social-links {
                justify-content: center;
            }
            #footer .footer-links h4::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
        
        /* --- Desktop Styles (>= 992px) --- */
        @media (min-width: 992px) {
            .navbar-custom {
                background-color: transparent;
            }
            #hero-section {
                min-height: 100vh;
                height: 100vh;
                display: flex;
                align-items: center;
            }
            
            .hero-content {
                text-align: left;
            }
            
            .hero-pre-heading {
                font-size: 1rem;
                max-width: 550px;
            }
            
            .hero-image-desktop {
                position: absolute;
                bottom: 0;
                right: 320px;
                width: 500px;
                z-index: 1;
            }
            
            .floating-card-1-desktop {
                top: 50%;
                left: 55%;
                font-size: 1.2rem;
                padding: 1rem 2rem;
            }
            .floating-card-2-desktop {
                top: 80%;
                left: 68%;
                font-size: 1.2rem;
                padding: 1rem 2rem;
            }

            .floating-card-1-desktop::before {
                top: 12px;
                left: 12px;
            }
            .floating-card-2-desktop::before {
                bottom: 12px;
                right: 12px;
            }

            .package-card.popular {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .package-card.popular:hover {
                transform: scale(1.03);
                box-shadow: 0 0 45px 8px var(--glow-color);
            }
        }
    </style>
    
  
</head>
<body>
 <!-- Navbar -->
    <nav class="navbar navbar-custom navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand js-global-link" href="/">
                <img src="glamour/golove.png" alt="Animo Logo">
            </a>
            <div class="d-flex align-items-center d-lg-none">
                <a href="register.php" class="btn btn-gradient btn-sm me-2">Register</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home-section">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features-section">Features</a>
                    </li>
                  
                </ul>
            </div>
            <a href="register.php" class="btn btn-gradient d-none d-lg-inline-block">Register</a>
        </div>
    </nav>
    