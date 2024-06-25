<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UKMZONE Landing Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
        }

        @keyframes wave {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .hero-section {
            background: radial-gradient(circle, rgba(90, 171, 71, 0.7) , rgba(255, 255, 255, 0));
            /* background: linear-gradient(135deg, rgba(155, 174, 150, 0.7) 80%, rgba(0, 200, 113, 0) 50%); */
            background-size: 200% 200%;
            animation: wave 15s ease infinite;
            /* Meningkatkan durasi animasi ke 15 detik */
            height: 100vh;
            display: flex;
            align-items: center;
            color: rgb(0, 0, 0);
            position: relative;
            font-weight: bold;
        }

        .hero-content {
            z-index: 1;
            margin-left: -360px;
        }

        .hero-content span {
            color: #24b33c;
            font-size: 65px;
        }

        .hero-content h1 {
            font-family: "Times New Roman";
            font-size: 60px;
            padding-left: 20px;
            letter-spacing: 2px;
        }

        .hero-content p {
            padding-left: 20px;
            padding-bottom: 25px;
            font-family: Arial;
            letter-spacing: 1.2px;
            line-height: 30px;
        }

        .hero-content .cta-buttons a {
            width: 160px;
            height: 40px;
            background: #24b33c;
            border: none;
            margin-bottom: 10px;
            margin-left: 20px;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.4s ease;
        }

        .navbar-brand {
            padding-left: 50px;
            padding-top: 20px;
            font-size: 30px;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #24b33c;
            padding-bottom: 15px;
        }

        .nav-item {
            padding-left: 30px;
            padding-top: 20px;
            font-size: 20px;
            font-family: Arial, sans-serif;
        }

        .navbar .nav-link {
            color: rgb(0, 0, 0) !important;
        }

        .navbar .nav-link.btn-primary {
            background: #24b33c;
            color: white !important;
        }

        .hero-logo {
            position: absolute;
            top: 50%;
            right: calc(50% - 35%);
            transform: translateY(-48%);
            max-width: 420px;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .hero-logo {
                display: none;
            }
        }

        .special-section {
            padding: 60px 0;
            background: #f8f9fa;
            text-align: center;
        }

        .special-section h2 {
            font-size: 36px;
            margin-bottom: 40px;
            color: #333;
        }

        .special-cards {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .special-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            max-width: 300px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .special-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .special-card p {
            font-size: 16px;
            color: #666;
        }

        .about-section {
            padding: 80px 0;
            background: #fff;
            text-align: center;
        }

        .about-section h2 {
            font-size: 48px;
            margin-bottom: 40px;
            color: #333;
        }

        .about-section p {
            font-size: 18px;
            max-width: 800px;
            margin: 0 auto;
            color: #666;
            line-height: 1.6;
        }

        footer {
            background: #24b33c;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            margin: 0;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }

        footer a {
            color: white;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand">UKMZone</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('ukm.index') }}">UKM</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('pengurus.index') }}">Kepengurusan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('recruitment.index') }}">Recruitment</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rekomendasi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('forum.index') }}">Diskusi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="hero-content">
                        <h1>Website <br><span>Informasi UKM</span> <br>Universitas Lambung Mangkurat</h1>
                        <p>Selamat Datang di Website kami. Disini anda dapat mengetahui informasi
                            tentang UKM <br>
                            (Unit Kegiatan Mahasiswa) yang ada di Universitas Lambung Mangkurat</p>
                        <div class="cta-buttons">
                            <a href="{{ route('ukm.index') }}" class="btn btn-primary">MASUK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/logo ulm.png') }}" alt="Universitas Lambung Mangkurat" class="hero-logo img-fluid">
    </div>

    <!-- About Section -->
    <div class="about-section" id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>Kami adalah platform yang memberikan informasi terkini tentang Unit Kegiatan Mahasiswa di Universitas
                Lambung Mangkurat. Tujuan kami adalah untuk membantu mahasiswa menemukan kegiatan yang sesuai dengan
                minat dan bakat mereka.</p>
        </div>
    </div>

    <!-- Special Section -->
    <div class="special-section">
        <div class="container">
            <h2>Why Is It Special?</h2>
            <div class="special-cards">
                <div class="special-card">
                    <h3>Inovasi dalam Presentasi Informasi</h3>
                    <p>Keunikan bisa juga terletak pada cara website tersebut menyajikan informasi. Penggunaan teknologi
                        modern, visualisasi data yang menarik, atau interaktivitas dalam konten dapat membuat pengalaman
                        belajar atau penjelajahan informasi menjadi lebih menarik..</p>
                </div>
                <div class="special-card">
                    <h3>Keandalan dan Kredibilitas</h3>
                    <p>Keandalan informasi yang disajikan oleh website merupakan aspek penting. Informasi yang
                        diverifikasi
                        dan berasal dari sumber terpercaya akan meningkatkan kredibilitasnya di mata pengguna.</ </p>
                </div>
                <div class="special-card">
                    <h3>Komunitas dan Interaksi</h3>
                    <p>Website memiliki fitur komunitas, forum diskusi, atau platform interaktif lainnya, ini dapat
                        menjadi keistimewaan tersendiri. Hal ini memungkinkan pengguna untuk berbagi pendapat,
                        berdiskusi, atau berinteraksi dengan sesama pengguna.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <p> 2024 UKMZone</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
