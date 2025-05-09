@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit About Section</h1>

    <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $about->description }}</textarea>
        </div>

        {{-- Gambar sekarang --}}
        @if($about->profile_image)
        <div class="mb-3">
            <label>Gambar Sekarang</label><br>
            <img src="{{ asset('storage/' . $about->profile_image) }}" width="120">
        </div>
        @endif


        {{-- Upload gambar baru --}}
        <div class="mb-3">
            <label>Ganti Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>

        {{-- Data lainnya --}}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Birthday</label>
                <input type="text" name="birthday" class="form-control" value="{{ $about->birthday }}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Website</label>
                <input type="text" name="website" class="form-control" value="{{ $about->website }}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ $about->phone }}">
            </div>
            <div class="col-md-6 mb-3">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="{{ $about->city }}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Age</label>
                <input type="text" name="age" class="form-control" value="{{ $about->age }}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Degree</label>
                <input type="text" name="degree" class="form-control" value="{{ $about->degree }}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $about->email }}">
            </div>
            <div class="col-md-6 mb-3">
                <label>Freelance</label>
                <input type="text" name="freelance" class="form-control" value="{{ $about->freelance }}">
            </div>
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
