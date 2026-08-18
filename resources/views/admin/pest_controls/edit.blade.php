@extends('layouts.admin')

@section('title', 'Edit Pest Control Strategy')
@section('page_title', 'Edit Pest Control Strategy')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Edit Pest Control Strategy</h2>
            <p class="text-xs text-gray-500 mt-1">Update strategy for: {{ $pestControl->title }}</p>
        </div>
        <a href="{{ route('admin.pest-controls.index') }}" class="px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold text-sm transition-all">
            &larr; Back to List
        </a>
    </div>

    <form action="{{ route('admin.pest-controls.update', $pestControl->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Pest / Disease Name *</label>
                <input type="text" name="title" required value="{{ old('title', $pestControl->title) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Type / Category *</label>
                <select name="type" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm">
                    <option value="Insect Pest" {{ $pestControl->type == 'Insect Pest' ? 'selected' : '' }}>Insect Pest</option>
                    <option value="Sucking Pest" {{ $pestControl->type == 'Sucking Pest' ? 'selected' : '' }}>Sucking Pest</option>
                    <option value="Fungal Disease" {{ $pestControl->type == 'Fungal Disease' ? 'selected' : '' }}>Fungal Disease</option>
                    <option value="Livestock Health" {{ $pestControl->type == 'Livestock Health' ? 'selected' : '' }}>Livestock Health & Parasite</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Target Crops</label>
                <input type="text" name="target_crops" value="{{ old('target_crops', $pestControl->target_crops) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Pest Identification & Symptoms *</label>
            <textarea name="identification" rows="3" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm">{{ old('identification', $pestControl->identification) }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Cultural Prevention</label>
                <textarea name="prevention" rows="3" class="w-full px-3 py-2 rounded-xl border text-xs">{{ old('prevention', $pestControl->prevention) }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Biological Control</label>
                <textarea name="biological_control" rows="3" class="w-full px-3 py-2 rounded-xl border text-xs">{{ old('biological_control', $pestControl->biological_control) }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Organic Remedy</label>
                <textarea name="organic_remedy" rows="3" class="w-full px-3 py-2 rounded-xl border text-xs">{{ old('organic_remedy', $pestControl->organic_remedy) }}</textarea>
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Pest / Symptom Image</label>
            @if($pestControl->image)
                <div class="mb-2">
                    <img src="{{ asset($pestControl->image) }}" class="w-32 h-20 object-cover rounded-lg border">
                </div>
            @endif
            <input type="file" name="image_file" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-rose-50 file:text-rose-800 hover:file:bg-rose-100">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="px-6 py-3 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-bold text-sm shadow-md transition-all">
                Update Pest Strategy
            </button>
        </div>
    </form>

</div>
@endsection
