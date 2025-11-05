@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Expense</h1>

    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('user.expenses.update', $expense->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div>
                <label class="block font-semibold mb-1">Title</label>
                <input type="text" name="title" value="{{ old('title', $expense->title) }}"
                       class="w-full border border-gray-300 rounded p-2 focus:ring focus:ring-blue-200" required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Amount -->
            <div>
                <label class="block font-semibold mb-1">Amount</label>
                <input type="number" name="amount" step="0.01" value="{{ old('amount', $expense->amount) }}"
                       class="w-full border border-gray-300 rounded p-2 focus:ring focus:ring-blue-200" required>
                @error('amount')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Date -->
            <div>
                <label class="block font-semibold mb-1">Date</label>
                <input type="date" name="date" 
                       value="{{ old('date', \Carbon\Carbon::parse($expense->date)->format('Y-m-d')) }}"
                       class="w-full border border-gray-300 rounded p-2 focus:ring focus:ring-blue-200" required>
                @error('date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Optional Category -->
            <div>
                <label class="block font-semibold mb-1">Category (Optional)</label>
                <input type="text" name="category" value="{{ old('category', $expense->category ?? '') }}"
                       class="w-full border border-gray-300 rounded p-2 focus:ring focus:ring-blue-200">
            </div>

            <!-- Description -->
            <div>
                <label class="block font-semibold mb-1">Description</label>
                <textarea name="description" rows="3"
                          class="w-full border border-gray-300 rounded p-2 focus:ring focus:ring-blue-200">{{ old('description', $expense->description) }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="flex space-x-3">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                    Update Expense
                </button>
                <a href="{{ route('user.expenses.index') }}"
                   class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
