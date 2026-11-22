
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | Tim Dev</title>

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
            --white: #F9F8F3;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            color: var(--slate);
            background: linear-gradient(135deg, #E6E5DD, #E9E9E2, #DCE2DA);
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

        /* NAVBAR */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(230,229,221,.93);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(32,44,57,.12);
        }

        .nav-inner {
            min-height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-icon {
            width: 43px;
            height: 43px;
            display: grid;
            place-items: center;
            background: var(--slate);
            color: var(--white);
            font-weight: 800;
        }

        .brand-name {
            font-weight: 800;
            font-size: 17px;
            line-height: 1.3;
        }

        .brand-caption {
            font-size: 11px;
            color: var(--muted);
        }

        .nav-links {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 27px;
        }

        .nav-links a {
            font-size: 13px;
            font-weight: 650;
            color: #65716C;
            transition: .2s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--teal);
        }

        .nav-button {
            padding: 10px 17px;
            background: var(--slate);
            color: var(--white);
            font-size: 12px;
            font-weight: 700;
            transition: .2s;
        }

        .nav-button:hover {
            background: var(--teal);
        }

        /* HERO */
        .hero {
            padding: 100px 0 80px;
            border-bottom: 1px solid rgba(32,44,57,.12);
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            right: -130px;
            top: 0;
            background: radial-gradient(circle, rgba(84,124,120,.15), transparent 70%);
            pointer-events: none;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--teal);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 1.8px;
            margin-bottom: 25px;
        }

        .eyebrow::before {
            content: "";
            width: 25px;
            height: 2px;
            background: var(--teal);
        }

        .hero h1 {
            max-width: 850px;
            font-size: clamp(42px, 6vw, 76px);
            letter-spacing: -3px;
            line-height: 1.1;
            font-weight: 850;
        }

        .hero h1 span {
            color: var(--teal);
        }

        .hero p {
            max-width: 650px;
            color: var(--muted);
            font-size: 15px;
            margin-top: 24px;
            line-height: 1.9;
        }

        .hero-bottom {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid var(--line);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .hero-tag {
            background: rgba(220,226,218,.7);
            border: 1px solid rgba(84,124,120,.15);
            padding: 7px 12px;
            font-size: 10px;
            font-weight: 700;
        }

        /* PROJECT SECTION */
        .portfolio-section {
            padding: 80px 0 100px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            align-items: end;
            flex-wrap: wrap;
            gap: 25px;
            margin-bottom: 35px;
        }

        .section-label {
            color: var(--clay);
            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.8px;
        }

        .section-heading h2 {
            font-size: clamp(30px, 4vw, 45px);
            line-height: 1.2;
            letter-spacing: -1.5px;
            margin-top: 10px;
        }

        .section-heading p {
            max-width: 430px;
            font-size: 13px;
            color: var(--muted);
        }

        .project-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .project-card {
            background: rgba(249,248,243,.7);
            border: 1px solid rgba(32,44,57,.12);
            transition: .3s;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 40px rgba(32,44,57,.08);
        }

        .project-visual {
            min-height: 240px;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--slate), var(--teal));
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .project-visual::before,
        .project-visual::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(255,255,255,.15);
            border-radius: 50%;
        }

        .project-visual::before {
            width: 260px;
            height: 260px;
            right: -90px;
            top: -100px;
        }

        .project-visual::after {
            width: 160px;
            height: 160px;
            left: -60px;
            bottom: -70px;
        }

        .project-visual span {
            font-size: 48px;
            font-weight: 850;
            letter-spacing: -2px;
            opacity: .9;
            z-index: 1;
        }

        .project-info {
            padding: 28px;
        }

        .project-number {
            color: var(--teal);
            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.5px;
        }

        .project-info h3 {
            font-size: 23px;
            margin-top: 8px;
            letter-spacing: -.5px;
        }

        .project-info p {
            font-size: 13px;
            color: var(--muted);
            margin-top: 12px;
        }

        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
        }

        .tech-list span {
            font-size: 10px;
            font-weight: 700;
            padding: 6px 10px;
            background: var(--sage);
            color: var(--slate);
        }

        .project-link {
            display: inline-block;
            margin-top: 23px;
            font-size: 12px;
            font-weight: 750;
            color: var(--teal);
            border-bottom: 1px solid var(--teal);
        }

        /* FOOTER */
        footer {
            padding: 25px 0;
            border-top: 1px solid rgba(32,44,57,.15);
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        footer p {
            color: var(--muted);
            font-size: 11px;
        }

        /* RESPONSIVE */
        @media (max-width: 800px) {
            .nav-links {
                gap: 14px;
            }

            .nav-button {
                display: none;
            }

            .hero {
                padding: 70px 0;
            }

            .project-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 560px) {
            .nav-inner {
                min-height: 70px;
            }

            .brand-caption {
                display: none;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 11px;
            }

            .hero h1 {
                letter-spacing: -2px;
            }

            .project-visual {
                min-height: 180px;
            }

            .project-info {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container nav-inner">
            <a href="/" class="brand">
                <div class="brand-icon">TD</div>
                <div>
                    <div class="brand-name">Tim Dev</div>
                    <div class="brand-caption">Web Development Team</div>
                </div>
            </a>

            <ul class="nav-links">
                <li><a href="/">Beranda</a></li>
                <li><a href="/tentang">Tentang</a></li>
                <li><a href="/portofolio" class="active">Portofolio</a></li>
                <li><a href="/keahlian">Keahlian</a></li>
            </ul>

            <a href="/kontak" class="nav-button">Hubungi Kami ↗</a>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
        <div class="container">
            <span class="eyebrow">OUR WORK & PROJECT</span>

            <h1>
                Karya yang kami buat,
                <span>ide yang kami wujudkan.</span>
            </h1>

            <p>
                Berikut adalah kumpulan proyek yang menjadi bagian dari perjalanan
                kami dalam belajar, berkolaborasi, dan mengembangkan solusi
                digital melalui teknologi web.
            </p>

            <div class="hero-bottom">
                <span class="hero-tag">PROJECT SHOWCASE</span>
                <span style="font-size:11px;color:var(--muted)">
                    Selected works — Tim Dev
                </span>
            </div>
        </div>
    </header>

    <!-- PORTFOLIO -->
    <section class="portfolio-section">
        <div class="container">

            <div class="section-heading">
                <div>
                    <span class="section-label">PORTFOLIO</span>
                    <h2>Proyek pilihan kami</h2>
                </div>

                <p>
                    Beberapa proyek yang kami kerjakan sebagai proses
                    mengembangkan kemampuan dan menerapkan teknologi
                    dalam pembuatan website.
                </p>
            </div>

            <div class="project-grid">

    <!-- PROJECT 1 -->
    <article class="project-card">
        <div class="project-visual">
            <span>TEAM PROFILE</span>
        </div>

        <div class="project-info">
            <span class="project-number">01 / TEAM PROJECT</span>
            <h3>Website Profil Tim</h3>

            <p>
                Website kelompok yang dibuat untuk memperkenalkan anggota tim,
                menjelaskan tujuan kelompok, dan menampilkan informasi
                mengenai kemampuan serta hasil kerja bersama.
            </p>

            <div class="tech-list">
                <span>HTML</span>
                <span>CSS</span>
                <span>Laravel</span>
            </div>

            <a href="https://github.com/dafaanggara123/web-profile-kelompok"
               target="_blank" class="project-link">
                Lihat repository ↗
            </a>
        </div>
    </article>

    <!-- PROJECT 2 -->
    <article class="project-card">
        <div class="project-visual">
            <span>PORTFOLIO</span>
        </div>

        <div class="project-info">
            <span class="project-number">02 / WEB PAGE</span>
            <h3>Halaman Portofolio</h3>

            <p>
                Bagian website yang menampilkan proyek dan aktivitas
                pengembangan tim. Halaman ini dibuat sebagai latihan
                pengelolaan tampilan dan pembagian pengerjaan fitur.
            </p>

            <div class="tech-list">
                <span>Blade</span>
                <span>CSS</span>
                <span>Responsive Design</span>
            </div>

            <a href="https://github.com/dafaanggara123/web-profile-kelompok"
               target="_blank" class="project-link">
                Lihat repository ↗
            </a>
        </div>
    </article>

    <!-- PROJECT 3 -->
    <article class="project-card">
        <div class="project-visual">
            <span>GIT WORKFLOW</span>
        </div>

        <div class="project-info">
            <span class="project-number">03 / COLLABORATION</span>
            <h3>Kolaborasi Git & GitHub</h3>

            <p>
                Proses pengerjaan website menggunakan Git dan GitHub
                untuk mengelola perubahan kode, menyimpan pekerjaan,
                serta berbagi hasil pengembangan dengan anggota tim.
            </p>

            <div class="tech-list">
                <span>Git</span>
                <span>GitHub</span>
                <span>Commit</span>
            </div>

            <a href="https://github.com/dafaanggara123/web-profile-kelompok"
               target="_blank" class="project-link">
                Lihat repository ↗
            </a>
        </div>
    </article>

    <!-- PROJECT 4 -->
    <article class="project-card">
        <div class="project-visual">
            <span>BRANCH DEVELOPMENT</span>
        </div>

        <div class="project-info">
            <span class="project-number">04 / TEAM WORKFLOW</span>
            <h3>Pengembangan per Branch</h3>

            <p>
                Setiap anggota mengerjakan fitur pada branch masing-masing
                agar perubahan kode lebih terorganisir, mengurangi konflik,
                dan memudahkan proses integrasi ke branch utama.
            </p>

            <div class="tech-list">
                <span>Branch</span>
                <span>Push</span>
                <span>Merge</span>
            </div>

            <a href="https://github.com/dafaanggara123/web-profile-kelompok"
               target="_blank" class="project-link">
                Lihat repository ↗
            </a>
        </div>
    </article>

</div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container footer-inner">
            <p>© 2026 Tim Dev — Web Development Team</p>
            <p>Dibuat dengan semangat kolaborasi dan pembelajaran.</p>
        </div>
    </footer>

</body>
</html>