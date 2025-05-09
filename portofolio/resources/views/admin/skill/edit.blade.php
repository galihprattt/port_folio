@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Skill</h1>
    <form action="{{ route('admin.skill.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" value="{{ $skill->name }}" required>
        </div>
        <div class="form-group">
            <label>Level (%)</label>
            <input type="number" name="level" class="form-control" value="{{ $skill->level }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>
</div>
@endsection
