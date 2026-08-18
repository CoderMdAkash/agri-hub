<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CropDetail;
use Illuminate\Http\Request;

class CropDetailController extends Controller
{
    public function index()
    {
        $crops = CropDetail::orderBy('order')->orderBy('id', 'desc')->paginate(10);
        return view('admin.crop_details.index', compact('crops'));
    }

    public function create()
    {
        return view('admin.crop_details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $data = $request->except('image_file');

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('crops', 'public');
            $data['image'] = 'storage/' . $path;
        }

        CropDetail::create($data);

        return redirect()->route('admin.crop-details.index')->with('success', 'Crop detail created successfully.');
    }

    public function edit(CropDetail $cropDetail)
    {
        return view('admin.crop_details.edit', compact('cropDetail'));
    }

    public function update(Request $request, CropDetail $cropDetail)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $data = $request->except('image_file');

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('crops', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $cropDetail->update($data);

        return redirect()->route('admin.crop-details.index')->with('success', 'Crop detail updated successfully.');
    }

    public function destroy(CropDetail $cropDetail)
    {
        $cropDetail->delete();
        return redirect()->route('admin.crop-details.index')->with('success', 'Crop detail deleted successfully.');
    }
}
