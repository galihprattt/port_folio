@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Contact Section</h2>

    @if($contact)
        <p><strong>Address:</strong> {{ $contact->address }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
    @else
        <p>No contact information available. Please add it from the admin panel.</p>
    @endif

    <a href="{{ route('admin.contact.edit') }}" class="btn btn-primary mt-3">Edit</a>
</div>
@endsection
