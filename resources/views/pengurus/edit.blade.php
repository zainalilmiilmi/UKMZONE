@extends('layout.app')

@section('title', 'Edit Pengurus')

@section('content')
<div class="container">
    <h2>Edit Pengurus</h2>
    <form action="{{ route('pengurus.update', $pengurus->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $pengurus->name }}" required>
        </div>

        <div class="form-group">
            <label for="prodi">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $pengurus->prodi }}" required>
        </div>

        <div class="form-group">
            <label for="position">Posisi</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $pengurus->position }}" required>
        </div>

        <div class="form-group">
            <label for="organization_id">Organisasi</label>
            <select class="form-control" id="organization_id" name="organization_id" required>
                @foreach($ukm as $ukmItem)
                    <option value="{{ $ukmItem->id }}" {{ $ukmItem->id == $pengurus->organization_id ? 'selected' : '' }}>{{ $ukmItem->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if($pengurus->image_path)
                <img src="{{ Storage::url($pengurus->image_path) }}" alt="{{ $pengurus->name }}" class="img-thumbnail mt-2" width="150">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
