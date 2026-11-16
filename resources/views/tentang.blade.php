
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
          content="Mengenal identitas, perjalanan, visi, misi, dan prinsip kerja Tim Dev.">

    <meta name="theme-color" content="#202C39">

    <title>Tentang Kami | Tim Dev</title>

    <style>
        /* =========================================
           1. GLOBAL STYLE
        ========================================= */

        :root {
            --slate: #202C39;
            --teal: #547C78;
            --stone: #E6E5DD;
            --sage: #DCE2DA;
            --surface: #EFEDE6;
            --clay: #A87560;

            --muted: #68736F;
            --line: #CFD4CB;
            --white: #F9F8F3;

            --shadow:
                0 15px 40px rgba(32,44,57,.07);
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
                    ellipse 650px 430px at 90% 12%,
                    rgba(84,124,120,.13),
                    transparent 72%
                ),
                radial-gradient(
                    ellipse 520px 400px at 2% 65%,
                    rgba(168,117,96,.06),
                    transparent 72%
                ),
                linear-gradient(
                    135deg,
                    #E6E5DD,
                    #E9E9E2 50%,
                    #DCE2DA
                );

            background-attachment: fixed;
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1160px, 90%);
            margin: auto;
        }


        /* =========================================
           2. NAVIGATION
        ========================================= */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(230,229,221,.93);

            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            border-bottom:
                1px solid rgba(32,44,57,.12);
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
            width: 43px;
            height: 43px;

            display: grid;
            place-items: center;

            background: var(--slate);
            color: var(--white);

            font-size: 15px;
            font-weight: 850;
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

            transition: color .2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--teal);
        }

        .nav-links a.active::after {
            content: "";

            position: absolute;
            left: 0;
            bottom: -8px;

            width: 100%;
            height: 2px;

            background: var(--teal);
        }

        .nav-button {
            padding: 11px 17px;

            color: white;
            background: var(--slate);

            font-size: 12px;
            font-weight: 700;

            transition: .25s;
        }

        .nav-button:hover {
            background: var(--teal);
            transform: translateY(-2px);
        }


        /* =========================================
           3. HERO — FULL WIDTH EDITORIAL
        ========================================= */

        .about-hero {
            position: relative;
            overflow: hidden;

            padding: 105px 0 90px;

            border-bottom: 1px solid rgba(32,44,57,.12);
        }

        .about-hero::after {
            content: "";

            position: absolute;
            top: 25px;
            right: -150px;

            width: 430px;
            height: 430px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(84,124,120,.12),
                    transparent 72%
                );

            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;

            max-width: 950px;

            animation: fadeUp .7s ease both;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 11px;

            color: var(--teal);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 2px;

            margin-bottom: 28px;
        }

        .eyebrow::before {
            content: "";

            width: 28px;
            height: 2px;

            background: var(--teal);
        }

        .hero-title {
            max-width: 850px;

            font-size: clamp(48px, 6.1vw, 78px);
            font-weight: 850;

            letter-spacing: -3.8px;
            line-height: 1.08;
        }

        .hero-title span {
            color: var(--teal);
        }

        .hero-description {
            max-width: 720px;

            margin-top: 28px;

            color: var(--muted);

            font-size: 15px;
            line-height: 2;
        }

        .hero-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 20px;
            flex-wrap: wrap;

            margin-top: 43px;
            padding-top: 23px;

            border-top: 1px solid rgba(32,44,57,.15);
        }

        .hero-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .hero-tag {
            padding: 7px 12px;

            background: rgba(220,226,218,.7);
            border: 1px solid rgba(84,124,120,.14);

            color: var(--slate);

            font-size: 10px;
            font-weight: 700;
        }

        .hero-index {
            color: var(--muted);

            font-size: 10px;
            letter-spacing: 1.5px;
            font-weight: 750;
        }


        /* =========================================
           4. STORY SECTION
        ========================================= */

        .story-section {
            padding: 95px 0;
            border-bottom: 1px solid var(--line);
        }

        .section-label {
            display: block;

            color: var(--clay);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.8px;
        }

        .story-grid {
            display: grid;
            grid-template-columns: .85fr 1.15fr;

            gap: 80px;

            margin-top: 20px;
        }

        .story-heading h2 {
            max-width: 410px;

            font-size: clamp(32px,4vw,45px);
            line-height: 1.2;
            letter-spacing: -1.8px;
        }

        .story-heading h2 span {
            color: var(--teal);
        }

        .story-heading p {
            margin-top: 18px;

            color: var(--muted);
            font-size: 12px;
        }

        .story-content p {
            color: var(--muted);

            font-size: 13px;
            line-height: 2;

            margin-bottom: 17px;
        }

        .story-quote {
            margin-top: 24px;
            padding: 19px 22px;

            background:
                linear-gradient(
                    120deg,
                    #DCE2DA,
                    #E8E9E1
                );

            border-left: 3px solid var(--teal);

            font-size: 13px;
            font-weight: 700;

            color: var(--slate);
        }


        /* =========================================
           5. VISION & MISSION
        ========================================= */

        .vision-section {
            padding: 90px 0;

            background:
                linear-gradient(
                    125deg,
                    rgba(220,226,218,.55),
                    rgba(230,229,221,.35)
                );

            border-bottom: 1px solid var(--line);
        }

        .section-heading {
            max-width: 670px;
            margin-bottom: 37px;
        }

        .section-heading h2 {
            margin-top: 10px;

            font-size: clamp(31px,4vw,43px);
            line-height: 1.2;
            letter-spacing: -1.6px;
        }

        .section-heading p {
            color: var(--muted);

            font-size: 13px;
            line-height: 1.8;

            margin-top: 12px;
        }

        .vision-grid {
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            gap: 18px;
        }

        .vision-card,
        .mission-card {
            padding: 34px;

            background: rgba(249,248,243,.72);

            border: 1px solid rgba(32,44,57,.10);

            box-shadow:
                0 8px 28px rgba(32,44,57,.035);

            transition:
                transform .25s ease,
                box-shadow .25s ease;
        }

        .vision-card:hover,
        .mission-card:hover {
            transform: translateY(-3px);

            box-shadow:
                0 15px 35px rgba(32,44,57,.07);
        }

        .card-number {
            color: var(--teal);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.5px;
        }

        .vision-card h3,
        .mission-card h3 {
            margin-top: 20px;
            font-size: 23px;
            letter-spacing: -.5px;
        }

        .vision-card p {
            color: var(--muted);

            font-size: 13px;
            line-height: 2;

            margin-top: 15px;
        }

        .mission-list {
            list-style: none;
            counter-reset: mission;

            margin-top: 15px;
        }

        .mission-list li {
            counter-increment: mission;

            display: flex;
            align-items: flex-start;
            gap: 16px;

            padding: 14px 0;

            border-top: 1px solid var(--line);

            color: var(--muted);

            font-size: 12px;
            line-height: 1.8;
        }

        .mission-list li::before {
            content: "0" counter(mission);

            color: var(--teal);

            font-size: 11px;
            font-weight: 850;

            flex-shrink: 0;
        }


        /* =========================================
           6. VALUES
        ========================================= */

        .values-section {
            padding: 95px 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);

            margin-top: 37px;

            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .value-card {
            padding: 28px 24px;

            border-right: 1px solid var(--line);

            transition: background .25s ease;
        }

        .value-card:first-child {
            padding-left: 0;
        }

        .value-card:last-child {
            border-right: none;
        }

        .value-card:hover {
            background: rgba(220,226,218,.4);
        }

        .value-number {
            color: var(--teal);

            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.3px;
        }

        .value-card h3 {
            margin-top: 19px;
            font-size: 17px;
        }

        .value-card p {
            margin-top: 9px;

            color: var(--muted);

            font-size: 12px;
            line-height: 1.9;
        }


        /* =========================================
           7. DEVELOPMENT PROCESS
        ========================================= */

        .process-section {
            padding: 80px 0;

            background: var(--slate);
            color: var(--white);
        }

        .process-section .section-label {
            color: #A8C4B7;
        }

        .process-section .section-heading p {
            color: #C6D0CA;
        }

        .process-section .section-heading h2 {
            color: var(--white);
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(4,1fr);

            border-top: 1px solid rgba(255,255,255,.18);
        }

        .process-card {
            padding: 26px 19px 10px;

            border-right: 1px solid rgba(255,255,255,.14);
        }

        .process-card:first-child {
            padding-left: 0;
        }

        .process-card:last-child {
            border-right: none;
        }

        .process-number {
            color: #A8C4B7;

            font-size: 11px;
            font-weight: 850;
            letter-spacing: 1px;
        }

        .process-card h3 {
            font-size: 15px;
            margin-top: 18px;
        }

        .process-card p {
            color: #C6D0CA;

            font-size: 11px;
            line-height: 1.9;

            margin-top: 9px;
        }


        /* =========================================
           8. TEAM STRUCTURE
        ========================================= */

        .team-section {
            padding: 95px 0;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 16px;

            margin-top: 35px;
        }

        .team-card {
            padding: 25px;

            background: rgba(249,248,243,.7);

            border: 1px solid var(--line);

            transition: all .25s ease;
        }

        .team-card:hover {
            border-color: var(--teal);
            transform: translateY(-3px);

            box-shadow: var(--shadow);
        }

        .team-card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .team-number {
            color: var(--teal);

            font-size: 11px;
            font-weight: 850;
            letter-spacing: 1.2px;
        }

        .team-status {
            color: var(--muted);
            font-size: 9px;
            letter-spacing: 1px;
        }

        .team-card h3 {
            font-size: 20px;
            margin-top: 23px;
        }

        .team-card p {
            color: var(--muted);

            font-size: 12px;
            line-height: 1.9;

            margin-top: 9px;
        }

        .team-role {
            display: inline-block;

            margin-top: 16px;
            padding: 6px 11px;

            color: var(--teal);
            background: var(--soft);

            font-size: 10px;
            font-weight: 750;
        }

        .team-note {
            margin-top: 17px;
            color: var(--muted);
            font-size: 11px;
            line-height: 1.8;
        }


        /* =========================================
           9. CTA
        ========================================= */

        .cta-section {
            padding: 0 0 85px;
        }

        .cta-box {
            display: flex;
            justify-content: space-between;
            align-items: center;

            gap: 25px;
            padding: 36px;

            background:
                linear-gradient(
                    120deg,
                    #DCE2DA,
                    #E6E5DD
                );

            border: 1px solid rgba(84,124,120,.16);
        }

        .cta-box h2 {
            font-size: 24px;
            letter-spacing: -.7px;
        }

        .cta-box p {
            color: var(--muted);
            font-size: 12px;
            margin-top: 8px;
        }

        .cta-button {
            flex-shrink: 0;

            padding: 12px 19px;

            background: var(--slate);
            color: white;

            font-size: 12px;
            font-weight: 750;

            transition: .25s;
        }

        .cta-button:hover {
            background: var(--teal);
            transform: translateY(-2px);
        }


        /* =========================================
           10. FOOTER
        ========================================= */

        .footer {
            padding: 25px 0;

            background:
                linear-gradient(
                    110deg,
                    #202C39,
                    #293F45
                );

            color: var(--white);
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .footer-mark {
            width: 39px;
            height: 39px;

            display: grid;
            place-items: center;

            color: white;
            background: var(--teal);

            font-size: 13px;
            font-weight: 850;
        }

        .footer-brand strong {
            font-size: 14px;
        }

        .footer-brand small {
            display: block;
            color: #C6D0CA;
            font-size: 10px;
        }

        .footer-copy {
            color: #C6D0CA;
            font-size: 10px;
        }

        .footer-social {
            display: flex;
            gap: 17px;
        }

        .footer-social a {
            color: #DDE4DF;
            font-size: 11px;
            font-weight: 650;
        }

        .footer-social a:hover {
            color: #A8C4B7;
        }


        /* =========================================
           11. ANIMATION
        ========================================= */

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(13px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-content {
            animation: fadeUp .65s ease both;
        }


        /* =========================================
           12. RESPONSIVE
        ========================================= */

        @media (max-width: 900px) {

            .nav-links {
                gap: 15px;
            }

            .story-grid {
                gap: 40px;
            }

            .vision-grid {
                grid-template-columns: 1fr 1.2fr;
            }

            .process-grid {
                grid-template-columns: repeat(2,1fr);
            }

            .process-card:nth-child(2) {
                border-right: none;
            }

            .process-card:nth-child(3),
            .process-card:nth-child(4) {
                border-top: 1px solid rgba(255,255,255,.14);
            }
        }

        @media (max-width: 700px) {

            .nav-inner {
                min-height: auto;
                padding: 14px 0;
                flex-wrap: wrap;
            }

            .nav-links {
                order: 3;
                width: 100%;

                justify-content: center;
                flex-wrap: wrap;

                gap: 15px;
                padding-bottom: 5px;
            }

            .about-hero {
                padding: 75px 0;
            }

            .hero-title {
                font-size: 49px;
                letter-spacing: -2px;
            }

            .story-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            .vision-grid {
                grid-template-columns: 1fr;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .value-card,
            .value-card:first-child {
                padding: 24px 0;
                border-right: none;
                border-bottom: 1px solid var(--line);
            }

            .value-card:last-child {
                border-bottom: none;
            }

        }

        @media (max-width: 480px) {

            .container {
                width: 91%;
            }

            .nav-links {
                gap: 11px;
            }

            .nav-links a {
                font-size: 10px;
            }

            .nav-button {
                padding: 9px 11px;
                font-size: 10px;
            }

            .hero-title {
                font-size: 41px;
                letter-spacing: -1.7px;
            }

            .hero-description {
                font-size: 13px;
            }

            .hero-bottom {
                align-items: flex-start;
                flex-direction: column;
            }

            .story-heading h2 {
                font-size: 32px;
            }

            .vision-card,
            .mission-card {
                padding: 24px;
            }

            .process-grid {
                grid-template-columns: 1fr;
            }

            .process-card,
            .process-card:first-child {
                padding: 22px 0;
                border-right: none;
                border-bottom: 1px solid rgba(255,255,255,.14);
            }

            .process-card:last-child {
                border-bottom: none;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .cta-box {
                align-items: flex-start;
                flex-direction: column;
                padding: 25px;
            }

            .footer-inner {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
                scroll-behavior: auto !important;
            }
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="container nav-inner">

            <a href="{{ url('/') }}" class="brand">
                <div class="brand-icon">TD</div>

                <div>
                    <span class="brand-name">Tim Dev</span>
                    <span class="brand-caption">Web Profile</span>
                </div>
            </a>

            <nav aria-label="Navigasi utama">
                <ul class="nav-links">
                    <li>
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>

                    <li>
                        <a href="{{ url('/tentang') }}" class="active">
                            Tentang
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/portofolio') }}">Portofolio</a>
                    </li>

                    <li>
                        <a href="{{ url('/keahlian') }}">Keahlian</a>
                    </li>

                    <li>
                        <a href="{{ url('/kontak') }}">Kontak</a>
                    </li>
                </ul>
            </nav>

            <a href="{{ url('/kontak') }}" class="nav-button">
                Hubungi Tim ↗
            </a>

        </div>
    </header>


    <main>

        <!-- HERO -->
        <section class="about-hero">
            <div class="container hero-content">

                <span class="eyebrow">
                    ABOUT OUR TEAM
                </span>

                <h1 class="hero-title">
                    Berawal dari ide,
                    <span>berkembang melalui kolaborasi.</span>
                </h1>

                <p class="hero-description">
                    Kami merupakan tim pengembang yang memiliki
                    ketertarikan pada teknologi dan pengembangan
                    aplikasi berbasis web.

                    Melalui kolaborasi, proses pembelajaran,
                    dan eksplorasi teknologi, kami berupaya
                    membangun karya yang terstruktur,
                    fungsional, dan bermanfaat.
                </p>

                <div class="hero-bottom">

                    <div class="hero-tags">
                        <span class="hero-tag">WEB DEVELOPMENT</span>
                        <span class="hero-tag">LARAVEL</span>
                        <span class="hero-tag">VERSION CONTROL</span>
                    </div>

                    <span class="hero-index">
                        PROFIL TIM / 2026
                    </span>

                </div>

            </div>
        </section>


        <!-- OUR STORY -->
        <section class="container story-section" id="cerita">

            <span class="section-label">
                01 — OUR STORY
            </span>

            <div class="story-grid">

                <div class="story-heading">

                    <h2>
                        Membangun bukan hanya tentang kode,
                        tetapi juga <span>proses dan ide.</span>
                    </h2>

                    <p>
                        Mengenal latar belakang dan pendekatan
                        Tim Dev dalam pengembangan aplikasi web.
                    </p>

                </div>

                <div class="story-content">

                    <p>
                        Tim Dev merupakan identitas kelompok
                        pengembang yang berfokus pada pembelajaran
                        dan pengembangan aplikasi berbasis web.
                        Kami melihat teknologi sebagai sarana
                        untuk mengembangkan ide menjadi sebuah
                        karya digital.
                    </p>

                    <p>
                        Dalam proses pengembangan, perencanaan,
                        ketelitian, dan kerja sama menjadi bagian
                        penting yang saling melengkapi. Setiap
                        pekerjaan dilakukan dengan memperhatikan
                        kebutuhan, struktur aplikasi, serta
                        kualitas hasil yang dibangun.
                    </p>

                    <p>
                        Penggunaan Laravel menjadi bagian dari
                        penerapan framework dalam pengembangan
                        web. Sementara itu, Git dan GitHub
                        digunakan untuk mengelola perubahan kode,
                        mendokumentasikan proses, dan mendukung
                        kolaborasi antaranggota.
                    </p>

                    <div class="story-quote">
                        "Berkembang melalui proses,
                        menghasilkan karya melalui kolaborasi."
                    </div>

                </div>

            </div>

        </section>


        <!-- VISION & MISSION -->
        <section class="vision-section" id="visi-misi">

            <div class="container">

                <div class="section-heading">

                    <span class="section-label">
                        02 — OUR DIRECTION
                    </span>

                    <h2>Visi dan Misi Tim.</h2>

                    <p>
                        Landasan yang menjadi arah dalam
                        perjalanan pembelajaran dan
                        pengembangan Tim Dev.
                    </p>

                </div>


                <div class="vision-grid">

                    <article class="vision-card">

                        <span class="card-number">
                            OUR VISION / 01
                        </span>

                        <h3>Visi</h3>

                        <p>
                            Menjadi tim pengembang yang adaptif,
                            kolaboratif, dan kompeten dalam
                            mengembangkan solusi digital melalui
                            pemanfaatan teknologi secara
                            berkelanjutan.
                        </p>

                    </article>


                    <article class="mission-card">

                        <span class="card-number">
                            OUR MISSION / 02
                        </span>

                        <h3>Misi</h3>

                        <ol class="mission-list">

                            <li>
                                Mengembangkan kemampuan teknis
                                melalui pembelajaran dan praktik
                                pengembangan aplikasi web.
                            </li>

                            <li>
                                Menerapkan proses pengembangan
                                yang terstruktur, terencana,
                                dan terdokumentasi.
                            </li>

                            <li>
                                Membangun komunikasi dan
                                kolaborasi yang efektif
                                antaranggota tim.
                            </li>

                            <li>
                                Menghasilkan karya digital
                                yang memiliki nilai guna
                                dan dapat dikembangkan.
                            </li>

                        </ol>

                    </article>

                </div>

            </div>

        </section>


        <!-- TEAM VALUES -->
        <section class="container values-section">

            <div class="section-heading">

                <span class="section-label">
                    03 — OUR VALUES
                </span>

                <h2>Prinsip yang kami pegang.</h2>

                <p>
                    Nilai yang mendukung setiap proses
                    kerja, pembelajaran, dan pengembangan.
                </p>

            </div>


            <div class="values-grid">

                <article class="value-card">

                    <span class="value-number">
                        01 / COLLABORATION
                    </span>

                    <h3>Kolaborasi</h3>

                    <p>
                        Saling bertukar ide, membagi
                        tanggung jawab, dan bekerja
                        bersama untuk mencapai tujuan.
                    </p>

                </article>


                <article class="value-card">

                    <span class="value-number">
                        02 / RESPONSIBILITY
                    </span>

                    <h3>Tanggung Jawab</h3>

                    <p>
                        Menjalankan setiap tugas dengan
                        komitmen, ketelitian, dan
                        kesadaran terhadap peran.
                    </p>

                </article>


                <article class="value-card">

                    <span class="value-number">
                        03 / LEARNING
                    </span>

                    <h3>Pembelajaran</h3>

                    <p>
                        Terbuka terhadap pengetahuan baru,
                        evaluasi, dan perkembangan teknologi
                        untuk meningkatkan kemampuan.
                    </p>

                </article>

            </div>

        </section>


        <!-- DEVELOPMENT PROCESS -->
        <section class="process-section">

            <div class="container">

                <div class="section-heading">

                    <span class="section-label">
                        04 — WORKING PROCESS
                    </span>

                    <h2>
                        Setiap karya memiliki proses.
                    </h2>

                    <p>
                        Tahapan pengembangan yang kami
                        terapkan untuk menjaga pekerjaan
                        tetap terarah dan terorganisasi.
                    </p>

                </div>


                <div class="process-grid">

                    <article class="process-card">
                        <span class="process-number">01</span>

                        <h3>Perencanaan</h3>

                        <p>
                            Mengidentifikasi kebutuhan,
                            menentukan tujuan, dan
                            menyusun rancangan.
                        </p>
                    </article>


                    <article class="process-card">
                        <span class="process-number">02</span>

                        <h3>Implementasi</h3>

                        <p>
                            Membangun fitur menggunakan
                            teknologi dan struktur
                            aplikasi yang sesuai.
                        </p>
                    </article>


                    <article class="process-card">
                        <span class="process-number">03</span>

                        <h3>Evaluasi</h3>

                        <p>
                            Memeriksa hasil pekerjaan,
                            menemukan kekurangan,
                            dan melakukan perbaikan.
                        </p>
                    </article>


                    <article class="process-card">
                        <span class="process-number">04</span>

                        <h3>Dokumentasi</h3>

                        <p>
                            Mencatat perubahan dan
                            menyimpan riwayat pekerjaan
                            menggunakan Git.
                        </p>
                    </article>

                </div>

            </div>

        </section>


        <!-- TEAM STRUCTURE -->
        <section class="container team-section">

            <div class="section-heading">

                <span class="section-label">
                    05 — TEAM STRUCTURE
                </span>

                <h2>Peran dalam pengembangan.</h2>

                <p>
                    Pembagian peran dirancang agar setiap
                    anggota memiliki tanggung jawab yang
                    jelas selama pengerjaan proyek.
                </p>

            </div>


            <div class="team-grid">


                <article class="team-card">

                    <div class="team-card-top">

                        <span class="team-number">
                            MEMBER / 01
                        </span>

                        <span class="team-status">
                            TEAM LEAD
                        </span>

                    </div>

                    <h3>Developer A</h3>

                    <p>
                        Bertanggung jawab terhadap
                        pengelolaan proyek, repository,
                        koordinasi pengembangan, serta
                        integrasi dan pemeliharaan fitur.
                    </p>

                    <span class="team-role">
                        Lead Developer
                    </span>

                </article>


                <article class="team-card">

                    <div class="team-card-top">

                        <span class="team-number">
                            MEMBER / 02
                        </span>

                        <span class="team-status">
                            COLLABORATOR
                        </span>

                    </div>

                    <h3>Developer B</h3>

                    <p>
                        Bertanggung jawab terhadap
                        pengembangan modul, pengelolaan
                        branch, pengiriman perubahan,
                        dan kolaborasi melalui Pull Request.
                    </p>

                    <span class="team-role">
                        Collaborator
                    </span>

                </article>


            </div>


            <p class="team-note">
                Nama dan identitas anggota akan dilengkapi
                setelah pembagian kelompok ditetapkan.
            </p>

        </section>


        <!-- CALL TO ACTION -->
        <section class="container cta-section">

            <div class="cta-box">

                <div>

                    <h2>Mari mengenal karya kami.</h2>

                    <p>
                        Jelajahi proyek, kemampuan,
                        dan hasil pengembangan Tim Dev.
                    </p>

                </div>

                <a href="{{ url('/portofolio') }}"
                   class="cta-button">

                    Jelajahi Portofolio ↗

                </a>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <div class="container footer-inner">

            <div class="footer-brand">

                <div class="footer-mark">
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
