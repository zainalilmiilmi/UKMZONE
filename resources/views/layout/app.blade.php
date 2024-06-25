<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title', 'UKM')</title>
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
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li> --}}
                    </ul>
                    {{-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> --}}
                    @auth
                        @if(auth()->user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login.logout') }}">Log Out</a>
                            </li>
                        @endif
                    @endauth
                </div>
            </div>
        </nav>
    </div>
    <div class="main">
        <div class="sidebar">
            <a href="{{ route('ukm.ldk', ['id' => 1]) }}">LDK UKMM</a>
            <a href="{{ route('ukm.dpm', ['id' => 2]) }}">DPM ULM</a>
            <a href="{{ route('ukm.bem', ['id' => 3]) }}">BEM ULM</a>
            <a href="{{ route('ukm.kopma', ['id' => 4]) }}">KOPMA ULM</a>
            <a href="{{ route('ukm.lpm', ['id' => 5]) }}">LPM KINDAY</a>
            <a href="{{ route('ukm.psht', ['id' => 6]) }}">PSHT ULM</a>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
