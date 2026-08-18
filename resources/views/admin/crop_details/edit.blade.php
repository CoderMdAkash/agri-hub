@extends('layouts.admin')

@section('title', 'Edit Crop Details')
@section('page_title', 'Edit Crop Profile')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Edit Crop Profile</h2>
            <p class="text-xs text-gray-500 mt-1">Update profile for: {{ $cropDetail->name }}</p>
        </div>
        <a href="{{ route('admin.crop-details.index') }}" class="px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold text-sm transition-all">
            &larr; Back to Directory
        </a>
    </div>

    <form action="{{ route('admin.crop-details.update', $cropDetail->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Crop Name *</label>
                <input type="text" name="name" required value="{{ old('name', $cropDetail->name) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Category *</label>
                <select name="category" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
                    <option value="Grains" {{ $cropDetail->category == 'Grains' ? 'selected' : '' }}>Grains & Cereals</option>
                    <option value="Vegetables" {{ $cropDetail->category == 'Vegetables' ? 'selected' : '' }}>Vegetables</option>
                    <option value="Fruits" {{ $cropDetail->category == 'Fruits' ? 'selected' : '' }}>Fruits & Orchards</option>
                    <option value="Cash Crops" {{ $cropDetail->category == 'Cash Crops' ? 'selected' : '' }}>Cash Crops</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Scientific Name</label>
                <input type="text" name="scientific_name" value="{{ old('scientific_name', $cropDetail->scientific_name) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Harvest Days / Duration</label>
                <input type="text" name="harvest_days" value="{{ old('harvest_days', $cropDetail->harvest_days) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Key Varieties</label>
                <input type="text" name="varieties" value="{{ old('varieties', $cropDetail->varieties) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Soil Type & pH</label>
                <input type="text" name="soil_type" value="{{ old('soil_type', $cropDetail->soil_type) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>

            <div class="md:col-span-2">
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Climate & Sun Requirements</label>
                <input type="text" name="climate" value="{{ old('climate', $cropDetail->climate) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Nutritional & Commercial Value</label>
            <textarea name="nutritional_value" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-amber-500 text-sm">{{ old('nutritional_value', $cropDetail->nutritional_value) }}</textarea>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Crop Image</label>
            @if($cropDetail->image)
                <div class="mb-2">
                    <img src="{{ asset($cropDetail->image) }}" class="w-32 h-20 object-cover rounded-lg border">
                </div>
            @endif
            <input type="file" name="image_file" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-amber-50 file:text-amber-800 hover:file:bg-amber-100">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="px-6 py-3 rounded-xl bg-amber-600 hover:bg-amber-700 text-white font-bold text-sm shadow-md transition-all">
                Update Crop Profile
            </button>
        </div>
    </form>

</div>
@endsection
