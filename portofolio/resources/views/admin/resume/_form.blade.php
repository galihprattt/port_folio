<div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <select name="type" id="type" class="form-control" required>
        <option value="education" {{ old('type', $resume->type) == 'education' ? 'selected' : '' }}>Education</option>
        <option value="experience" {{ old('type', $resume->type) == 'experience' ? 'selected' : '' }}>Experience</option>
    </select>
</div>

<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $resume->title) }}" required>
</div>

<div class="mb-3">
    <label for="sub_title" class="form-label">Sub Title</label>
    <input type="text" name="sub_title" id="sub_title" class="form-control" value="{{ old('sub_title', $resume->sub_title) }}">
</div>

<div class="mb-3">
    <label for="year" class="form-label">Year</label>
    <input type="text" name="year" id="year" class="form-control" value="{{ old('year', $resume->year) }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $resume->description) }}</textarea>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('admin.resume.index') }}" class="btn btn-secondary">Kembali</a>
