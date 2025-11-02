@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-2xl font-semibold mb-1">General Settings</h1>
    <p class="text-gray-600 mb-6">Manage basic application information and branding.</p>

    @include('admin.settings._tabs')

    <div class="bg-white p-6 rounded-lg shadow">
        <p class="text-gray-500">General settings form will be added here.</p>
    </div>
</div>
@endsection
