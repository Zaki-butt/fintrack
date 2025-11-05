@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto space-y-6">

    {{-- ✅ Update Profile Information --}}
    <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Profile Information</h2>
        @include('profile.partials.update-profile-information-form')
    </div>

    {{-- ✅ Update Password --}}
    <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Update Password</h2>
        @include('profile.partials.update-password-form')
    </div>

    {{-- ✅ Delete User --}}
    <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h2 class="text-xl font-semibold mb-4 text-red-600">Delete Account</h2>
        @include('profile.partials.delete-user-form')
    </div>

</div>

@endsection
