@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Resume</h1>

    <form action="{{ route('admin.resume.update', $resume->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.resume._form', ['resume' => $resume])
    </form>
</div>
@endsection
