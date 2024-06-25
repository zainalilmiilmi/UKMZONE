@extends('layout.app')

@section('title', 'Tambah Pengurus')

@section('content')
<div class="container">
    <h2>Tambah Pengurus</h2>
    <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="position" name="position" required>
        </div>
        <div class="mb-3">
            <label for="organization_id" class="form-label">Organisasi</label>
            <select class="form-control" id="organization_id" name="organization_id" required>
                @foreach($ukm as $ukms)
                    <option value="{{ $ukms->id }}">{{ $ukms->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Foto</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
