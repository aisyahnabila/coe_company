<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use App\Models\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{
    //
    public function index()
    {
        $staffs = Staff::all(); //
        return view('admin.staff.index', compact('staffs'));
    }
    public function create()
    {
        $positions = Position::all();
        return view('admin.staff.create', compact('positions'));
    }
    public function store(Request $request)
    {
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position_id' => 'required|exists:position_category,id',
            'email' => 'required|email|max:255|unique:staff,email',
            'bio' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'education.*.degree' => 'nullable|string|max:255',
            'education.*.major' => 'nullable|string|max:255',
            'education.*.institution' => 'nullable|string|max:255',
            'media.*.platform' => 'nullable|string|max:255',
            'media.*.url' => 'nullable|url|max:255',
            'research.*.research_field' => 'nullable|string|max:255',
            'research.*.description' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Store the photo
        $photoPath = $request->file('photo')->store('staff_photos', 'public');

        // Create staff member
        $staff = Staff::create([
            'name' => $request->name,
            'position_id' => $request->position_id,
            'email' => $request->email,
            'bio' => $request->bio,
            'photo' => $photoPath,
        ]);

        // Save education, media, and research data
        if ($request->has('education')) {
            foreach ($request->education as $education) {
                if (!empty($education['degree']) || !empty($education['major']) || !empty($education['institution'])) {
                    $staff->education()->create($education); // Assuming you have a relationship set up
                }
            }
        }

        if ($request->has('media')) {
            foreach ($request->media as $media) {
                if (!empty($media['platform']) || !empty($media['url'])) {
                    $staff->media()->create($media); // Assuming you have a relationship set up
                }
            }
        }

        if ($request->has('research')) {
            foreach ($request->research as $research) {
                if (!empty($research['research_field']) || !empty($research['description'])) {
                    $staff->research()->create($research); // Assuming you have a relationship set up
                }
            }
        }

        // Redirect or return response
        return redirect()->route('staff.index')->with('success', 'Staff member created successfully.');
    }
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        $positions = Position::all();
        return view('admin.staff.edit', compact('staff','positions' ));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position_id' => 'required|exists:position_category,id',
            'email' => 'required|email|max:255|unique:staff,email,' . $id,
            'bio' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'education.*.degree' => 'nullable|string|max:255',
            'education.*.major' => 'nullable|string|max:255',
            'education.*.institution' => 'nullable|string|max:255',
            'media.*.platform' => 'nullable|string|max:255',
            'media.*.url' => 'nullable|url|max:255',
            'research.*.research_field' => 'nullable|string|max:255',
            'research.*.description' => 'nullable|string',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->name = $request->name;
        $staff->position_id = $request->position_id;
        $staff->email = $request->email;
        $staff->bio = $request->bio;

        // Handle file upload if a new photo is provided
        if ($request->hasFile('photo')) {
            // Delete old photo if it exists
            if ($staff->photo) {
                Storage::delete($staff->photo);
            }
            $staff->photo = $request->file('photo')->store('photos');
        }

        $staff->save();

        // Handle education, media, and research updates (assumed to be related models)
        // You would need to handle the relationship updates here

        return redirect()->route('staff.index')->with('success', 'Staff updated successfully.');
    }
    public function destroy($id)
    {
        $destroy = Staff::findOrFail($id);
        $destroy->delete();
        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}
