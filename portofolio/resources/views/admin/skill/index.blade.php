@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar Skill</h1>

    <a href="{{ route('admin.skill.create') }}" class="btn btn-success mb-3">+ Tambah Skill</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Level (%)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
                <tr>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->level }}</td>
                    <td>
                        <a href="{{ route('admin.skill.edit', $skill->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('admin.skill.destroy', $skill->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
