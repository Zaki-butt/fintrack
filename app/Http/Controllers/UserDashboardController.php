<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller {
    public function index() {
        $userId = auth()->id();

        // Total income
        $totalIncome = \App\Models\Income::where( 'user_id', $userId )->sum( 'amount' );

        // Total expense
        $totalExpense = \App\Models\Expense::where( 'user_id', $userId )->sum( 'amount' );

        // Current month stats
        $currentMonthIncome = \App\Models\Income::where( 'user_id', $userId )
        ->whereMonth( 'date', now()->month )
        ->sum( 'amount' );

        $currentMonthExpense = \App\Models\Expense::where( 'user_id', $userId )
        ->whereMonth( 'date', now()->month )
        ->sum( 'amount' );

        // Net balance
        $netBalance = $totalIncome - $totalExpense;

        return view( 'users.dashboard', compact(
            'totalIncome',
            'totalExpense',
            'netBalance',
            'currentMonthIncome',
            'currentMonthExpense'
        ) );
    }

}
