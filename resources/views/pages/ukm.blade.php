<!-- resources/views/pages/ukm.blade.php -->

@extends('layout.app')

@section('title', 'UKM ULM')

@section('content')

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
        height: calc(100vh - 144px); /* Adjust height based on header and navbar */
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

    {{-- @php dd($ukm); @endphp --}}
    <h2>UKM-UKM ULM</h2>
    <div class="container">
        <div class="row">
            @foreach($ukm as $ukms)
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="{{ asset('logo') }}/{{ $ukms->image_path }}" class="card-img-top" alt="{{ $ukms->name }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $ukms->name }}</h5>
                            <p class="card-text">{{ $ukms->description }}</p>
                            {{-- <a href="#" class="btn btn-primary mt-auto">View Details</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
