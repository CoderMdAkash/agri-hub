@extends('layouts.admin')

@section('title', 'Add New Crop Details')
@section('page_title', 'Add Crop Profile')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Create New Crop Profile</h2>
            <p class="text-xs text-gray-500 mt-1">Enter crop name, category, soil, climate, varieties, and nutritional data.</p>
        </div>
        <a href="{{ route('admin.crop-details.index') }}" class="px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold text-sm transition-all">
            &larr; Back to Directory
        </a>
    </div>

    <form action="{{ route('admin.crop-details.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Crop Name *</label>
                <input type="text" name="name" required value="{{ old('name') }}" placeholder="e.g. Golden Wheat" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Category *</label>
                <select name="category" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
                    <option value="Grains">Grains & Cereals</option>
                    <option value="Vegetables">Vegetables</option>
                    <option value="Fruits">Fruits & Orchards</option>
                    <option value="Cash Crops">Cash Crops</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Scientific Name</label>
                <input type="text" name="scientific_name" value="{{ old('scientific_name') }}" placeholder="e.g. Triticum aestivum" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Harvest Days / Duration</label>
                <input type="text" name="harvest_days" value="{{ old('harvest_days') }}" placeholder="e.g. 110-130 days" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Key Varieties</label>
                <input type="text" name="varieties" value="{{ old('varieties') }}" placeholder="e.g. BARI Gom-33, HD-2967" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Soil Type & pH</label>
                <input type="text" name="soil_type" value="{{ old('soil_type') }}" placeholder="e.g. Well-drained clay loam (pH 6.0 - 7.5)" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div class="md:col-span-2">
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Climate & Sun Requirements</label>
                <input type="text" name="climate" value="{{ old('climate') }}" placeholder="e.g. Cool winter (10-25°C), moderate rainfall" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Nutritional & Commercial Value</label>
            <textarea name="nutritional_value" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm" placeholder="Details about dietary fiber, protein, vitamins, or industrial uses...">{{ old('nutritional_value') }}</textarea>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Crop Image</label>
            <input type="file" name="image_file" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-amber-50 file:text-amber-800 hover:file:bg-amber-100">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="px-6 py-3 rounded-xl bg-amber-600 hover:bg-amber-700 text-white font-bold text-sm shadow-md transition-all">
                Save Crop Profile
            </button>
        </div>
    </form>

</div>
@endsection
