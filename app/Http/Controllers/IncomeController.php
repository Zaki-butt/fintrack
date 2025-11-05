<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view own income')->only(['index', 'show']);
        $this->middleware('permission:create own income')->only(['create', 'store']);
        $this->middleware('permission:edit own income')->only(['edit', 'update']);
        $this->middleware('permission:delete own income')->only(['destroy']);
    }

    /**
     * Display a listing of the user's incomes.
     */
    public function index()
    {
        $incomes = Income::where('user_id', Auth::id())
            ->latest()
            ->paginate(10);

        return view('users.income.index', compact('incomes'));
    }

    /**
     * Display the specified income record.
     */
    public function show($id)
    {
        // ✅ Only fetch the logged-in user’s income record
        $income = Income::where('user_id', Auth::id())->findOrFail($id);

        return view('users.income.show', compact('income'));
    }


    /**
     * Show the form for creating a new income.
     */
    public function create()
    {
        return view('users.income.create');
    }

    /**
     * Store a newly created income in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string|max:500',
        ]);

        $validated['user_id'] = Auth::id();

        Income::create($validated);

        return redirect()->route('user.income.index')->with('success', 'Income record added successfully.');
    }

    /**
     * Show the form for editing the specified income.
     */
    public function edit($id)
    {
        $income = Income::where('user_id', Auth::id())->findOrFail($id);
        return view('users.income.edit', compact('income'));
    }

    /**
     * Update the specified income in storage.
     */
    public function update(Request $request, $id)
    {
        $income = Income::where('user_id', Auth::id())->findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            'description' => 'nullable|string|max:500',
        ]);

        $income->update($validated);

        return redirect()->route('user.income.index')->with('success', 'Income updated successfully.');
    }

    /**
     * Remove the specified income from storage.
     */
    public function destroy($id)
    {
        $income = Income::where('user_id', Auth::id())->findOrFail($id);
        $income->delete();

        return redirect()->route('user.income.index')->with('success', 'Income deleted successfully.');
    }
}
