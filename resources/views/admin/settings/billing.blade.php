@extends('layouts.backend')

@section('content')
<div>
    <h1 class="text-2xl font-semibold mb-1">Billing Settings</h1>
    <p class="text-gray-600 mb-6">Manage invoice settings, grace periods and auto-billing.</p>

    @include('admin.settings._tabs')

    <div class="bg-white p-6 rounded-lg shadow">
        <p class="text-gray-500">Billing settings form will be added here.</p>
    </div>
</div>
@endsection
