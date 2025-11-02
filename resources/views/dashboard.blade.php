@extends('layouts.app')

@section('content')

    {{-- Admin Dashboard --}}
    @role('admin')
        <h1 class="text-2xl font-semibold mb-6">Admin Dashboard</h1>
        @include('admin.components.cards')
        @include('admin.components.charts')
        @include('admin.components.transactions')
    @endrole

    {{-- User Dashboard --}}
    @role('user')
        <div class="bg-white p-6 rounded-lg shadow">
            <h1 class="text-2xl font-bold mb-3">User Dashboard</h1>
            <p class="text-gray-600">Welcome to your user dashboard.</p>
        </div>
    @endrole

@endsection
