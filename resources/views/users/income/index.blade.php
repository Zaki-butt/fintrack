@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Income Records</h1>

    <a href="{{ route('income.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        Add New Income
    </a>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">ID</th>
                <th class="border p-2">Amount</th>
                <th class="border p-2">Date</th>
                <th class="border p-2">Created By</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($incomes as $income)
                <tr>
                    <td class="border p-2">{{ $income->id }}</td>
                    <td class="border p-2">${{ number_format($income->amount, 2) }}</td>
                    <td class="border p-2">{{ $income->date }}</td>
                    <td class="border p-2">{{ $income->user->name ?? 'N/A' }}</td>
                    <td class="border p-2 space-x-2">
                        <a href="{{ route('income.show', $income->id) }}" class="text-blue-500">View</a>
                        <a href="{{ route('income.edit', $income->id) }}" class="text-yellow-500">Edit</a>
                        <form action="{{ route('income.destroy', $income->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="border p-4 text-center text-gray-500">No income records found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">
        {{ $incomes->links() }}
    </div>
@endsection
