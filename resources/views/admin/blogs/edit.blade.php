@extends('layouts.admin')

@section('title', 'Edit Agri News Article')
@section('page_title', 'Edit Agri News')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-2xl border border-gray-100 shadow-sm p-8 space-y-6">
    <div class="pb-4 border-b border-gray-100 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Edit Agri News Article</h2>
            <p class="text-xs text-gray-500 mt-1">Update headline, category, excerpt, or body content.</p>
        </div>
        <a href="{{ route('admin.blogs.index') }}" class="text-xs text-gray-500 font-semibold">&larr; Back to Directory</a>
    </div>

    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Article Headline *</label>
                <input type="text" name="title" value="{{ old('title', $blog->title) }}" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
            </div>
            <div>
                <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Category *</label>
                <input type="text" name="category" value="{{ old('category', $blog->category) }}" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">
            </div>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Summary / Excerpt *</label>
            <textarea name="excerpt" rows="2" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('excerpt', $blog->excerpt) }}</textarea>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Full Article Body *</label>
            <textarea name="content" rows="6" required class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500">{{ old('content', $blog->content) }}</textarea>
        </div>
        <div>
            <label class="block text-xs font-bold text-gray-700 uppercase tracking-wider mb-2">Featured Image</label>
            @if($blog->image)
                <div class="mb-2">
                    <img src="{{ asset($blog->image) }}" class="w-28 h-16 rounded-lg object-cover border">
                </div>
            @endif
            <input type="file" name="image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
        </div>
        <div class="pt-4 border-t border-gray-100 flex justify-end">
            <button type="submit" class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-sm shadow-md transition-all">Update Article</button>
        </div>
    </form>
</div>
@endsection
