{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            text-align: left;
            padding: 1rem;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .main {
            display: flex;
            flex: 1;
            height: calc(100vh - 144px);
        }
        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 1rem;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            overflow-y: auto;
        }
        .content {
            flex: 1;
            padding: 1rem;
        }
        .navbar-1 {
            color: black;
        }
        .sidebar a {
            display: block;
            color: #000;
            padding: 10px 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar-nav {
            padding-left: 190px;
        }
        .card-img-top {
            width: 100%;
            height: 600px;
        }
        .card-title {
            text-align: center;
        }
        .card-body {
            text-align: center;
        }
        .card {
            height: 100%;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>UKMZone</h1>
    </div>
    <div class="navbar-1">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ukm.index') }}">UKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengurus.index') }}">Kepengurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('recruitment.index') }}">Recruitment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rekomendasi.index') }}">Rekomendasi UKM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('forum.index') }}">Forum Diskusi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('login.logout') }}">Log Out</a>
                        </li>
                </div>
            </div>
        </nav>
    </div>
    <div class="main">
        <div class="sidebar">
            <a href="{{ route('ukm.show', ['id' => 1]) }}">LDK UKMM</a>
            <a href="{{ route('ukm.dpm', ['id' => 2]) }}">DPM ULM</a>
            <a href="{{ route('ukm.show', ['id' => 3]) }}">BEM ULM</a>
            <a href="#">KOPMA ULM</a>
            <a href="#">LPM KINDAY</a>
            <a href="#">PSHT ULM</a>
            <a href="#">BATAKO MERPATI PUTIH</a>
            <a href="#">PP FIM ULM</a>
            <a href="#">LA2M ULM</a>
            <a href="#">KSB ULM</a>
        </div>
        <!-- Tampilan Content -->
        <div class="content">
            <h2>RECRUITMENT</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">Batako Merpati Putih</h3>
                            <img src="images/merpati_putih.jpg" class="card-img-top" alt="Batako Merpati Putih">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLScP2xa-Lm-Jryb5RAuZ_-I350Kh5qVaPnwpts0p9DumXuBQHA/viewform'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">KSB ULM</h3>
                            <img src="images/ksb.jpg" class="card-img-top" alt="KSB ULM">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSfEeNk5orNJQtkMxis7J6l6iUZCQ5HAwvjDIenRO6xn7-vVrA/viewform'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">LDK UKMM</h3>
                            <img src="images/ldk.jpg" class="card-img-top" alt="LDK UKMM">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSc4Xfc6ccSlM58fggfPf4ZFhPhkYBzkBT4RWFUk7HMr-q1teQ/closedform'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">KOPMA ULM</h3>
                            <img src="images/kopma.jpeg" class="card-img-top" alt="KOPMA ULM">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href=''">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">KSR ULM</h3>
                            <img src="images/ksr.jpg" class="card-img-top" alt="KSR ULM">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLScPRCIULlmbKHJEkXtj3Vxyj_K_ZON8l9r18Tng77b83sFlSw/viewform'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">LA2M ULM</h3>
                            <img src="images/la2m.jpg" class="card-img-top" alt="LA2M ULM">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSccfFsJOVBgS0F3zKKNsMRqt1oUpo3ioPrckbzr_b-kuRccrA/viewform'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">PSHT ULM</h3>
                            <img src="images/psht.jpg" class="card-img-top" alt="PSHT ULM">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href='#'">Daftar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card">
                            <h3 class="card-title">MENWA ULM</h3>
                            <img src="images/menwa.jpg" class="card-img-top" alt="MENWA ULM">
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLScnvRFgYqRRkskcWtneLq3PapSyePH9J0AgsxdmWxRG9wfIAg/viewform'">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> --}}
