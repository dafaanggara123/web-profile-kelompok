
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Tim Dev merupakan tim pengembang web yang berfokus pada teknologi, pengembangan digital, dan kolaborasi.">

    <meta name="theme-color" content="#202C39">

    <title>Tim Dev | Web Profile</title>

    <style>
        /* ========================================
           1. GLOBAL STYLE & COLOR PALETTE
        ======================================== */

        :root {
            --slate: #202C39;
            --teal: #547C78;
            --stone: #E6E5DD;
            --sage: #DCE2DA;
            --surface: #EFEDE6;
            --clay: #A87560;

            --muted: #68736F;
            --line: #CFD4CB;
            --soft: #E6ECE6;
            --white: #F9F8F3;

            --shadow:
                0 15px 40px rgba(32, 44, 57, 0.08);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            min-height: 100vh;
            overflow-x: hidden;

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;

            color: var(--slate);

            background:
                radial-gradient(
                    ellipse 650px 500px at 92% 18%,
                    rgba(84, 124, 120, 0.15),
                    transparent 72%
                ),
                radial-gradient(
                    ellipse 550px 460px at 3% 65%,
                    rgba(168, 117, 96, 0.07),
                    transparent 72%
                ),
                linear-gradient(
                    135deg,
                    #E6E5DD 0%,
                    #E9E9E2 50%,
                    #DCE2DA 100%
                );

            background-attachment: fixed;

            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: min(1160px, 90%);
            margin: 0 auto;
        }


        /* ========================================
           2. NAVBAR
        ======================================== */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(230, 229, 221, 0.91);

            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);

            border-bottom:
                1px solid rgba(32, 44, 57, 0.12);

            box-shadow:
                0 4px 20px rgba(32, 44, 57, 0.025);
        }

        .nav-inner {
            min-height: 80px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            flex-shrink: 0;
        }

        .brand-icon {
            width: 44px;
            height: 44px;

            display: grid;
            place-items: center;

            background: var(--slate);
            color: var(--white);

            font-size: 15px;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .brand-name {
            display: block;

            font-size: 17px;
            font-weight: 800;
            line-height: 1.3;
        }

        .brand-caption {
            display: block;

            font-size: 11px;
            color: var(--muted);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 27px;

            list-style: none;
        }

        .nav-links a {
            position: relative;

            color: #65716C;

            font-size: 13px;
            font-weight: 650;

            transition: color .2s ease;
        }

        .nav-links a::after {
            content: "";

            position: absolute;
            left: 0;
            bottom: -7px;

            width: 0;
            height: 2px;

            background: var(--teal);

            transition: width .2s ease;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--teal);
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .nav-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 11px 17px;

            background: var(--slate);
            color: var(--white);

            font-size: 12px;
            font-weight: 700;

            border: 1px solid var(--slate);

            transition: all .25s ease;
        }

        .nav-button:hover {
            background: var(--teal);
            border-color: var(--teal);

            transform: translateY(-2px);

            box-shadow:
                0 7px 18px rgba(84, 124, 120, .2);
        }

        .mobile-menu {
            display: none;
        }


        /* ========================================
           3. HERO SECTION
        ======================================== */

        .hero {
            position: relative;
            isolation: isolate;

            display: grid;
            grid-template-columns: 1.05fr .95fr;

            align-items: center;

            gap: 65px;

            padding: 105px 0 95px;
        }

        .hero::before {
            content: "";

            position: absolute;

            width: 440px;
            height: 440px;

            top: 10px;
            right: -110px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(84, 124, 120, .12),
                    transparent 70%
                );

            z-index: -1;
            pointer-events: none;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            color: var(--teal);

            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.7px;

            margin-bottom: 27px;
        }

        .eyebrow::before {
            content: "";

            width: 25px;
            height: 2px;

            background: var(--teal);
        }

        .hero h1 {
            max-width: 620px;

            font-size: clamp(43px, 5.3vw, 68px);

            line-height: 1.1;
            letter-spacing: -3px;

            font-weight: 850;

            color: var(--slate);
        }

        .hero h1 span {
            display: block;

            background:
                linear-gradient(
                    110deg,
                    #547C78,
                    #729087
                );

            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            max-width: 510px;

            margin-top: 24px;

            color: var(--muted);

            font-size: 15px;
            line-height: 1.95;
        }

        .hero-buttons {
            display: flex;
            align-items: center;
            flex-wrap: wrap;

            gap: 12px;

            margin-top: 30px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            padding: 12px 20px;

            font-size: 13px;
            font-weight: 700;

            border: 1px solid var(--slate);

            transition: all .25s ease;
        }

        .button-primary {
            color: var(--white);
            background: var(--slate);
        }

        .button-primary:hover {
            background: var(--teal);
            border-color: var(--teal);

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(84, 124, 120, .2);
        }

        .button-secondary {
            background: rgba(239, 237, 230, .65);
            color: var(--slate);

            border-color: #BFC9C0;
        }

        .button-secondary:hover {
            background: var(--sage);
            border-color: var(--teal);
        }

        .hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 22px;

            margin-top: 31px;
        }

        .meta-item {
            color: #68736F;

            font-size: 11px;
            font-weight: 650;
        }

        .meta-item strong {
            color: var(--teal);
            margin-right: 5px;
        }


        /* ========================================
           4. TEAM IDENTITY PANEL
        ======================================== */

        .identity-panel {
            position: relative;
            isolation: isolate;
            overflow: hidden;

            padding: 31px;

            background:
                linear-gradient(
                    145deg,
                    #DCE2DA 0%,
                    #E3E5DD 53%,
                    #D6DFD9 100%
                );

            border: 1px solid rgba(84, 124, 120, .22);

            box-shadow:
                0 22px 50px rgba(32, 44, 57, .09),
                0 3px 10px rgba(32, 44, 57, .035);
        }

        .identity-panel::before {
            content: "";

            position: absolute;

            width: 250px;
            height: 250px;

            top: -125px;
            right: -105px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(84, 124, 120, .16),
                    transparent 70%
                );

            z-index: -1;
        }

        .panel-top {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 10px;

            padding-bottom: 19px;

            border-bottom: 1px solid rgba(32, 44, 57, .14);
        }

        .panel-label {
            color: var(--teal);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.7px;
        }

        .panel-year {
            color: var(--muted);
            font-size: 10px;
        }

        .identity-heading {
            padding: 30px 0 24px;
        }

        .identity-heading small {
            color: var(--muted);

            font-size: 10px;
            font-weight: 650;
            letter-spacing: 1.2px;
        }

        .identity-heading h2 {
            margin-top: 8px;

            font-size: 44px;
            font-weight: 850;
            letter-spacing: -2px;
            line-height: 1.2;
        }

        .identity-heading p {
            margin-top: 13px;

            color: #66716D;

            font-size: 13px;
            line-height: 1.9;
        }

        .identity-details {
            border-top: 1px solid rgba(32, 44, 57, .14);
        }

        .detail-row {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 15px;

            padding: 13px 0;

            border-bottom: 1px solid rgba(32, 44, 57, .12);
        }

        .detail-row span {
            color: var(--muted);
            font-size: 11px;
        }

        .detail-row strong {
            color: var(--slate);

            font-size: 12px;
            font-weight: 750;
            text-align: right;
        }

        .team-roles {
            margin-top: 24px;
        }

        .roles-title {
            margin-bottom: 13px;

            color: var(--teal);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.3px;
        }

        .role-item {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 10px;

            padding: 8px 0;
        }

        .role-item strong {
            font-size: 12px;
            font-weight: 700;
        }

        .role-item span {
            color: var(--muted);
            font-size: 10px;
            text-align: right;
        }

        .pending-note {
            margin-top: 12px;
            padding: 9px 11px;

            background: rgba(84, 124, 120, .08);

            color: var(--teal);

            font-size: 10px;
            line-height: 1.6;
        }


        /* ========================================
           5. WORKING PRINCIPLES
        ======================================== */

        .principles {
            padding: 45px 0 100px;

            border-top: 1px solid rgba(32, 44, 57, .12);
        }

        .section-heading {
            max-width: 630px;
            margin-bottom: 35px;
        }

        .section-label {
            color: var(--clay);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.8px;
        }

        .section-heading h2 {
            margin-top: 10px;

            color: var(--slate);

            font-size: clamp(30px, 4vw, 43px);
            line-height: 1.2;
            letter-spacing: -1.5px;
        }

        .section-heading p {
            margin-top: 13px;

            color: var(--muted);

            font-size: 13px;
            line-height: 1.8;
        }

        .principle-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .principle {
            padding: 27px 24px;

            border-right: 1px solid var(--line);

            transition: background .25s ease;
        }

        .principle:first-child {
            padding-left: 0;
        }

        .principle:last-child {
            border-right: none;
        }

        .principle:hover {
            background: rgba(220, 226, 218, .35);
        }

        .principle-number {
            color: var(--teal);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.1px;
        }

        .principle h3 {
            margin-top: 17px;
            font-size: 16px;
        }

        .principle p {
            margin-top: 9px;

            color: var(--muted);

            font-size: 12px;
            line-height: 1.9;
        }


        /* ========================================
           6. CONTACT BANNER
        ======================================== */

        .contact-banner {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 25px;

            padding: 38px;

            margin-bottom: 70px;

            color: var(--white);

            background:
                linear-gradient(
                    115deg,
                    #202C39,
                    #293F45
                );

            box-shadow:
                0 15px 35px rgba(32, 44, 57, .10);
        }

        .contact-banner h2 {
            font-size: 25px;
            letter-spacing: -.7px;
        }

        .contact-banner p {
            margin-top: 8px;

            color: #D0D8D3;

            font-size: 12px;
        }

        .contact-button {
            flex-shrink: 0;

            padding: 12px 19px;

            background: var(--teal);
            color: white;

            border: 1px solid var(--teal);

            font-size: 12px;
            font-weight: 700;

            transition: .25s;
        }

        .contact-button:hover {
            background: var(--clay);
            border-color: var(--clay);
            transform: translateY(-2px);
        }


        /* ========================================
           7. FOOTER
        ======================================== */

        .footer {
            padding: 25px 0;

            color: var(--white);

            background:
                linear-gradient(
                    115deg,
                    #202C39,
                    #2A4146
                );
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .footer-logo {
            width: 39px;
            height: 39px;

            display: grid;
            place-items: center;

            background: var(--teal);

            font-size: 13px;
            font-weight: 850;
        }

        .footer-brand strong {
            font-size: 14px;
        }

        .footer-brand small {
            display: block;

            color: #C8D0CB;
            font-size: 10px;
        }

        .footer-copy {
            color: #C8D0CB;
            font-size: 10px;
        }

        .footer-social {
            display: flex;
            gap: 17px;
        }

        .footer-social a {
            color: #DDE3DE;
            font-size: 11px;
            font-weight: 650;
            transition: color .2s;
        }

        .footer-social a:hover {
            color: #A9C3B6;
        }


        /* ========================================
           8. ANIMATIONS
        ======================================== */

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content {
            animation: fadeUp .65s ease both;
        }

        .identity-panel {
            animation: fadeUp .85s ease both;
        }


        /* ========================================
           9. RESPONSIVE DESIGN
        ======================================== */

        @media (max-width: 1050px) {

            .nav-links {
                gap: 16px;
            }

            .hero {
                gap: 35px;
            }

            .hero h1 {
                font-size: 55px;
            }
        }

        @media (max-width: 800px) {

            .nav-inner {
                flex-wrap: wrap;
                padding: 15px 0;
            }

            .nav-links {
                order: 3;

                width: 100%;

                justify-content: center;
                flex-wrap: wrap;

                padding-bottom: 5px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 70px 0;
            }

            .hero-description {
                max-width: 650px;
            }

            .identity-panel {
                max-width: 650px;
            }

        }

        @media (max-width: 540px) {

            .container {
                width: 91%;
            }

            .nav-inner {
                gap: 12px;
            }

            .brand-icon {
                width: 39px;
                height: 39px;
            }

            .nav-links {
                gap: 14px;
                justify-content: flex-start;
            }

            .nav-links a {
                font-size: 11px;
            }

            .nav-button {
                padding: 9px 11px;
                font-size: 10px;
            }

            .hero {
                padding: 60px 0 65px;
            }

            .hero h1 {
                font-size: 43px;
                letter-spacing: -2px;
            }

            .hero-description {
                font-size: 13px;
            }

            .hero-meta {
                gap: 12px;
            }

            .meta-item {
                font-size: 10px;
            }

            .identity-panel {
                padding: 22px;
            }

            .identity-heading h2 {
                font-size: 38px;
            }

            .principles {
                padding: 35px 0 70px;
            }

            .principles .section-heading h2 {
                font-size: 30px;
            }

            .principle-grid {
                grid-template-columns: 1fr;
            }

            .principle,
            .principle:first-child {
                padding: 22px 0;

                border-right: none;
                border-bottom: 1px solid var(--line);
            }

            .principle:last-child {
                border-bottom: none;
            }

            .contact-banner {
                flex-direction: column;
                align-items: flex-start;

                padding: 27px;
                margin-bottom: 50px;
            }

            .contact-banner h2 {
                font-size: 21px;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }

        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }
        }


/* ========================================
   REVISION 01 - RESPONSIVE IMPROVEMENT
======================================== */

@media (max-width: 600px) {

    .nav-inner {
        display: grid;
        grid-template-columns: 1fr auto;
        gap: 12px;
        padding: 13px 0;
    }

    .brand {
        grid-column: 1;
        grid-row: 1;
    }

    .nav-button {
        grid-column: 2;
        grid-row: 1;
        justify-self: end;
        padding: 9px 11px;
        font-size: 10px;
    }

    .nav-links {
        grid-column: 1 / -1;
        grid-row: 2;

        display: flex;
        width: 100%;
        flex-wrap: nowrap;
        justify-content: space-between;
        gap: 12px;

        overflow-x: auto;
        padding: 7px 0 10px;

        scrollbar-width: none;
    }

    .nav-links::-webkit-scrollbar {
        display: none;
    }

    .nav-links a {
        white-space: nowrap;
        font-size: 11px;
    }

    .hero {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 52px 0 60px;
    }

    .hero h1 {
        font-size: clamp(36px, 9vw, 44px);
        line-height: 1.13;
        letter-spacing: -1.7px;
    }

    .hero-description {
        font-size: 13px;
        line-height: 1.85;
    }

    .hero-buttons {
        gap: 9px;
    }

    .button {
        padding: 11px 13px;
        font-size: 11px;
    }

    .hero-meta {
        gap: 12px 16px;
    }

    .identity-panel {
        width: 100%;
        max-width: none;
        padding: 21px;
    }

    .identity-heading h2 {
        font-size: 36px;
    }

    .detail-row {
        align-items: flex-start;
    }

    .detail-row strong {
        max-width: 62%;
        overflow-wrap: anywhere;
    }
}


/* ========================================
   REVISION 02 - VISUAL REFINEMENT
======================================== */

/* Better hero proportions */
.hero {
    grid-template-columns:
        minmax(0, 1.05fr)
        minmax(0, .95fr);

    gap: clamp(35px, 5vw, 65px);
    padding-top: clamp(75px, 8vw, 105px);
    padding-bottom: clamp(70px, 7vw, 95px);
}

/* Typography refinement */
.hero h1 {
    max-width: 650px;
    line-height: 1.08;
    letter-spacing: -2.7px;
}

/* Description readability */
.hero-description {
    max-width: 500px;
    line-height: 1.9;
}

/* Identity panel */
.identity-panel {
    padding: clamp(24px, 3vw, 34px);

    border: 1px solid rgba(84, 124, 120, .24);

    box-shadow:
        0 20px 48px rgba(32, 44, 57, .085),
        0 4px 12px rgba(32, 44, 57, .025);
}

/* Identity information */
.identity-heading {
    padding-top: 27px;
    padding-bottom: 27px;
}

.detail-row {
    padding: 15px 0;
}

/* Working section */
.principles {
    padding-top: 55px;
    padding-bottom: 95px;
}

.section-heading {
    margin-bottom: 37px;
}

.principle {
    min-height: 185px;
    padding: 28px 25px;
}

.principle:first-child {
    padding-left: 0;
}

/* Contact banner */
.contact-banner {
    padding: clamp(25px, 4vw, 38px);
}

/* Keep mobile layout stable */
@media (max-width: 800px) {
    .hero {
        grid-template-columns: 1fr;
        padding: 65px 0;
    }
}

@media (max-width: 600px) {
    .hero {
        gap: 30px;
        padding: 52px 0 60px;
    }

    .hero h1 {
        font-size: clamp(36px, 9vw, 44px);
        letter-spacing: -1.7px;
    }

    .principle {
        min-height: auto;
        padding: 22px 0;
    }
}


    </style>
</head>

<body>

    <!-- =====================================
         NAVBAR
    ====================================== -->

    <header class="navbar">

        <div class="container nav-inner">

            <a href="{{ url('/') }}" class="brand">

                <div class="brand-icon">
                    TD
                </div>

                <div>
                    <span class="brand-name">Tim Dev</span>
                    <span class="brand-caption">Web Profile</span>
                </div>

            </a>


            <nav aria-label="Navigasi utama">

                <ul class="nav-links">

                    <li>
                        <a href="{{ url('/') }}" class="active">
                            Beranda
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/tentang') }}">
                            Tentang
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/portofolio') }}">
                            Portofolio
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/keahlian') }}">
                            Keahlian
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/kontak') }}">
                            Kontak
                        </a>
                    </li>

                </ul>

            </nav>


            <a href="{{ url('/kontak') }}" class="nav-button">
                Hubungi Tim ↗
            </a>

        </div>

    </header>


    <main>

        <!-- =====================================
             HERO SECTION
        ====================================== -->

        <section class="container hero" id="beranda">

            <div class="hero-content">

                <div class="eyebrow">
                    WEB DEVELOPMENT TEAM
                </div>


                <h1>
                    Membangun solusi digital,
                    <span>bersama.</span>
                </h1>


                <p class="hero-description">
                    Kami merupakan tim pengembang yang berfokus pada
                    pengembangan web, eksplorasi teknologi, dan
                    kolaborasi dalam menghasilkan solusi digital.

                    Website ini menjadi ruang untuk mengenal identitas,
                    karya, serta kemampuan tim kami.
                </p>


                <div class="hero-buttons">

                    <a href="{{ url('/tentang') }}"
                       class="button button-primary">

                        Kenali Tim Kami ↗

                    </a>


                    <a href="{{ url('/portofolio') }}"
                       class="button button-secondary">

                        Lihat Portofolio →

                    </a>

                </div>


                <div class="hero-meta">

                    <div class="meta-item">
                        <strong>01</strong>
                        Laravel 12
                    </div>

                    <div class="meta-item">
                        <strong>02</strong>
                        Git & GitHub
                    </div>

                    <div class="meta-item">
                        <strong>03</strong>
                        Collaboration
                    </div>

                </div>

            </div>


            <!-- =====================================
                 TEAM IDENTITY PANEL
            ====================================== -->

            <aside class="identity-panel">

                <div class="panel-top">

                    <span class="panel-label">
                        TEAM IDENTITY
                    </span>

                    <span class="panel-year">
                        EST. 2026
                    </span>

                </div>


                <div class="identity-heading">

                    <small>
                        WEB DEVELOPMENT GROUP
                    </small>

                    <h2>TIM DEV.</h2>

                    <p>
                        Satu tim yang berkomitmen untuk belajar,
                        mengembangkan kemampuan, dan membangun
                        karya melalui teknologi.
                    </p>

                </div>


                <div class="identity-details">

                    <div class="detail-row">
                        <span>Bidang</span>
                        <strong>Web Development</strong>
                    </div>

                    <div class="detail-row">
                        <span>Framework</span>
                        <strong>Laravel 12</strong>
                    </div>

                    <div class="detail-row">
                        <span>Bahasa</span>
                        <strong>PHP & JavaScript</strong>
                    </div>

                    <div class="detail-row">
                        <span>Version Control</span>
                        <strong>Git & GitHub</strong>
                    </div>

                </div>


                <div class="team-roles">

                    <div class="roles-title">
                        STRUKTUR PENGEMBANGAN
                    </div>


                    <div class="role-item">

                        <strong>
                            01 — Lead Developer
                        </strong>

                        <span>
                            Developer A
                        </span>

                    </div>


                    <div class="role-item">

                        <strong>
                            02 — Collaborator
                        </strong>

                        <span>
                            Developer B
                        </span>

                    </div>


                    <div class="pending-note">
                        Struktur kolaborasi akan dilengkapi
                        setelah anggota tim ditetapkan.
                    </div>

                </div>

            </aside>

        </section>


        <!-- =====================================
             TEAM WORKING APPROACH
        ====================================== -->

        <section class="container principles" id="pendekatan">

            <div class="section-heading">

                <span class="section-label">
                    OUR APPROACH
                </span>

                <h2>
                    Bekerja dengan arah,
                    berkembang bersama.
                </h2>

                <p>
                    Kami mengutamakan proses pengembangan
                    yang terencana, terstruktur, dan kolaboratif.
                </p>

            </div>


            <div class="principle-grid">


                <article class="principle">

                    <span class="principle-number">
                        01 / PLANNING
                    </span>

                    <h3>Perencanaan</h3>

                    <p>
                        Menyusun kebutuhan, menentukan tujuan,
                        dan merancang solusi sebelum proses
                        pengembangan dimulai.
                    </p>

                </article>



                <article class="principle">

                    <span class="principle-number">
                        02 / DEVELOPMENT
                    </span>

                    <h3>Pengembangan</h3>

                    <p>
                        Menerapkan teknologi yang sesuai serta
                        membangun aplikasi dengan struktur
                        kode yang terorganisasi.
                    </p>

                </article>



                <article class="principle">

                    <span class="principle-number">
                        03 / COLLABORATION
                    </span>

                    <h3>Kolaborasi</h3>

                    <p>
                        Mengelola perubahan, bertukar ide,
                        dan melakukan evaluasi melalui
                        Git dan GitHub.
                    </p>

                </article>


            </div>

        </section>


        <!-- =====================================
             CONTACT BANNER
        ====================================== -->

        <section class="container">

            <div class="contact-banner">

                <div>

                    <h2>
                        Mari mengenal tim kami lebih jauh.
                    </h2>

                    <p>
                        Terbuka untuk berbagi ide, pengalaman,
                        dan kesempatan kolaborasi.
                    </p>

                </div>


                <a href="{{ url('/kontak') }}"
                   class="contact-button">

                    Hubungi Tim ↗

                </a>

            </div>

        </section>

    </main>


    <!-- =====================================
         FOOTER
    ====================================== -->

    <footer class="footer">

        <div class="container footer-inner">


            <div class="footer-brand">

                <div class="footer-logo">
                    TD
                </div>

                <div>
                    <strong>Tim Dev</strong>
                    <small>Web Profile</small>
                </div>

            </div>


            <p class="footer-copy">
                © 2026 Tim Dev. All rights reserved.
            </p>


            <div class="footer-social">

                <!-- Ganti URL berikut dengan akun tim -->

                <a href="https://github.com/"
                   target="_blank"
                   rel="noopener noreferrer">

                    GitHub

                </a>


                <a href="https://instagram.com/"
                   target="_blank"
                   rel="noopener noreferrer">

                    Instagram

                </a>


                <a href="https://linkedin.com/"
                   target="_blank"
                   rel="noopener noreferrer">

                    LinkedIn

                </a>

            </div>

        </div>

    </footer>

</body>
</html>
