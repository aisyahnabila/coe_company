<?php

namespace App\Http\Controllers\Admin;

use App\Models\Partnership;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnerships = Partnership::all();
        return view('admin.partnerships.index', compact('partnerships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partnerships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->merge([
            'fund_amount' => str_replace('.', '', $request->fund_amount),
        ]);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:Submit,Aktif,Batal',
            'collaboration_type' => 'required|in:Dalam_Negeri,Luar_Negeri',
            'funder' => 'required|string',
            'schema' => 'required|string',
            'team' => 'required|string',
            'fund_amount' => 'required|integer',
            'fund_currency' => 'required|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $validated['user_id'] = Auth::id();

        // dd($validated);
        Partnership::create($validated);
        return redirect()->route('partnerships.index')->with('success', 'Partnership created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partnership = Partnership::findOrFail($id);
        return view('admin.partnerships.edit', compact('partnership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->merge([
            'fund_amount' => str_replace('.', '', $request->fund_amount),
        ]);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:Submit,Aktif,Batal',
            'collaboration_type' => 'required|in:Dalam_Negeri,Luar_Negeri',
            'funder' => 'required|string',
            'schema' => 'required|string',
            'team' => 'required|string',
            'fund_amount' => 'numeric|min:0',
            'fund_currency' => 'required|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $partnership = Partnership::findOrFail($id);
        $partnership->update($validated);
        return redirect()->route('partnerships.index')->with('success', 'Partnership updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Partnership::destroy($id);
        return redirect()->route('partnerships.index')->with('success', 'Parnership delete successfully
        !');
    }
}
