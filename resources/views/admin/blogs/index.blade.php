@extends('layouts.admin')

@section('title', 'Manage Agri News & Articles')
@section('page_title', 'Agricultural News & Research Articles')

@section('content')
<div class="space-y-6">

    @if(session('success'))
        <div class="p-4 rounded-xl bg-emerald-50 text-emerald-800 border border-emerald-200 text-sm font-semibold flex items-center justify-between">
            <span><i class="fa-solid fa-circle-check mr-2"></i> {{ session('success') }}</span>
        </div>
    @endif

    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-6 rounded-2xl border border-gray-100 shadow-sm">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Agricultural News & Research Articles (কৃষি সংবাদ ও গবেষণা)</h2>
            <p class="text-xs text-gray-500 mt-1">Publish and manage agricultural research updates, DAE policy news, and farming innovations.</p>
        </div>
        <a href="{{ route('admin.blogs.create') }}" class="px-4 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm transition-all shadow-sm flex items-center gap-2">
            <i class="fa-solid fa-plus"></i>
            <span>Publish Agri News</span>
        </a>
    </div>

    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-xs font-semibold text-gray-500 uppercase border-b border-gray-100">
                    <tr>
                        <th class="px-6 py-3.5">Thumbnail</th>
                        <th class="px-6 py-3.5">Article Headline</th>
                        <th class="px-6 py-3.5">Category</th>
                        <th class="px-6 py-3.5">Date</th>
                        <th class="px-6 py-3.5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($blogs as $blog)
                        <tr class="hover:bg-gray-50/80 transition-colors">
                            <td class="px-6 py-4">
                                <img src="{{ asset($blog->image ?? 'frontend/images/news1.jpg') }}" alt="{{ $blog->title }}" class="w-16 h-11 rounded-lg object-cover border">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 max-w-xs">
                                {{ $blog->title }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-800 border border-emerald-100">
                                    {{ $blog->category }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-xs text-gray-400">
                                {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Draft' }}
                            </td>
                            <td class="px-6 py-4 text-right space-x-2">
                                <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="text-xs font-semibold text-indigo-600 hover:text-indigo-900 bg-indigo-50 px-3 py-1.5 rounded-lg border border-indigo-100 inline-block">
                                    Edit
                                </a>
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this article?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-xs font-semibold text-rose-600 hover:text-rose-900 bg-rose-50 px-3 py-1.5 rounded-lg border border-rose-100">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-12 text-center text-gray-400">
                                No agricultural news articles published yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($blogs->hasPages())
            <div class="px-6 py-4 border-t border-gray-100">
                {{ $blogs->links() }}
            </div>
        @endif
    </div>

</div>
@endsection
