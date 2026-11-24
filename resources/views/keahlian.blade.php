
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#202C39">

    <meta name="description" content="Keahlian dan kemampuan tim pengembang Tim Dev.">

    <title>Keahlian | Tim Dev</title>

    <style>
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
            --shadow: 0 15px 40px rgba(32, 44, 57, .08);
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
            font-family: "Segoe UI", Arial, sans-serif;
            color: var(--slate);

            background:
                radial-gradient(
                    ellipse 650px 500px at 92% 18%,
                    rgba(84, 124, 120, .15),
                    transparent 72%
                ),
                radial-gradient(
                    ellipse 550px 460px at 3% 65%,
                    rgba(168, 117, 96, .07),
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

        .container {
            width: min(1160px, 90%);
            margin: 0 auto;
        }

        /* NAVBAR */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(230, 229, 221, .91);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(32, 44, 57, .12);
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
            box-shadow: 0 7px 18px rgba(84, 124, 120, .2);
        }

        /* HERO */

        .hero {
            position: relative;
            isolation: isolate;
            display: grid;
            grid-template-columns: 1.05fr .95fr;
            align-items: center;
            gap: 65px;
            padding: 100px 0 85px;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 440px;
            height: 440px;
            top: 10px;
            right: -110px;
            border-radius: 50%;
            background: radial-gradient(
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
            font-size: clamp(43px, 5.3vw, 66px);
            line-height: 1.1;
            letter-spacing: -3px;
            font-weight: 850;
            color: var(--slate);
        }

        .hero h1 span {
            display: block;
            background: linear-gradient(110deg, #547C78, #729087);
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

        .hero-link {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-top: 28px;
            color: var(--teal);
            font-size: 13px;
            font-weight: 750;
            border-bottom: 1px solid var(--teal);
            padding-bottom: 5px;
            transition: .2s;
        }

        .hero-link:hover {
            gap: 15px;
            color: var(--slate);
        }

        /* OVERVIEW PANEL */

        .overview-panel {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            padding: 31px;
            background: linear-gradient(
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

        .overview-panel::before {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            top: -125px;
            right: -105px;
            border-radius: 50%;
            background: radial-gradient(
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

        .panel-heading {
            padding: 30px 0 25px;
        }

        .panel-heading small {
            color: var(--muted);
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.2px;
        }

        .panel-heading h2 {
            margin-top: 8px;
            font-size: 42px;
            font-weight: 850;
            letter-spacing: -2px;
            line-height: 1.2;
        }

        .panel-heading p {
            margin-top: 13px;
            color: #66716D;
            font-size: 13px;
            line-height: 1.9;
        }

        .panel-detail {
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

        /* SKILL SECTION */

        .skills-section {
            padding: 40px 0 100px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 35px;
            margin-bottom: 32px;
        }

        .section-heading .eyebrow {
            margin-bottom: 13px;
        }

        .section-heading h2 {
            font-size: clamp(30px, 4vw, 43px);
            line-height: 1.2;
            letter-spacing: -1.8px;
            font-weight: 850;
        }

        .section-heading p {
            max-width: 400px;
            color: var(--muted);
            font-size: 13px;
            line-height: 1.9;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .skill-card {
            position: relative;
            overflow: hidden;
            min-height: 240px;
            padding: 27px;
            background: rgba(249, 248, 243, .83);
            border: 1px solid rgba(32, 44, 57, .10);
            box-shadow: 0 8px 25px rgba(32, 44, 57, .035);
            transition: .3s ease;
        }

        .skill-card::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 3px;
            background: var(--teal);
            transition: width .3s ease;
        }

        .skill-card:hover {
            transform: translateY(-7px);
            border-color: rgba(84, 124, 120, .4);
            box-shadow: var(--shadow);
        }

        .skill-card:hover::after {
            width: 100%;
        }

        .skill-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 23px;
        }

        .skill-number {
            color: var(--teal);
            font-size: 11px;
            font-weight: 850;
            letter-spacing: 1.5px;
        }

        .skill-mark {
            width: 37px;
            height: 37px;
            display: grid;
            place-items: center;
            background: var(--sage);
            color: var(--teal);
            font-size: 14px;
            font-weight: 850;
        }

        .skill-card h3 {
            margin-bottom: 10px;
            color: var(--slate);
            font-size: 19px;
            font-weight: 800;
            letter-spacing: -.4px;
        }

        .skill-card p {
            min-height: 65px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.85;
        }

        .skill-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-top: 18px;
        }

        .skill-tags span {
            padding: 5px 10px;
            background: var(--soft);
            color: #506C66;
            border: 1px solid rgba(84, 124, 120, .12);
            font-size: 10px;
            font-weight: 700;
        }

        /* DEVELOPMENT APPROACH */

        .approach {
            margin-bottom: 95px;
            padding: 36px;
            display: grid;
            grid-template-columns: .85fr 1.15fr;
            gap: 40px;
            align-items: center;
            background: linear-gradient(
                120deg,
                rgba(32, 44, 57, .96),
                #2A4146
            );
            color: var(--white);
            box-shadow: 0 18px 40px rgba(32, 44, 57, .12);
        }

        .approach-label {
            color: #A6C2B9;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.8px;
        }

        .approach h2 {
            margin-top: 12px;
            font-size: 32px;
            line-height: 1.2;
            letter-spacing: -1px;
        }

        .approach-description {
            color: rgba(249, 248, 243, .73);
            font-size: 13px;
            line-height: 1.9;
        }

        .approach-steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 22px;
        }

        .approach-step {
            padding-top: 13px;
            border-top: 1px solid rgba(249, 248, 243, .25);
        }

        .approach-step strong {
            display: block;
            color: #A6C2B9;
            font-size: 11px;
            margin-bottom: 5px;
        }

        .approach-step span {
            font-size: 12px;
            font-weight: 700;
        }

        /* FOOTER */

        .footer {
            padding: 25px 0;
            color: var(--white);
            background: linear-gradient(115deg, #202C39, #2A4146);
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
            background: rgba(249, 248, 243, .12);
            border: 1px solid rgba(249, 248, 243, .2);
            font-size: 13px;
            font-weight: 850;
        }

        .footer-brand strong {
            display: block;
            font-size: 13px;
        }

        .footer-brand small {
            display: block;
            color: rgba(249, 248, 243, .65);
            font-size: 10px;
        }

        .footer-copy {
            color: rgba(249, 248, 243, .7);
            font-size: 11px;
        }

        .footer-social {
            display: flex;
            gap: 18px;
        }

        .footer-social a {
            color: rgba(249, 248, 243, .8);
            font-size: 11px;
            transition: .2s;
        }

        .footer-social a:hover {
            color: #A6C2B9;
        }

        /* RESPONSIVE */

        @media (max-width: 1050px) {
            .nav-links {
                gap: 15px;
            }

            .hero {
                gap: 35px;
            }

            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 800px) {
            .nav-inner {
                padding: 15px 0;
                flex-wrap: wrap;
            }

            .nav-links {
                order: 3;
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
                padding: 10px 0 5px;
            }

            .hero {
                grid-template-columns: 1fr;
                gap: 35px;
                padding: 75px 0 60px;
            }

            .hero h1 {
                max-width: 700px;
            }

            .overview-panel {
                max-width: 600px;
            }

            .section-heading {
                display: block;
            }

            .section-heading p {
                margin-top: 15px;
            }

            .approach {
                grid-template-columns: 1fr;
                gap: 22px;
            }
        }

        @media (max-width: 540px) {
            .container {
                width: 90%;
            }

            .nav-button {
                padding: 9px 12px;
                font-size: 10px;
            }

            .nav-links {
                gap: 16px;
            }

            .nav-links a {
                font-size: 11px;
            }

            .hero {
                padding: 60px 0 45px;
            }

            .hero h1 {
                font-size: 43px;
                letter-spacing: -2px;
            }

            .overview-panel {
                padding: 23px;
            }

            .panel-heading h2 {
                font-size: 35px;
            }

            .skills-section {
                padding: 25px 0 65px;
            }

            .skills-grid {
                grid-template-columns: 1fr;
                gap: 14px;
            }

            .skill-card {
                min-height: auto;
            }

            .skill-card p {
                min-height: 0;
            }

            .approach {
                padding: 25px;
                margin-bottom: 60px;
            }

            .approach-steps {
                grid-template-columns: 1fr;
            }

            .footer-inner {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
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
                        <a href="{{ url('/tentang') }}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{ url('/portofolio') }}">Portofolio</a>
                    </li>
                    <li>
                        <a href="{{ url('/keahlian') }}" class="active">Keahlian</a>
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
        <section class="container hero">

            <div class="hero-content">
                <div class="eyebrow">OUR CAPABILITIES</div>

                <h1>
                    Keahlian yang membangun
                    <span>solusi digital.</span>
                </h1>

                <p class="hero-description">
                    Kami mengembangkan kemampuan di bidang teknologi,
                    pengembangan web, pengelolaan data, dan desain antarmuka.
                    Setiap keahlian menjadi bagian dari proses untuk
                    menghasilkan solusi digital yang fungsional dan
                    bermanfaat.
                </p>

                <a href="#daftar-keahlian" class="hero-link">
                    Jelajahi keahlian kami ↘
                </a>
            </div>

            <div class="overview-panel">

                <div class="panel-top">
                    <span class="panel-label">TEAM CAPABILITIES</span>
                    <span class="panel-year">EST. 2026</span>
                </div>

                <div class="panel-heading">
                    <small>WEB DEVELOPMENT GROUP</small>
                    <h2>OUR SKILLS.</h2>
                    <p>
                        Menggabungkan kemampuan teknis, kreativitas,
                        dan kolaborasi dalam proses pengembangan
                        sebuah karya digital.
                    </p>
                </div>

                <div class="panel-detail">
                    <div class="detail-row">
                        <span>Fokus Utama</span>
                        <strong>Web Development</strong>
                    </div>
                    <div class="detail-row">
                        <span>Teknologi</span>
                        <strong>Modern Web Stack</strong>
                    </div>
                    <div class="detail-row">
                        <span>Kolaborasi</span>
                        <strong>Git & GitHub</strong>
                    </div>
                    <div class="detail-row">
                        <span>Pendekatan</span>
                        <strong>Learn · Build · Improve</strong>
                    </div>
                </div>

            </div>

        </section>

        <!-- SKILL CARDS -->
        <section class="container skills-section" id="daftar-keahlian">

            <div class="section-heading">
                <div>
                    <div class="eyebrow">WHAT WE CAN DO</div>
                    <h2>Area Keahlian</h2>
                </div>

                <p>
                    Berbagai bidang kemampuan yang menjadi dasar
                    dalam proses perencanaan, pengembangan, dan
                    penyempurnaan proyek digital.
                </p>
            </div>

            <div class="skills-grid">

                <article class="skill-card">
                    <div class="skill-top">
                        <span class="skill-number">01 / DEVELOPMENT</span>
                        <div class="skill-mark">01</div>
                    </div>
                    <h3>Frontend Development</h3>
                    <p>
                        Membangun tampilan website yang responsif,
                        terstruktur, dan mudah digunakan oleh pengguna.
                    </p>
                    <div class="skill-tags">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>JavaScript</span>
                        <span>Bootstrap</span>
                    </div>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <span class="skill-number">02 / DEVELOPMENT</span>
                        <div class="skill-mark">02</div>
                    </div>
                    <h3>Backend Development</h3>
                    <p>
                        Mengembangkan logika aplikasi, pengelolaan
                        proses server, dan integrasi sistem.
                    </p>
                    <div class="skill-tags">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>Node.js</span>
                    </div>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <span class="skill-number">03 / DATA</span>
                        <div class="skill-mark">03</div>
                    </div>
                    <h3>Database Management</h3>
                    <p>
                        Mengelola penyimpanan data serta hubungan
                        antar data untuk mendukung aplikasi.
                    </p>
                    <div class="skill-tags">
                        <span>MySQL</span>
                        <span>PostgreSQL</span>
                        <span>Supabase</span>
                    </div>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <span class="skill-number">04 / COLLABORATION</span>
                        <div class="skill-mark">04</div>
                    </div>
                    <h3>Version Control</h3>
                    <p>
                        Mengelola riwayat perubahan kode dan
                        mendukung kolaborasi dalam pengembangan.
                    </p>
                    <div class="skill-tags">
                        <span>Git</span>
                        <span>GitHub</span>
                        <span>Branching</span>
                    </div>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <span class="skill-number">05 / DESIGN</span>
                        <div class="skill-mark">05</div>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>
                        Menyusun antarmuka dengan memperhatikan
                        konsistensi visual dan pengalaman pengguna.
                    </p>
                    <div class="skill-tags">
                        <span>UI Design</span>
                        <span>Wireframe</span>
                        <span>Responsive</span>
                    </div>
                </article>

                <article class="skill-card">
                    <div class="skill-top">
                        <span class="skill-number">06 / NETWORK</span>
                        <div class="skill-mark">06</div>
                    </div>
                    <h3>Network & Server</h3>
                    <p>
                        Memahami konsep jaringan komputer,
                        konfigurasi dasar, dan layanan server.
                    </p>
                    <div class="skill-tags">
                        <span>TCP/IP</span>
                        <span>Routing</span>
                        <span>Linux Server</span>
                    </div>
                </article>

            </div>

        </section>

        <!-- APPROACH -->
        <section class="container approach">

            <div>
                <div class="approach-label">OUR APPROACH</div>
                <h2>Belajar, membangun, dan terus berkembang.</h2>
            </div>

            <div>
                <p class="approach-description">
                    Kami percaya bahwa pengembangan kemampuan tidak
                    berhenti pada penguasaan teknologi. Kolaborasi,
                    proses belajar, serta evaluasi menjadi bagian
                    penting dalam menghasilkan karya yang lebih baik.
                </p>

                <div class="approach-steps">
                    <div class="approach-step">
                        <strong>01</strong>
                        <span>Learn</span>
                    </div>
                    <div class="approach-step">
                        <strong>02</strong>
                        <span>Build</span>
                    </div>
                    <div class="approach-step">
                        <strong>03</strong>
                        <span>Improve</span>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container footer-inner">

            <div class="footer-brand">
                <div class="footer-logo">TD</div>
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
                   rel="noopener noreferrer">GitHub</a>

                <a href="https://instagram.com/"
                   target="_blank"
                   rel="noopener noreferrer">Instagram</a>
            </div>

        </div>
    </footer>

</body>
</html>
