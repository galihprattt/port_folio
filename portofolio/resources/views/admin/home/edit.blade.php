@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Home Section</h1>

    <form action="{{ route('admin.home.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $home->title }}">
        </div>
        <div class="mb-3">
            <label>Subtitle</label>
            <input type="text" name="subtitle" class="form-control" value="{{ $home->subtitle }}">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
