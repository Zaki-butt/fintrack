@extends('layouts.app')

@section('title', 'Edit Expense')

@section('content')
<div class="container mt-4">
    <h3>Edit Expense</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('expenses.update', $expense->id) }}" method="POST">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" value="{{ old('title', $expense->title) }}" class="form-control" required>
                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Amount</label>
                    <input type="number" name="amount" step="0.01" value="{{ old('amount', $expense->amount) }}" class="form-control" required>
                    @error('amount') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" name="date" value="{{ old('date', $expense->date->format('Y-m-d')) }}" class="form-control" required>
                    @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description', $expense->description) }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update Expense</button>
                <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
