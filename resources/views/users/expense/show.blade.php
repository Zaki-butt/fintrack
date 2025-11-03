@extends('layouts.app')

@section('title', 'Expense Details')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Expense Details</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
            <div>
                <h3 class="text-sm text-gray-500 uppercase font-semibold">Title</h3>
                <p class="text-lg font-medium text-gray-900">{{ $expense->title }}</p>
            </div>

            <div>
                <h3 class="text-sm text-gray-500 uppercase font-semibold">Amount</h3>
                <p class="text-lg font-medium text-gray-900">${{ number_format($expense->amount, 2) }}</p>
            </div>

            <div>
                <h3 class="text-sm text-gray-500 uppercase font-semibold">Date</h3>
                <p class="text-lg font-medium text-gray-900">{{ \Carbon\Carbon::parse($expense->date)->format('d M, Y') }}</p>
            </div>

            <div>
                <h3 class="text-sm text-gray-500 uppercase font-semibold">Created By</h3>
                <p class="text-lg font-medium text-gray-900">{{ $expense->user->name ?? 'N/A' }}</p>
            </div>
        </div>

        <div>
            <h3 class="text-sm text-gray-500 uppercase font-semibold mb-1">Description</h3>
            <p class="text-gray-800 leading-relaxed">
                {{ $expense->description ?: 'No description provided.' }}
            </p>
        </div>

        <div class="mt-6 flex space-x-3">
            @can('edit own expense')
                @if (auth()->user()->id === $expense->user_id || auth()->user()->hasRole('admin'))
                    <a href="{{ route('expenses.edit', $expense->id) }}"
                       class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Edit
                    </a>
                @endif
            @endcan

            @can('delete own expense')
                @if (auth()->user()->id === $expense->user_id || auth()->user()->hasRole('admin'))
                    <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST"
                          onsubmit="return confirm('Are you sure you want to delete this expense?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                @endif
            @endcan

            <a href="{{ route('expenses.index') }}"
               class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                Back
            </a>
        </div>
    </div>
@endsection
