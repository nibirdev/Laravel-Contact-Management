@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Contact Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
            <p class="card-text"><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p class="card-text"><strong>Address:</strong> {{ $contact->address }}</p>
            <p class="card-text"><strong>Created At:</strong> {{ $contact->created_at->format('Y-m-d H:i:s') }}</p>
            <p class="card-text"><strong>Updated At:</strong> {{ $contact->updated_at->format('Y-m-d H:i:s') }}</p>

            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
            </form>

            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection