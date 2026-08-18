@extends('layouts.frontend')

@section('title', 'AgroPro - Portfolio & Projects')

@section('body_class', 'inner_page')

@section('content')
<!-- portfolio / projects section -->
<div class="services mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_left">
               <span>Our Accomplishments</span>
               <h2>AGRICULTURAL PROJECTS & PORTFOLIO</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @forelse($portfolios as $index => $item)
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="{{ asset($item->image ? 'storage/'.$item->image : 'frontend/images/service'.(($index % 3) + 1).'.jpg') }}" alt="#"/></figure>
                  <div class="veget">
                     <h3>{{ $item->title }}</h3>
                     <p>{{ Str::limit($item->description, 100) }}</p>
                  </div>
               </div>
               <a class="read_more" href="{{ route('portfolio.details', $item->id) }}">View Project</a>
            </div>
         </div>
         @empty
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="{{ asset('frontend/images/service1.jpg') }}" alt="#"/></figure>
                  <div class="veget">
                     <h3>Highland Greenhouse Initiative</h3>
                     <p>Controlled climate greenhouse installation boosting off-season vegetable production.</p>
                  </div>
               </div>
               <a class="read_more" href="{{ route('contact') }}">Contact Us</a>
            </div>
         </div>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="{{ asset('frontend/images/service2.jpg') }}" alt="#"/></figure>
                  <div class="veget">
                     <h3>Solar Drip Irrigation</h3>
                     <p>Renewable solar-powered irrigation project across 500 hectares of cropland.</p>
                  </div>
               </div>
               <a class="read_more" href="{{ route('contact') }}">Contact Us</a>
            </div>
         </div>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="{{ asset('frontend/images/service3.jpg') }}" alt="#"/></figure>
                  <div class="veget">
                     <h3>Organic Fertilizer Plant</h3>
                     <p>Sustainable bio-waste conversion to high efficiency soil nutrients.</p>
                  </div>
               </div>
               <a class="read_more" href="{{ route('contact') }}">Contact Us</a>
            </div>
         </div>
         @endforelse
      </div>
   </div>
</div>
<!-- end portfolio section -->
@endsection
