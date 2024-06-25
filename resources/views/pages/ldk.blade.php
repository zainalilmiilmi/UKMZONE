<!-- resources/views/ukm/show.blade.php -->

@extends('layout.app')

@section('title', 'Detail UKM')

@section('content')
<style>
    .container {
        background-color: #f0f0f0; /* Warna background yang diinginkan */
        padding: 20px; /* Padding untuk ruang putih di sekitar konten */
        text-align: center; /* Meratakan konten ke tengah */
    }

    .ukm-details {
        max-width: 600px; /* Lebar maksimum konten */
        margin: 0 auto; /* Mengatur margin untuk meratakan konten di tengah */
        background-color: rgb(9, 165, 77); /* Warna background konten */
        padding: 20px; /* Padding dalam konten */
        border-radius: 8px; /* Membuat sudut kotak konten menjadi melengkung */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan untuk memberikan kedalaman */
    }

    .ukm-details img {
        max-width: 300px; /* Gambar tidak melebihi lebar kontainer */
        height: auto; /* Tetap menjaga rasio aspek */
        margin-bottom: 15px; /* Margin bawah untuk gambar */
    }
</style>
    <div class="container">
        @php
            $ukms = null;
            foreach ($ukm as $u) {
                if ($u->id == 1) {
                    $ukms = $u;
                    break;
                }
            }
        @endphp

        <div class="container">
            @if($ukms)
                <h2>{{ $ukms->name }}</h2>
                <p>{{ $ukms->description }}</p>
                <h2>VISI</h2>
                <p>{{ $ukms->visi }}</p>
                <h2>MISI</h2>
                <p>{{ $ukms->misi }}</p>
                <h2>Kegiatan</h2>
                <img src="{{ asset('logo/' . $ukms->image_kegiatan) }}" alt="{{ $ukms->name }}" style="max-width: 300px; height: auto;">
                <p>{{ $ukms->kegiatan }}</p>
            @endif
        </div>
    </div>
@endsection
