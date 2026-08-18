@extends('layouts.frontend')

@section('title', 'AgroPro - About Us')

@section('body_class', 'inner_page about_page')

@section('content')
<!-- about section -->
<div class="about mt-5">
   <div class="container-fluid">
      <div class="row d_flex">
         <div class="col-lg-6 col-md-12">
            <div class="titlepage text_align_left">
               <span>About Us</span>
               <h2>{{ $about->heading ?? 'AGRICULTURE MARKET' }}</h2>
               <p>{{ $about->description ?? 'We are dedicated to revolutionizing agriculture with sustainable farming methods, fresh organic produce, and modern agricultural solutions. Our team of agronomists and farm specialists work round the clock to deliver excellence.' }}</p>
               @if(isset($about->bio) && !empty($about->bio))
                  <p class="mt-3">{{ $about->bio }}</p>
               @endif
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="{{ asset($about->image ?? 'frontend/images/about_img.jpg') }}" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="{{ asset('frontend/images/about_img1.jpg') }}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end about section -->

@if(isset($skills) && count($skills) > 0)
<!-- skills / competencies section -->
<div class="choose my-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <h2>Agricultural Competencies & Expertise</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach($skills as $skill)
         <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm p-4 text-center">
               <h4 class="font-weight-bold text-dark"><i class="{{ $skill->icon ?? 'fa fa-leaf' }} text-success mr-2"></i>{{ $skill->name }}</h4>
               <div class="progress mt-3" style="height: 12px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: {{ $skill->percentage }}%;" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $skill->percentage }}%</div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endif

@endsection
