@extends('layouts.admin')

@section('title', 'Add New Farming Guide')
@section('page_title', 'Add Farming Guide')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Create New Farming Guide</h2>
            <p class="text-xs text-gray-500 mt-1">Fill out the details, step-by-step instructions, and category.</p>
        </div>
        <a href="{{ route('admin.farming-guides.index') }}" class="px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold text-sm transition-all">
            &larr; Back to List
        </a>
    </div>

    <form action="{{ route('admin.farming-guides.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Guide Title *</label>
                <input type="text" name="title" required value="{{ old('title') }}" placeholder="e.g. Eco-Friendly Bio-Fertilizer Guide" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Category *</label>
                <input type="text" name="category" required value="{{ old('category') }}" placeholder="e.g. Soil & Land Prep, Organic Method" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Season</label>
                <input type="text" name="season" value="{{ old('season') }}" placeholder="e.g. Kharif, Rabi, Zaid, Year-round" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Display Order</label>
                <input type="number" name="order" value="{{ old('order', 0) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Guide Overview / Summary *</label>
            <textarea name="summary" rows="3" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm" placeholder="Provide a brief summary of what farmers will learn...">{{ old('summary') }}</textarea>
        </div>

        <div class="border-t border-gray-100 pt-6 space-y-4">
            <h3 class="font-bold text-gray-900 text-md">Step-by-Step Instructions (Optional)</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Step 1 Title</label>
                    <input type="text" name="step1_title" value="{{ old('step1_title') }}" placeholder="e.g. Soil Sampling" class="w-full px-3 py-2 rounded-lg border text-sm mb-2">
                    <textarea name="step1_detail" rows="2" placeholder="Step 1 details..." class="w-full px-3 py-2 rounded-lg border text-xs">{{ old('step1_detail') }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Step 2 Title</label>
                    <input type="text" name="step2_title" value="{{ old('step2_title') }}" placeholder="e.g. pH Correction" class="w-full px-3 py-2 rounded-lg border text-sm mb-2">
                    <textarea name="step2_detail" rows="2" placeholder="Step 2 details..." class="w-full px-3 py-2 rounded-lg border text-xs">{{ old('step2_detail') }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Step 3 Title</label>
                    <input type="text" name="step3_title" value="{{ old('step3_title') }}" placeholder="e.g. Organic Enrichment" class="w-full px-3 py-2 rounded-lg border text-sm mb-2">
                    <textarea name="step3_detail" rows="2" placeholder="Step 3 details..." class="w-full px-3 py-2 rounded-lg border text-xs">{{ old('step3_detail') }}</textarea>
                </div>
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Guide Cover Image</label>
            <input type="file" name="image_file" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md transition-all">
                Save Farming Guide
            </button>
        </div>
    </form>

</div>
@endsection
