@extends('layouts.frontend')

@section('title', $portfolio->title . ' - Project Details')

@section('body_class', 'inner_page')

@section('content')
<div class="services my-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12 mb-4">
            <a href="{{ route('portfolio') }}" class="btn btn-outline-success btn-sm mb-3">&larr; Back to Portfolio</a>
            <h1 class="font-weight-bold text-dark">{{ $portfolio->title }}</h1>
         </div>
         <div class="col-md-8 mb-4">
            <div class="rounded overflow-hidden shadow-sm mb-4">
               <img src="{{ asset($portfolio->image ? 'storage/'.$portfolio->image : 'frontend/images/service1.jpg') }}" alt="{{ $portfolio->title }}" class="img-fluid w-100" style="max-height: 480px; object-fit: cover;">
            </div>
            <div class="card border-0 shadow-sm p-4 text-dark" style="line-height: 1.8;">
               <h3 class="font-weight-bold text-success mb-3">Project Overview</h3>
               <p>{{ $portfolio->full_description ?? $portfolio->short_description }}</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 bg-light">
               <h4 class="font-weight-bold border-bottom pb-3 mb-3">Project Info</h4>
               <ul class="list-unstyled mb-0">
                  <li class="mb-3">
                     <strong class="d-block text-muted text-uppercase small">Client</strong>
                     <span>{{ $portfolio->client_name ?? 'Agri-Hub Partner' }}</span>
                  </li>
                  <li class="mb-3">
                     <strong class="d-block text-muted text-uppercase small">Category</strong>
                     <span>{{ $portfolio->category ?? 'Agricultural Engineering' }}</span>
                  </li>
                  @if($portfolio->project_url)
                  <li class="mt-4">
                     <a href="{{ $portfolio->project_url }}" target="_blank" class="btn btn-success btn-block">Visit Live Link <i class="fa fa-external-link ml-1"></i></a>
                  </li>
                  @endif
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
