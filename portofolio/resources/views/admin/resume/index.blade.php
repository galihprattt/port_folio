@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Daftar Resume</h2>

    <a href="{{ route('admin.resume.create') }}" class="btn btn-success mb-3">+ Tambah Resume</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Type</th>
                <th>Title</th>
                <th>Year</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resumes as $resume)
                <tr>
                    <td>{{ $resume->type }}</td>
                    <td>{{ $resume->title }}</td>
                    <td>{{ $resume->year }}</td>
                    <td>
                        <a href="{{ route('admin.resume.edit', $resume->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('admin.resume.destroy', $resume->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
