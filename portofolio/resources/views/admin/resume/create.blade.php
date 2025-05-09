@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Resume</h1>

    <form action="{{ route('admin.resume.store') }}" method="POST">
        @csrf
        @include('admin.resume._form', ['resume' => new \App\Models\Resume])
    </form>
</div>
@endsection
