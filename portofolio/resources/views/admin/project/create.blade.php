@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Project</h1>

    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Judul Project</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Link (opsional)</label>
            <input type="text" name="link" class="form-control">
        </div>

        <div class="mb-3">
            <label>Upload Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
