@extends('layouts.app')

@section('content')
<div>
    <h1 class="text-2xl font-semibold mb-1">Finance Settings</h1>
    <p class="text-gray-600 mb-6">Configure currency, tax, late fee, billing rules.</p>

    @include('admin.settings._tabs')

    <div class="bg-white p-6 rounded-lg shadow">
        <p class="text-gray-500">Finance settings form will be added here.</p>
    </div>
</div>
@endsection
