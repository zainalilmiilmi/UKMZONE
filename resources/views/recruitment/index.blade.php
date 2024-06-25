@extends('layout.app')

@section('title', 'Recruitment')

@section('content')
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
            <div class="col-md-6 mb-3
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
        height: 800px;

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
@endsection
