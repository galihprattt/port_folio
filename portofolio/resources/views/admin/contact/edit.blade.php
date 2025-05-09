@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Contact Section</h1>

    <form action="{{ route('admin.contact.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ $contact->address }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $contact->email }}">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
