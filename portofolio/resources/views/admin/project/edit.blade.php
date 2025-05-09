@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Project</h1>

    <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Judul Project</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Link Project (opsional)</label>
            <input type="text" name="link" class="form-control" value="{{ $project->link }}">
        </div>

        <div class="mb-3">
            <label>Gambar Sekarang</label><br>
            @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" width="120">
            @endif
        </div>

        <div class="mb-3">
            <label>Ganti Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
