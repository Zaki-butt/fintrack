@extends('layouts.backend')

@section('content')
    <h1 class="text-2xl font-bold mb-4">User Details</h1>

    <div class="border p-4 rounded">
        <p><strong>ID:</strong> {{ $user->id }}</p>
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ $user->role }}</p>
    </div>

    <a href="{{ route('admin.users.index') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">
        Back to Users
    </a>
@endsection
