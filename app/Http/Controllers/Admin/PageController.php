<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $about = Page::findOrFail(1);
        return view('admin.page.index', compact('about'));
    }
    public function update(Request $request, $id)
    {
        $about = Page::findOrFail(1);

        $request->validate([
            'about' => 'required|string',
        ]);

        $about->update([
            'about' => $request->about,
        ]);

        return redirect()->back()->with('success', 'About page updated successfully!');
    }
}
