@extends('layouts.app')

@section('title', 'Expense Details')

@section('content')
<div class="container mt-4">
    <h3>Expense Details</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5>{{ $expense->title }}</h5>
            <p><strong>Amount:</strong> ${{ number_format($expense->amount, 2) }}</p>
            <p><strong>Date:</strong> {{ $expense->date->format('d M, Y') }}</p>
            <p><strong>Description:</strong> {{ $expense->description ?: 'No description provided' }}</p>
            <p><strong>Created By:</strong> {{ $expense->user->name ?? 'N/A' }}</p>

            <a href="{{ route('expenses.index') }}" class="btn btn-secondary mt-3">Back to List</a>
        </div>
    </div>
</div>
@endsection
