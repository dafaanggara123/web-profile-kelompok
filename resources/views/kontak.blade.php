
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Web Profile Kelompok</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f5;
            color: #333;
        }

        header {
            background: #202c39;
            color: white;
            padding: 20px 8%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h2 {
            font-size: 22px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .contact-section {
            max-width: 700px;
            margin: 60px auto;
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .contact-section h1 {
            text-align: center;
            margin-bottom: 15px;
            color: #547c78;
        }

        .contact-section p {
            text-align: center;
            margin-bottom: 30px;
            color: #666;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
        }

        .form-group textarea {
            height: 130px;
            resize: vertical;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 6px;
            background: #547c78;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #405f5c;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #777;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .contact-section {
                margin: 30px 15px;
                padding: 25px;
            }
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <h2>Web Profile</h2>
            <div>
                <a href="/">Beranda</a>
                <a href="/tentang">Tentang</a>
                <a href="/kontak">Kontak</a>
            </div>
        </nav>
    </header>

    <section class="contact-section">
        <h1>Hubungi Kami</h1>
        <p>Silakan isi formulir di bawah ini untuk mengirim pesan kepada kami.</p>

        <form>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama"
                    placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                    placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
                <label for="subjek">Subjek</label>
                <input type="text" id="subjek" name="subjek"
                    placeholder="Masukkan subjek pesan" required>
            </div>

            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan"
                    placeholder="Tuliskan pesan Anda..." required></textarea>
            </div>

            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

    <footer>
        &copy; 2026 Tim Web Profile. All rights reserved.
    </footer>

</body>
</html>