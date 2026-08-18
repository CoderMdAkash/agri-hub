@extends('layouts.frontend')

@section('title', 'AgroPro - Services')

@section('body_class', 'inner_page service_page')

@section('content')
<!-- services section -->
<div class="services mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_left">
               <span>What We Do</span>
               <h2>SERVICES WE OFFER</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @forelse($services as $index => $service)
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="{{ asset($service->image ?? ('frontend/images/service'.(($index % 3) + 1).'.jpg')) }}" alt="#"/></figure>
                  <div class="veget">
                     <h3>{!! strtoupper(str_replace(' ', '<br>', $service->title ?? 'FRESH VEGETABLES')) !!}</h3>
                     <p>{{ $service->description ?? 'High quality agricultural products and services tailored for local farmers.' }}</p>
                  </div>
               </div>
               <a class="read_more" href="{{ route('contact') }}">Contact Us</a>
            </div>
         </div>
         @empty
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="{{ asset('frontend/images/service1.jpg') }}" alt="#"/></figure>
                  <div class="veget">
                     <h3>FRESH<br>VEGETABLES</h3>
                     <p>High quality, organically grown fresh vegetables harvested daily from local farms.</p>
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
                     <h3>AGRICULTURE<br>PRODUCTS</h3>
                     <p>Modern equipment, fertilizers, and seeds designed to maximize crop yield.</p>
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
                     <h3>ORGANIC<br>PRODUCTS</h3>
                     <p>100% natural organic fertilizers and eco-friendly soil health enhancers.</p>
                  </div>
               </div>
               <a class="read_more" href="{{ route('contact') }}">Contact Us</a>
            </div>
         </div>
         @endforelse
      </div>
   </div>
</div>
<!-- end services section -->

@if(isset($faqs) && count($faqs) > 0)
<!-- FAQ Accordion section -->
<div class="choose my-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <h2>Frequently Asked Questions</h2>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-10">
            <div class="accordion" id="faqAccordion">
               @foreach($faqs as $index => $faq)
               <div class="card mb-3 border-0 shadow-sm">
                  <div class="card-header bg-white" id="heading{{ $index }}">
                     <h5 class="mb-0">
                        <button class="btn btn-link text-dark font-weight-bold text-decoration-none" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}">
                           <i class="fa fa-question-circle text-success mr-2"></i> {{ $faq->question }}
                        </button>
                     </h5>
                  </div>
                  <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-parent="#faqAccordion">
                     <div class="card-body text-muted">
                        {{ $faq->answer }}
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
@endif

@endsection
