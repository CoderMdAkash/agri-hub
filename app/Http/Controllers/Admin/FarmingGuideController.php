<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FarmingGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FarmingGuideController extends Controller
{
    public function index()
    {
        $guides = FarmingGuide::orderBy('order')->orderBy('id', 'desc')->paginate(10);
        return view('admin.farming_guides.index', compact('guides'));
    }

    public function create()
    {
        return view('admin.farming_guides.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'summary' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $data = $request->except('image_file');
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('guides', 'public');
            $data['image'] = 'storage/' . $path;
        }

        FarmingGuide::create($data);

        return redirect()->route('admin.farming-guides.index')->with('success', 'Farming Guide created successfully.');
    }

    public function edit(FarmingGuide $farmingGuide)
    {
        return view('admin.farming_guides.edit', compact('farmingGuide'));
    }

    public function update(Request $request, FarmingGuide $farmingGuide)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'summary' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $data = $request->except('image_file');
        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('guides', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $farmingGuide->update($data);

        return redirect()->route('admin.farming-guides.index')->with('success', 'Farming Guide updated successfully.');
    }

    public function destroy(FarmingGuide $farmingGuide)
    {
        $farmingGuide->delete();
        return redirect()->route('admin.farming-guides.index')->with('success', 'Farming Guide deleted successfully.');
    }
}
