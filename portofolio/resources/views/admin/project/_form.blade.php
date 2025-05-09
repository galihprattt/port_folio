<div class="mb-3">
    <label for="name" class="form-label">Nama Project</label>
    <input type="text" class="form-control" name="name" value="{{ old('name', $project->name ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea class="form-control" name="description" rows="5">{{ old('description', $project->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="image" class="form-label">Gambar</label>
    <input type="file" class="form-control" name="image">
    @if(isset($project) && $project->image)
        <img src="{{ asset('storage/' . $project->image) }}" width="150" class="mt-2">
    @endif
</div>

<button class="btn btn-success">Simpan</button>
<a href="{{ route('admin.project.index') }}" class="btn btn-secondary">Batal</a>
