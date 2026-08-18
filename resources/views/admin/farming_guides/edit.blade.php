@extends('layouts.admin')

@section('title', 'Edit Farming Guide')
@section('page_title', 'Edit Farming Guide')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">

    <div class="flex items-center justify-between bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Edit Farming Guide</h2>
            <p class="text-xs text-gray-500 mt-1">Update details for: {{ $farmingGuide->title }}</p>
        </div>
        <a href="{{ route('admin.farming-guides.index') }}" class="px-4 py-2 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold text-sm transition-all">
            &larr; Back to List
        </a>
    </div>

    <form action="{{ route('admin.farming-guides.update', $farmingGuide->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm space-y-6">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Guide Title *</label>
                <input type="text" name="title" required value="{{ old('title', $farmingGuide->title) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Category *</label>
                <input type="text" name="category" required value="{{ old('category', $farmingGuide->category) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Season</label>
                <input type="text" name="season" value="{{ old('season', $farmingGuide->season) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>

            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Display Order</label>
                <input type="number" name="order" value="{{ old('order', $farmingGuide->order) }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Guide Overview / Summary *</label>
            <textarea name="summary" rows="3" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-500 text-sm">{{ old('summary', $farmingGuide->summary) }}</textarea>
        </div>

        <div class="border-t border-gray-100 pt-6 space-y-4">
            <h3 class="font-bold text-gray-900 text-md">Step-by-Step Instructions</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Step 1 Title</label>
                    <input type="text" name="step1_title" value="{{ old('step1_title', $farmingGuide->step1_title) }}" class="w-full px-3 py-2 rounded-lg border text-sm mb-2">
                    <textarea name="step1_detail" rows="2" class="w-full px-3 py-2 rounded-lg border text-xs">{{ old('step1_detail', $farmingGuide->step1_detail) }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Step 2 Title</label>
                    <input type="text" name="step2_title" value="{{ old('step2_title', $farmingGuide->step2_title) }}" class="w-full px-3 py-2 rounded-lg border text-sm mb-2">
                    <textarea name="step2_detail" rows="2" class="w-full px-3 py-2 rounded-lg border text-xs">{{ old('step2_detail', $farmingGuide->step2_detail) }}</textarea>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Step 3 Title</label>
                    <input type="text" name="step3_title" value="{{ old('step3_title', $farmingGuide->step3_title) }}" class="w-full px-3 py-2 rounded-lg border text-sm mb-2">
                    <textarea name="step3_detail" rows="2" class="w-full px-3 py-2 rounded-lg border text-xs">{{ old('step3_detail', $farmingGuide->step3_detail) }}</textarea>
                </div>
            </div>
        </div>

        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase mb-2">Guide Cover Image</label>
            @if($farmingGuide->image)
                <div class="mb-2">
                    <img src="{{ asset($farmingGuide->image) }}" class="w-32 h-20 object-cover rounded-lg border">
                </div>
            @endif
            <input type="file" name="image_file" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
        </div>

        <div class="pt-4 flex justify-end">
            <button type="submit" class="px-6 py-3 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md transition-all">
                Update Farming Guide
            </button>
        </div>
    </form>

</div>
@endsection
