<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view own expense')->only(['index', 'show']);
        $this->middleware('permission:create own expense')->only(['create', 'store']);
        $this->middleware('permission:edit own expense')->only(['edit', 'update']);
        $this->middleware('permission:delete own expense')->only(['destroy']);
    }

    public function index()
    {
        $expenses = Expense::where('user_id', Auth::id())->latest()->paginate(10);
        return view('users.expense.index', compact('expenses'));
    }

    public function create()
    {
        return view('users.expense.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string|max:500',
        ]);

        $validated['user_id'] = Auth::id();

        Expense::create($validated);

        return redirect()->route('expense.index')->with('success', 'Expense added successfully.');
    }

    public function show($id)
    {
        $expense = Expense::where('user_id', Auth::id())->findOrFail($id);
        return view('users.expense.show', compact('expense'));
    }

    public function edit($id)
    {
        $expense = Expense::where('user_id', Auth::id())->findOrFail($id);
        return view('users.expense.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {
        $expense = Expense::where('user_id', Auth::id())->findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string|max:500',
        ]);

        $expense->update($validated);

        return redirect()->route('expense.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy($id)
    {
        $expense = Expense::where('user_id', Auth::id())->findOrFail($id);
        $expense->delete();

        return redirect()->route('expense.index')->with('success', 'Expense deleted successfully.');
    }
}
