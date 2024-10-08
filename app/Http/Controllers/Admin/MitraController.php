<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mitra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    //
    public function index()
    {
        $mitras = Mitra::all(); //

        return view('admin.mitra.index', compact('mitras'));
    }
    public function create()
    {

        return view('admin.mitra.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'partner_name' => 'required|string|max:255',
            'logo_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'website_url' => 'required|url',
            'user_id' => 'required|exists:users,id', // Validate user_id
        ]);

        // Handle file upload
        if ($request->hasFile('logo_img')) {
            $logoPath = $request->file('logo_img')->store('logos', 'public');
        }

        Mitra::create([
            'user_id' => $request->user_id,
            'partner_name' => $request->partner_name,
            'logo_img' => $logoPath ?? null,
            'website_url' => $request->website_url,
        ]);

        return redirect()->route('mitra.index')->with('success', 'Mitra created successfully.');
    }
    public function edit($id)
    {
        $mitra = Mitra::findOrFail($id);
        return view('admin.mitra.edit', compact('mitra'));
    }

    // Update the partnership
    public function update(Request $request, $id)
    {
        $request->validate([
            'partner_name' => 'required|string|max:255',
            'logo_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as needed
            'website_url' => 'required|url',
        ]);

        $mitra = Mitra::findOrFail($id);
        $mitra->partner_name = $request->input('partner_name');

        // Check if a new logo image is uploaded
        if ($request->hasFile('logo_img')) {
            // Delete old logo if it exists
            if ($mitra->logo_img) {
                Storage::delete($mitra->logo_img);
            }
            // Store the new logo
            $mitra->logo_img = $request->file('logo_img')->store('logos', 'public');
        }

        $mitra->website_url = $request->input('website_url');
        $mitra->save();

        return redirect()->route('mitra.index')->with('success', 'Partnership updated successfully.');
    }

    public function destroy($id)
    {
        $destroy = Mitra::findOrFail($id);
        $destroy->delete();
        return redirect()->route('mitra.index')->with('success', 'Article deleted successfully.');
    }
}
