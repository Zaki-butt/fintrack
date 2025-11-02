@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create User</h1>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" class="border p-2 w-full" value="{{ old('name') }}">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" class="border p-2 w-full" value="{{ old('email') }}">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" class="border p-2 w-full">
        </div>

        <div>
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation" class="border p-2 w-full">
        </div>

        <div>
            <label>Role</label>
            <select name="role" class="border p-2 w-full">
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
    </form>
@endsection
