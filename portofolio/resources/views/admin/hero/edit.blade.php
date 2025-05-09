@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Hero Section</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('admin.hero.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $hero->name ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label>Headline</label>
            <input type="text" name="headline" class="form-control" value="{{ $hero->headline ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label>Subheadline</label>
            <input type="text" name="subheadline" class="form-control" value="{{ $hero->subheadline ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label>Background Image (URL)</label>
            <input type="text" name="background_image" class="form-control" value="{{ $hero->background_image ?? '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
