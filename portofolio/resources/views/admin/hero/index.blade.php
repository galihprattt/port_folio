@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Hero Section</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $hero->name ?? '-' }}</td>
        </tr>
        <tr>
            <th>Headline</th>
            <td>{{ $hero->headline ?? '-' }}</td>
        </tr>
        <tr>
            <th>Subheadline</th>
            <td>{{ $hero->subheadline ?? '-' }}</td>
        </tr>
        <tr>
            <th>Background Image</th>
            <td>
                @if($hero->background_image)
                    <img src="{{ $hero->background_image }}" alt="Background" style="max-width: 300px;">
                @else
                    -
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ route('admin.hero.edit') }}" class="btn btn-warning">Edit Hero</a>
</div>
@endsection
