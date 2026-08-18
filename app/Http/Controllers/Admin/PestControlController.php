<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PestControlStrategy;
use Illuminate\Http\Request;

class PestControlController extends Controller
{
    public function index()
    {
        $pests = PestControlStrategy::orderBy('order')->orderBy('id', 'desc')->paginate(10);
        return view('admin.pest_controls.index', compact('pests'));
    }

    public function create()
    {
        return view('admin.pest_controls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'identification' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $data = $request->except('image_file');

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('pests', 'public');
            $data['image'] = 'storage/' . $path;
        }

        PestControlStrategy::create($data);

        return redirect()->route('admin.pest-controls.index')->with('success', 'Pest control strategy created successfully.');
    }

    public function edit(PestControlStrategy $pestControl)
    {
        return view('admin.pest_controls.edit', compact('pestControl'));
    }

    public function update(Request $request, PestControlStrategy $pestControl)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'identification' => 'required|string',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);

        $data = $request->except('image_file');

        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('pests', 'public');
            $data['image'] = 'storage/' . $path;
        }

        $pestControl->update($data);

        return redirect()->route('admin.pest-controls.index')->with('success', 'Pest control strategy updated successfully.');
    }

    public function destroy(PestControlStrategy $pestControl)
    {
        $pestControl->delete();
        return redirect()->route('admin.pest-controls.index')->with('success', 'Pest control strategy deleted successfully.');
    }
}
