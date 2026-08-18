@extends('layouts.admin')

@section('title', 'Add Pest Control Strategy')
@section('page_title', 'Add Pest Control Strategy')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Create Pest Control Strategy</h2>
            <p class="text-xs text-gray-500 mt-1">Specify pest identification symptoms, target crops, biological & organic remedies.</p>
        </div>
        <a href="{{ route('admin.pest-controls.index') }}" class="px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold text-sm transition-all">
            &larr; Back to List
        </a>
    </div>

    <form action="{{ route('admin.pest-controls.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Pest / Disease Name *</label>
                <input type="text" name="title" required value="{{ old('title') }}" placeholder="e.g. Fall Armyworm (Spodoptera frugiperda)" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Type / Category *</label>
                <select name="type" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm">
                    <option value="Insect Pest">Insect Pest</option>
                    <option value="Sucking Pest">Sucking Pest</option>
                    <option value="Fungal Disease">Fungal Disease</option>
                    <option value="Livestock Health">Livestock Health & Parasite</option>
                </select>
            </div>

            <div class="md:col-span-2">
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Target Crops</label>
                <input type="text" name="target_crops" value="{{ old('target_crops') }}" placeholder="e.g. Paddy Rice & Maize, Tomato & Potato" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Pest Identification & Symptoms *</label>
            <textarea name="identification" rows="3" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-rose-500 text-sm" placeholder="Describe physical features, leaf damage marks, or early detection signs...">{{ old('identification') }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Cultural Prevention</label>
                <textarea name="prevention" rows="3" class="w-full px-3 py-2 rounded-xl border text-xs" placeholder="Crop rotation, sticky traps, spacing...">{{ old('prevention') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Biological Control</label>
                <textarea name="biological_control" rows="3" class="w-full px-3 py-2 rounded-xl border text-xs" placeholder="Parasitoid wasps, ladybirds, bio-agents...">{{ old('biological_control') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Organic Remedy</label>
                <textarea name="organic_remedy" rows="3" class="w-full px-3 py-2 rounded-xl border text-xs" placeholder="Neem oil spray, soap decoction, herbal washes...">{{ old('organic_remedy') }}</textarea>
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Pest / Symptom Image</label>
            <input type="file" name="image_file" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-rose-50 file:text-rose-800 hover:file:bg-rose-100">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="px-6 py-3 rounded-xl bg-rose-600 hover:bg-rose-700 text-white font-bold text-sm shadow-md transition-all">
                Save Pest Strategy
            </button>
        </div>
    </form>

</div>
@endsection
