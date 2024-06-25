@extends('layout.app')

@section('title', 'Daftar Pengurus')

@section('content')
<div class="container">
    <h2>Daftar Pengurus</h2>
    @if(Auth::check() && Auth::user()->is_admin)
        <a href="{{ route('pengurus.create') }}" class="btn btn-primary mb-3">Tambah Pengurus</a>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        @foreach ($pengurus as $item)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ Storage::url($item->image_path) }}" class="card-img-top" alt="{{ $item->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->position }}</h5>
                    <p class="card-text">{{ $item->name }}</p>
                    <p class="card-text">Prodi: {{ $item->prodi }}</p>
                    <p class="card-text">Organisasi: {{ $item->ukm->name }}</p>
                    @if(Auth::check() && Auth::user()->is_admin)
                        <a href="{{ route('pengurus.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pengurus.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
