@extends('layouts.frontend')

@section('title', $blog->title . ' - AgroPro Blog')

@section('body_class', 'inner_page')

@section('content')
<div class="news my-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12 mb-4">
            <a href="{{ route('home') }}" class="btn btn-outline-success btn-sm mb-3">&larr; Back to Home</a>
            <h1 class="font-weight-bold text-dark">{{ $blog->title }}</h1>
            <p class="text-muted"><i class="fa fa-calendar text-success mr-2"></i>Published {{ $blog->created_at ? $blog->created_at->format('M d, Y') : 'Recently' }}</p>
         </div>
         <div class="col-md-12 mb-4">
            <div class="rounded overflow-hidden shadow-sm">
               <img src="{{ asset($blog->image ?? 'frontend/images/news1.jpg') }}" alt="{{ $blog->title }}" class="img-fluid w-100" style="max-height: 480px; object-fit: cover;">
            </div>
         </div>
         <div class="col-md-12">
            <div class="card border-0 shadow-sm p-4 text-dark" style="line-height: 1.8; font-size: 1.05rem;">
               {!! nl2br(e($blog->content)) !!}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
