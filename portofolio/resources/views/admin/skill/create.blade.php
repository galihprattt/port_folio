@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Tambah Skill</h1>

    <form action="{{ route('admin.skill.store') }}" method="POST">
        @csrf
        @include('admin.skill._form')
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
