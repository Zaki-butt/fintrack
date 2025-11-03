@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">

    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-3xl font-extrabold text-gray-800">My Financial Overview</h1>
        <p class="text-gray-500 mt-2">Track your income, expenses, and balance in one place.</p>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Net Balance -->
        <div class="border border-gray-200 shadow-sm hover:shadow-md transition-shadow rounded-xl p-5 bg-white">
            <div class="flex items-center justify-between pb-2">
                <p class="text-gray-600 font-medium">Net Balance</p>
                <div class="p-2 rounded-lg bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 14v1a2 2 0 01-2 2H5a2 2 0 01-2-2V9a2 2 0 012-2h10a2 2 0 012 2v1m0 0h2a2 2 0 012 2v0a2 2 0 01-2 2h-2m0-4v4" />
                    </svg>
                </div>
            </div>
            <p class="text-[#1E293B] font-semibold text-xl">
                PKR {{ number_format($netBalance, 2) }}
            </p>
            <p class="{{ $netBalance >= 0 ? 'text-green-600' : 'text-red-600' }} mt-1 text-sm">
                {{ $netBalance >= 0 ? '+ Positive Balance' : '- Negative Balance' }}
            </p>
        </div>

        <!-- Total Income -->
        <div class="border border-gray-200 shadow-sm hover:shadow-md transition-shadow rounded-xl p-5 bg-white">
            <div class="flex items-center justify-between pb-2">
                <p class="text-gray-600 font-medium">Total Income</p>
                <div class="p-2 rounded-lg bg-green-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-9 9-4-4-6 6" />
                    </svg>
                </div>
            </div>
            <p class="text-[#1E293B] font-semibold text-xl">
                PKR {{ number_format($totalIncome, 2) }}
            </p>
            <p class="text-green-600 mt-1 text-sm">Total earnings recorded</p>
        </div>

        <!-- Total Expense -->
        <div class="border border-gray-200 shadow-sm hover:shadow-md transition-shadow rounded-xl p-5 bg-white">
            <div class="flex items-center justify-between pb-2">
                <p class="text-gray-600 font-medium">Total Expense</p>
                <div class="p-2 rounded-lg bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 17h8m0 0v-8m0 8l-9-9-4 4-6-6" />
                    </svg>
                </div>
            </div>
            <p class="text-[#1E293B] font-semibold text-xl">
                PKR {{ number_format($totalExpense, 2) }}
            </p>
            <p class="text-red-600 mt-1 text-sm">Total spending recorded</p>
        </div>

        <!-- This Month -->
        <div class="border border-gray-200 shadow-sm hover:shadow-md transition-shadow rounded-xl p-5 bg-white">
            <div class="flex items-center justify-between pb-2">
                <p class="text-gray-600 font-medium">This Month</p>
                <div class="p-2 rounded-lg bg-yellow-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v8m0 0H8m4 0h4m-4-8v8m0 0h8m-8 0H4" />
                    </svg>
                </div>
            </div>
            <p class="text-gray-800 text-sm">Income: 
                <span class="font-semibold text-green-600">
                    PKR {{ number_format($currentMonthIncome, 2) }}
                </span>
            </p>
            <p class="text-gray-800 text-sm">Expense: 
                <span class="font-semibold text-red-600">
                    PKR {{ number_format($currentMonthExpense, 2) }}
                </span>
            </p>
        </div>
    </div>

    <!-- Divider -->
    <div class="border-t border-gray-200 my-10"></div>

    <!-- Recent Transactions -->
    <div>
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Transactions</h2>
        <div class="bg-white border border-gray-100 shadow rounded-2xl overflow-hidden">
            <table class="w-full text-sm text-gray-700">
                <thead class="bg-gray-50 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 text-left">Type</th>
                        <th class="px-6 py-3 text-left">Title</th>
                        <th class="px-6 py-3 text-left">Amount (PKR)</th>
                        <th class="px-6 py-3 text-left">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recentTransactions ?? [] as $transaction)
                        <tr class="border-t hover:bg-gray-50">
                            <td class="px-6 py-3">
                                <span class="font-semibold {{ $transaction->type === 'income' ? 'text-green-600' : 'text-red-600' }}">
                                    {{ ucfirst($transaction->type) }}
                                </span>
                            </td>
                            <td class="px-6 py-3">{{ $transaction->title }}</td>
                            <td class="px-6 py-3">{{ number_format($transaction->amount, 2) }}</td>
                            <td class="px-6 py-3">{{ \Carbon\Carbon::parse($transaction->date)->format('d M, Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-5 text-gray-500">No transactions found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
