@extends('layouts.admin')

@section('title', 'Publish Agri News Article')
@section('page_title', 'Publish Agri News')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-2xl border border-gray-100 shadow-sm p-8 space-y-6">
    <div class="pb-4 border-b border-gray-100 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Publish Agri News & Article</h2>
            <p class="text-xs text-gray-500 mt-1">Publish agricultural research, DAE extension notices, and crop technology news.</p>
        </div>
        <a href="{{ route('admin.blogs.index') }}" class="text-xs text-gray-500 font-semibold">&larr; Back to Directory</a>
    </div>

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Article Headline *</label>
                <input type="text" name="title" value="{{ old('title') }}" placeholder="e.g. BRRI Releases High-Yield Salinity Rice" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Category *</label>
                <input type="text" name="category" value="{{ old('category', 'Crop Research') }}" placeholder="e.g. Crop Research, Mechanization" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
            </div>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Summary / Excerpt *</label>
            <textarea name="excerpt" rows="2" required placeholder="Brief summary of the agricultural news..." class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('excerpt') }}</textarea>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Full Article Body *</label>
            <textarea name="content" rows="6" required placeholder="Detailed news content, research findings, and extension guidance..." class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('content') }}</textarea>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Featured Image</label>
            <input type="file" name="image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
        </div>
        <div class="pt-4 border-t border-gray-100 flex justify-end">
            <button type="submit" class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-sm shadow-md transition-all">Publish Agri News</button>
        </div>
    </form>
</div>
@endsection
