@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>About Section</h2>
    <p><strong>Title:</strong> {{ $about->title }}</p>
    <p><strong>Description:</strong> {{ $about->description }}</p>

    @if($about->profile_image)
    <img src="{{ asset('storage/' . $about->profile_image) }}" alt="Profile Image" width="150">
    @endif


    <br>
    <a href="{{ route('admin.about.edit') }}" class="btn btn-primary mt-3">Edit</a>
</div>
@endsection
