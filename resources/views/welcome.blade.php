<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PawCare Aceh — Temukan Sahabat, Berikan Harapan</title>
    <meta name="description" content="PawCare Aceh membantu mempertemukan hewan yang membutuhkan rumah dengan keluarga yang penuh kasih.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            --green: #111827;
            --green-2: #1f2937;
            --mint: #f8fafc;
            --cream: #ffffff;
            --orange: #2563eb;
            --ink: #111827;
            --muted: #64748b;
            --line: #e5e7eb;
        }

        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            margin: 0;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--cream);
            color: var(--ink);
        }

        a { text-decoration: none; }

        .page-shell {
            overflow: hidden;
            min-height: 100vh;
        }

        .container {
            width: min(1160px, calc(100% - 40px));
            margin: 0 auto;
        }

        .nav {
            position: relative;
            z-index: 20;
            padding: 22px 0;
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 11px;
            color: var(--green);
            font-weight: 850;
            letter-spacing: -0.03em;
            font-size: 1.22rem;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 14px;
            background: var(--green);
            color: white;
            box-shadow: 0 10px 24px rgba(23, 63, 53, .16);
            font-size: 21px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .nav-links a {
            color: #5c6e67;
            font-size: .92rem;
            font-weight: 650;
            transition: .2s ease;
        }

        .nav-links a:hover { color: var(--green); }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            border-radius: 12px;
            padding: 12px 18px;
            font-weight: 750;
            font-size: .9rem;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
            cursor: pointer;
            border: 0;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-outline {
            color: var(--green);
            border: 1px solid #d9e3dd;
            background: rgba(255,255,255,.65);
        }

        .btn-outline:hover {
            background: white;
            box-shadow: 0 8px 20px rgba(23,63,53,.08);
        }

        .btn-primary {
            color: white;
            background: var(--green);
            box-shadow: 0 12px 28px rgba(23,63,53,.18);
        }

        .btn-primary:hover {
            background: #10352c;
            box-shadow: 0 16px 32px rgba(23,63,53,.23);
        }

        .hero {
            position: relative;
            padding: 54px 0 92px;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 580px;
            height: 580px;
            border-radius: 50%;
            background: #edf6ef;
            top: -120px;
            right: -190px;
            z-index: -1;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.02fr .98fr;
            align-items: center;
            gap: 70px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 11px;
            border-radius: 999px;
            background: #edf5ef;
            color: var(--green-2);
            font-size: .76rem;
            font-weight: 800;
            letter-spacing: .04em;
            text-transform: uppercase;
        }

        .eyebrow-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--orange);
        }

        .hero h1 {
            margin: 20px 0 19px;
            max-width: 650px;
            color: var(--green);
            font-size: clamp(3rem, 5.3vw, 5.25rem);
            line-height: .98;
            letter-spacing: -.065em;
            font-weight: 900;
        }

        .hero h1 span {
            color: var(--orange);
        }

        .hero-copy {
            max-width: 570px;
            color: var(--muted);
            font-size: 1.06rem;
            line-height: 1.75;
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
        }

        .hero-note {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 24px;
            color: #718078;
            font-size: .83rem;
        }

        .avatar-stack {
            display: flex;
            align-items: center;
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            margin-left: -7px;
            border: 3px solid var(--cream);
            background: #e8eee8;
            font-size: 14px;
        }

        .avatar:first-child { margin-left: 0; }

        .hero-visual {
            position: relative;
            min-height: 540px;
        }

        .hero-photo {
            position: absolute;
            inset: 18px 15px 18px 50px;
            border-radius: 34px;
            overflow: hidden;
            background:
                linear-gradient(145deg, rgba(23,63,53,.1), rgba(23,63,53,.38)),
                url("https://images.unsplash.com/photo-1601758228041-f3b2795255f1?auto=format&fit=crop&w=1000&q=85") center/cover;
            box-shadow: 0 30px 70px rgba(31, 60, 51, .20);
        }

        .hero-photo::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 48%, rgba(15,35,29,.45));
        }

        .photo-label {
            position: absolute;
            z-index: 2;
            left: 24px;
            bottom: 24px;
            right: 24px;
            display: flex;
            align-items: end;
            justify-content: space-between;
            color: white;
        }

        .photo-label strong {
            display: block;
            font-size: 1.18rem;
            margin-bottom: 4px;
        }

        .photo-label small {
            opacity: .84;
        }

        .photo-badge {
            width: 52px;
            height: 52px;
            display: grid;
            place-items: center;
            border-radius: 17px;
            background: rgba(255,255,255,.92);
            color: var(--orange);
            font-size: 24px;
            box-shadow: 0 12px 28px rgba(0,0,0,.12);
        }

        .float-card {
            position: absolute;
            z-index: 4;
            background: rgba(255,255,255,.96);
            border: 1px solid rgba(255,255,255,.8);
            box-shadow: 0 20px 45px rgba(26,55,47,.16);
            border-radius: 18px;
            backdrop-filter: blur(12px);
        }

        .adoption-card {
            left: -2px;
            top: 58px;
            width: 190px;
            padding: 17px;
        }

        .adoption-card .mini-icon {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            background: #fdf0e7;
            border-radius: 13px;
            font-size: 21px;
            margin-bottom: 12px;
        }

        .float-card strong {
            display: block;
            color: var(--green);
            font-size: .95rem;
        }

        .float-card span {
            display: block;
            color: #83918b;
            font-size: .74rem;
            margin-top: 4px;
            line-height: 1.45;
        }

        .location-card {
            right: -5px;
            bottom: 52px;
            width: 195px;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .location-icon {
            width: 40px;
            height: 40px;
            flex: 0 0 40px;
            display: grid;
            place-items: center;
            background: #eaf4ee;
            border-radius: 12px;
        }

        .stats {
            padding: 0 0 82px;
        }

        .stats-box {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border: 1px solid var(--line);
            background: white;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(30, 62, 52, .05);
        }

        .stat {
            padding: 28px 32px;
            text-align: center;
            border-right: 1px solid var(--line);
        }

        .stat:last-child { border-right: 0; }

        .stat strong {
            color: var(--green);
            display: block;
            font-size: 1.65rem;
            letter-spacing: -.04em;
        }

        .stat span {
            display: block;
            color: #7a8983;
            font-size: .82rem;
            margin-top: 4px;
        }

        .section {
            padding: 94px 0;
        }

        .section-soft {
            background: #f1f6f1;
        }

        .section-head {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 40px;
        }

        .section-kicker {
            color: var(--orange);
            text-transform: uppercase;
            letter-spacing: .1em;
            font-size: .72rem;
            font-weight: 850;
            margin-bottom: 10px;
        }

        .section h2 {
            margin: 0;
            color: var(--green);
            font-size: clamp(2rem, 3.4vw, 3.2rem);
            line-height: 1.05;
            letter-spacing: -.055em;
        }

        .section-intro {
            max-width: 450px;
            margin: 0;
            color: var(--muted);
            line-height: 1.7;
            font-size: .94rem;
        }

        .services {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px;
        }

        .service {
            background: white;
            border: 1px solid var(--line);
            border-radius: 22px;
            padding: 27px;
            transition: .25s ease;
        }

        .service:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 38px rgba(29,64,53,.09);
            border-color: #d5e1da;
        }

        .service-icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            border-radius: 15px;
            background: #edf5ef;
            font-size: 23px;
            margin-bottom: 23px;
        }

        .service:nth-child(2) .service-icon { background: #fff0e6; }
        .service:nth-child(3) .service-icon { background: #f1edf8; }

        .service h3 {
            margin: 0 0 9px;
            color: var(--green);
            font-size: 1.04rem;
        }

        .service p {
            margin: 0;
            color: #77867f;
            font-size: .86rem;
            line-height: 1.7;
        }

        .service-link {
            display: inline-flex;
            margin-top: 22px;
            color: var(--green);
            font-size: .8rem;
            font-weight: 800;
        }

        .story {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 70px;
            align-items: center;
        }

        .story-image {
            min-height: 440px;
            border-radius: 30px;
            background:
                linear-gradient(145deg, rgba(23,63,53,.05), rgba(23,63,53,.24)),
                url("https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=900&q=85") center/cover;
            box-shadow: 0 25px 55px rgba(31,60,51,.13);
        }

        .story-content p {
            color: var(--muted);
            line-height: 1.8;
            font-size: .95rem;
            margin: 19px 0 0;
        }

        .check-list {
            display: grid;
            gap: 12px;
            margin: 26px 0 0;
        }

        .check {
            display: flex;
            align-items: center;
            gap: 11px;
            color: #52645c;
            font-size: .86rem;
            font-weight: 650;
        }

        .check-mark {
            width: 22px;
            height: 22px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: #e5f1e8;
            color: var(--green);
            font-size: 12px;
            font-weight: 900;
        }

        .cta {
            padding: 0 0 95px;
        }

        .cta-box {
            position: relative;
            overflow: hidden;
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 30px;
            padding: 46px 52px;
            border-radius: 28px;
            background: var(--green);
            color: white;
        }

        .cta-box::before {
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            right: 170px;
            top: -150px;
            background: rgba(255,255,255,.06);
        }

        .cta-box h2 {
            position: relative;
            margin: 0;
            color: white;
            font-size: clamp(1.8rem, 3vw, 2.65rem);
            letter-spacing: -.05em;
        }

        .cta-box p {
            position: relative;
            margin: 10px 0 0;
            color: rgba(255,255,255,.7);
            max-width: 570px;
            line-height: 1.65;
            font-size: .9rem;
        }

        .btn-light {
            position: relative;
            color: var(--green);
            background: white;
            padding: 13px 21px;
            white-space: nowrap;
        }

        .btn-light:hover { background: #f5faf6; }

        footer {
            border-top: 1px solid var(--line);
            padding: 28px 0;
            background: #fff;
        }

        .footer-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .footer-copy {
            color: #89958f;
            font-size: .76rem;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #6e7d76;
            font-size: .76rem;
        }

        @media (max-width: 900px) {
            .nav-links { display: none; }

            .hero-grid,
            .story {
                grid-template-columns: 1fr;
            }

            .hero {
                padding-top: 35px;
            }

            .hero-visual {
                min-height: 470px;
            }

            .hero-grid { gap: 35px; }

            .services {
                grid-template-columns: 1fr;
            }

            .section-head {
                align-items: start;
                flex-direction: column;
            }

            .story-image { min-height: 380px; }

            .cta-box {
                grid-template-columns: 1fr;
                padding: 38px 32px;
            }
        }

        @media (max-width: 600px) {
            .container {
                width: min(100% - 28px, 1160px);
            }

            .nav-actions .btn-outline { display: none; }

            .hero h1 {
                font-size: 3rem;
            }

            .hero-visual {
                min-height: 380px;
            }

            .hero-photo {
                inset: 8px 4px 8px 20px;
                border-radius: 25px;
            }

            .adoption-card {
                left: -2px;
                top: 30px;
                width: 160px;
            }

            .location-card {
                right: -2px;
                bottom: 25px;
                width: 165px;
            }

            .stats-box {
                grid-template-columns: 1fr;
            }

            .stat {
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }

            .stat:last-child { border-bottom: 0; }

            .section {
                padding: 70px 0;
            }

            .story-image { min-height: 300px; }

            .footer-inner {
                align-items: start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
<div class="page-shell">

    <header class="nav">
        <div class="container nav-inner">
            <a href="{{ url('/') }}" class="brand">
                <span class="brand-mark">🐾</span>
                <span>PawCare <small style="font-weight:700; color:#e88a4a;">Aceh</small></span>
            </a>

            <nav class="nav-links">
                <a href="#layanan">Layanan</a>
                <a href="#tentang">Tentang Kami</a>
                <a href="#cara-kerja">Cara Kerja</a>
            </nav>

            <div class="nav-actions">
                @auth
                    <a href="{{ route('login') }}" class="btn btn-primary">Dashboard →</a>
                @else
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-outline">Masuk</a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Mulai Sekarang →</a>
                    @endif
                @endauth
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <div class="eyebrow">
                        <span class="eyebrow-dot"></span>
                        Platform kepedulian hewan di Aceh
                    </div>

                    <h1>
                        Satu langkah kecil,<br>
                        <span>satu kehidupan</span><br>
                        yang berubah.
                    </h1>

                    <p class="hero-copy">
                        PawCare Aceh membantu mempertemukan hewan yang membutuhkan
                        dengan orang-orang yang siap memberikan rumah, perhatian,
                        dan kehidupan yang lebih baik.
                    </p>

                    <div class="hero-buttons">
                        @auth
                            <a href="{{ route('login') }}" class="btn btn-primary">
                                Jelajahi PawCare <span>→</span>
                            </a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary">
                                    Mulai Peduli <span>→</span>
                                </a>
                            @elseif (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-primary">
                                    Mulai Peduli <span>→</span>
                                </a>
                            @endif
                        @endauth

                        <a href="#layanan" class="btn btn-outline">Pelajari lebih lanjut</a>
                    </div>

                    <div class="hero-note">
                        <div class="avatar-stack">
                            <span class="avatar">🐶</span>
                            <span class="avatar">🐱</span>
                            <span class="avatar">💚</span>
                        </div>
                        <span>Dibangun untuk komunitas pecinta hewan Aceh</span>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-photo">
                        <div class="photo-label">
                            <div>
                                <strong>Every pet deserves a home.</strong>
                                <small>Rawat. Lindungi. Sayangi.</small>
                            </div>
                            <div class="photo-badge">♥</div>
                        </div>
                    </div>

                    <div class="float-card adoption-card">
                        <div class="mini-icon">🏠</div>
                        <strong>Rumah baru</strong>
                        <span>Temukan kesempatan untuk memberikan rumah penuh kasih.</span>
                    </div>

                    <div class="float-card location-card">
                        <div class="location-icon">📍</div>
                        <div>
                            <strong>Aceh</strong>
                            <span>Untuk komunitas lokal</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="stats">
            <div class="container">
                <div class="stats-box">
                    <div class="stat">
                        <strong>Care</strong>
                        <span>Mengutamakan kesejahteraan hewan</span>
                    </div>
                    <div class="stat">
                        <strong>Connect</strong>
                        <span>Menghubungkan orang dan hewan</span>
                    </div>
                    <div class="stat">
                        <strong>Aceh</strong>
                        <span>Bergerak dari dan untuk komunitas lokal</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-soft" id="layanan">
            <div class="container">
                <div class="section-head">
                    <div>
                        <div class="section-kicker">Apa yang kami lakukan</div>
                        <h2>Lebih dari sekadar<br>sebuah platform.</h2>
                    </div>

                    <p class="section-intro">
                        PawCare dirancang untuk membuat kepedulian terhadap hewan
                        terasa lebih mudah, terhubung, dan dapat diakses oleh siapa saja.
                    </p>
                </div>

                <div class="services">
                    <article class="service">
                        <div class="service-icon">🐾</div>
                        <h3>Adopsi Hewan</h3>
                        <p>
                            Bantu hewan menemukan keluarga yang tepat dan kesempatan
                            untuk memulai kehidupan baru.
                        </p>
                        @auth
                            <a href="{{ route('login') }}" class="service-link">Jelajahi →</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="service-link">Jelajahi →</a>
                            @elseif (Route::has('login'))
                                <a href="{{ route('login') }}" class="service-link">Jelajahi →</a>
                            @endif
                        @endauth
                    </article>

                    <article class="service">
                        <div class="service-icon">🏡</div>
                        <h3>Informasi Shelter</h3>
                        <p>
                            Temukan informasi yang membantu kamu mengenal dan
                            mendukung tempat perlindungan hewan.
                        </p>
                        @auth
                            <a href="{{ route('login') }}" class="service-link">Lihat informasi →</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="service-link">Lihat informasi →</a>
                            @elseif (Route::has('login'))
                                <a href="{{ route('login') }}" class="service-link">Lihat informasi →</a>
                            @endif
                        @endauth
                    </article>

                    <article class="service">
                        <div class="service-icon">♥</div>
                        <h3>Peduli Bersama</h3>
                        <p>
                            Bangun lingkungan yang lebih peduli melalui informasi,
                            bantuan, dan aksi nyata untuk hewan.
                        </p>
                        @auth
                            <a href="{{ route('login') }}" class="service-link">Mulai berkontribusi →</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="service-link">Mulai berkontribusi →</a>
                            @elseif (Route::has('login'))
                                <a href="{{ route('login') }}" class="service-link">Mulai berkontribusi →</a>
                            @endif
                        @endauth
                    </article>
                </div>
            </div>
        </section>

        <section class="section" id="tentang">
            <div class="container story">
                <div class="story-image"></div>

                <div class="story-content">
                    <div class="section-kicker">Tentang PawCare</div>
                    <h2>Membuat kepedulian terasa lebih dekat.</h2>

                    <p>
                        PawCare Aceh hadir sebagai bagian dari upaya membangun
                        ekosistem yang lebih peduli terhadap hewan. Kami percaya
                        bahwa teknologi bukan hanya tentang membuat sesuatu menjadi
                        cepat, tetapi juga tentang membuat kebaikan lebih mudah dilakukan.
                    </p>

                    <div class="check-list">
                        <div class="check">
                            <span class="check-mark">✓</span>
                            Informasi yang mudah ditemukan
                        </div>
                        <div class="check">
                            <span class="check-mark">✓</span>
                            Pengalaman pengguna yang sederhana
                        </div>
                        <div class="check">
                            <span class="check-mark">✓</span>
                            Fokus pada komunitas dan kesejahteraan hewan
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-soft" id="cara-kerja">
            <div class="container">
                <div class="section-head">
                    <div>
                        <div class="section-kicker">Cara kerja</div>
                        <h2>Mulai dari hal<br>yang sederhana.</h2>
                    </div>

                    <p class="section-intro">
                        Tidak perlu rumit. Kenali, temukan, lalu ambil langkah
                        yang bisa membuat perbedaan.
                    </p>
                </div>

                <div class="services">
                    <article class="service">
                        <div class="service-icon">01</div>
                        <h3>Kenali</h3>
                        <p>
                            Pelajari informasi hewan, shelter, dan berbagai hal
                            yang dapat membantu kamu menentukan langkah berikutnya.
                        </p>
                    </article>

                    <article class="service">
                        <div class="service-icon">02</div>
                        <h3>Temukan</h3>
                        <p>
                            Temukan kesempatan yang sesuai dengan kebutuhanmu
                            dan kondisi hewan yang ingin kamu bantu.
                        </p>
                    </article>

                    <article class="service">
                        <div class="service-icon">03</div>
                        <h3>Bertindak</h3>
                        <p>
                            Ambil langkah kecil hari ini. Karena bagi seekor hewan,
                            langkah kecil itu bisa berarti segalanya.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <div class="cta-box">
                    <div>
                        <h2>Siap menjadi bagian dari PawCare?</h2>
                        <p>
                            Mari ciptakan lebih banyak cerita baik untuk hewan
                            dan komunitas di Aceh.
                        </p>
                    </div>

                    @auth
                        <a href="{{ route('login') }}" class="btn btn-light">Buka Dashboard →</a>
                    @else
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-light">Bergabung Sekarang →</a>
                        @elseif (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-light">Masuk ke PawCare →</a>
                        @endif
                    @endauth
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container footer-inner">
            <div class="brand">
                <span class="brand-mark" style="width:34px;height:34px;border-radius:11px;font-size:17px;">🐾</span>
                <span style="font-size:1rem;">PawCare <small style="color:#e88a4a;">Aceh</small></span>
            </div>

            <div class="footer-copy">
                © {{ date('Y') }} PawCare Aceh. Dibuat dengan kepedulian.
            </div>

            <div class="footer-links">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Masuk</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Daftar</a>
                @endif
            </div>
        </div>
    </footer>

</div>
</body>
</html>
