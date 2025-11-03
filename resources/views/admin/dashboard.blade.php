@extends('layouts.app')

@section('content')

    {{-- Admin Dashboard --}}
    @role('admin')
        <h1 class="text-2xl font-semibold mb-6">Admin Dashboard</h1>
        @include('admin.components.cards')
        @include('admin.components.charts')
        @include('admin.components.transactions')
    @endrole


@endsection
