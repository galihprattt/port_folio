<div class="mb-3">
    <label for="name" class="form-label">Nama Skill</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $skill->name ?? '') }}" required>
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="level" class="form-label">Level (%)</label>
    <input type="number" name="level" class="form-control" min="0" max="100" value="{{ old('level', $skill->level ?? '') }}" required>
    @error('level')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
