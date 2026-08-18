<?php $__env->startSection('title', 'Agricultural Information Hub - Home'); ?>

<?php $__env->startSection('meta_description', 'Comprehensive Agricultural Information Hub providing farming guides, detailed crop information, pest control strategies, and expert advice for farmers.'); ?>

<?php $__env->startSection('banner'); ?>
<div class="slider_main">
   <div id="banner1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
      <ol class="carousel-indicators">
         <li data-target="#banner1" data-slide-to="0" class="active"></li>
         <li data-target="#banner1" data-slide-to="1"></li>
         <li data-target="#banner1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
         <!-- Slide 1 -->
         <div class="carousel-item active">
            <div class="carousel-img-wrap">
               <img src="<?php echo e(asset('frontend/images/banner.jpg')); ?>" alt="Agricultural Information Hub" class="d-block img-fluid">
               <div class="carousel-overlay"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
               <div class="slider-content">
                  <span class="badge badge-success px-3 py-2 text-uppercase mb-2" style="background-color: #6b7908; font-size: 0.85rem; letter-spacing: 1px;">Empowering Farmers</span>
                  <h2 class="display-4 font-weight-bold text-white mb-2">Agricultural Information Hub</h2>
                  <p class="lead text-white-50 mx-auto mb-4" style="max-width: 650px;">Your comprehensive resource for verified farming guides, crop details, pest control, and expert advisory.</p>
                  <div class="banner-buttons">
                     <a href="<?php echo e(route('farming.guides')); ?>" class="btn btn-success btn-lg px-4 py-2 mr-2 font-weight-bold shadow-sm" style="background-color: #6b7908; border-color: #6b7908;">Explore Farming Guides</a>
                     <a href="<?php echo e(route('contact')); ?>" class="btn btn-outline-light btn-lg px-4 py-2 font-weight-bold shadow-sm">Ask An Expert</a>
                  </div>
               </div>
            </div>
         </div>

         <!-- Slide 2 -->
         <div class="carousel-item">
            <div class="carousel-img-wrap">
               <img src="<?php echo e(asset('frontend/images/chose.jpg')); ?>" alt="Farming Guides & Practices" class="d-block img-fluid">
               <div class="carousel-overlay"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
               <div class="slider-content">
                  <span class="badge badge-warning px-3 py-2 text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Modern Methodology</span>
                  <h2 class="display-4 font-weight-bold text-white mb-2">Farming Guides & Step-by-Step Tutorials</h2>
                  <p class="lead text-white-50 mx-auto mb-4" style="max-width: 650px;">Master soil preparation, organic bio-fertilizers, paddy rice cultivation, and smart micro-drip irrigation.</p>
                  <div class="banner-buttons">
                     <a href="<?php echo e(route('farming.guides')); ?>" class="btn btn-warning text-dark btn-lg px-4 py-2 mr-2 font-weight-bold shadow-sm">View Guides</a>
                     <a href="<?php echo e(route('crop.details')); ?>" class="btn btn-outline-light btn-lg px-4 py-2 font-weight-bold shadow-sm">Crop Profiles</a>
                  </div>
               </div>
            </div>
         </div>

         <!-- Slide 3 -->
         <div class="carousel-item">
            <div class="carousel-img-wrap">
               <img src="<?php echo e(asset('frontend/images/news2.jpg')); ?>" alt="Integrated Pest Management" class="d-block img-fluid">
               <div class="carousel-overlay"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
               <div class="slider-content">
                  <span class="badge badge-info px-3 py-2 text-uppercase mb-2" style="font-size: 0.85rem; letter-spacing: 1px;">Plant Health & Protection</span>
                  <h2 class="display-4 font-weight-bold text-white mb-2">Integrated Pest Control Strategies (IPM)</h2>
                  <p class="lead text-white-50 mx-auto mb-4" style="max-width: 650px;">Identify common crop pests, prevent infestations early, and implement biological & organic control remedies.</p>
                  <div class="banner-buttons">
                     <a href="<?php echo e(route('pest.control')); ?>" class="btn btn-info btn-lg px-4 py-2 mr-2 font-weight-bold shadow-sm">Pest Control Guide</a>
                     <a href="<?php echo e(route('contact')); ?>" class="btn btn-outline-light btn-lg px-4 py-2 font-weight-bold shadow-sm">Consult Specialist</a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Compact Chevron Controls -->
      <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
         <i class="fa fa-chevron-left" aria-hidden="true"></i>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
         <i class="fa fa-chevron-right" aria-hidden="true"></i>
         <span class="sr-only">Next</span>
      </a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Introduction & Purpose Section -->
<div class="about">
   <div class="container-fluid">
      <div class="row d_flex">
         <div class="col-lg-6 col-md-12">
            <div class="titlepage text_align_left">
               <span>Welcome to Agri-Hub</span>
               <h2>EMPOWERING FARMERS WITH MODERN KNOWLEDGE</h2>
               <p>The <strong>Agricultural Information Hub</strong> serves as a comprehensive digital resource center for farmers, agricultural extension workers, and farming enthusiasts. Our mission is to enhance crop productivity, foster sustainable agricultural practices, and bridge the gap between farmers and certified agricultural specialists.</p>
               <a class="read_more" href="<?php echo e(route('about')); ?>">Learn More About Hub</a>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="<?php echo e(asset('frontend/images/about_img.jpg')); ?>" alt="Farming Knowledge"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php echo e(asset('frontend/images/about_img1.jpg')); ?>" alt="Crop Science"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end introduction -->

<!-- Featured Hub Sections: Farming Guides, Crop Details, Pest Control -->
<div class="services">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_left">
               <span>Core Resources</span>
               <h2>FEATURED HUB SECTIONS</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <!-- Section 1: Farming Guides -->
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset('frontend/images/service1.jpg')); ?>" alt="Farming Guides"/></figure>
                  <div class="veget">
                     <h3>FARMING<br>GUIDES</h3>
                     <p>Step-by-step tutorials on soil preparation, seasonal crop schedules (Kharif/Rabi), organic methods, and smart irrigation.</p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('farming.guides')); ?>">Explore Guides</a>
            </div>
         </div>

         <!-- Section 2: Crop Details -->
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset('frontend/images/service2.jpg')); ?>" alt="Crop Details"/></figure>
                  <div class="veget">
                     <h3>CROP<br>DETAILS</h3>
                     <p>Comprehensive crop catalog covering grains, fruits, vegetables, and cash crops with soil requirements, cultivation, and nutrition profiles.</p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('crop.details')); ?>">View Crop Profiles</a>
            </div>
         </div>

         <!-- Section 3: Pest Control Strategies -->
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset('frontend/images/service3.jpg')); ?>" alt="Pest Control"/></figure>
                  <div class="veget">
                     <h3>PEST CONTROL<br>STRATEGIES</h3>
                     <p>Integrated Pest Management (IPM) techniques, biological controls, organic remedies, and early pest identification guidelines.</p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('pest.control')); ?>">Learn IPM Strategies</a>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end services -->

<!-- Hub Impact & Statistics -->
<div class="choose">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <h2>Hub Impact & Coverage</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3">
            <div class="point text_align_center">
               <h3>50+</h3>
               <span>Crop <br>Profiles</span>
            </div>
         </div>
         <div class="col-md-3">
            <div class="point text_align_center">
               <h3>100+</h3>
               <span>Step-by-Step <br>Farming Guides</span>
            </div>
         </div>
         <div class="col-md-3">
            <div class="point text_align_center">
               <h3>30+</h3>
               <span>Agricultural <br>Specialists</span>
            </div>
         </div>
         <div class="col-md-3">
            <div class="point text_align_center">
               <h3>24/7</h3>
               <span>Hotline & <br>Inquiry Support</span>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end choose -->

<!-- Latest Agricultural News & Articles -->
<div class="news">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_left">
               <span>Knowledge Updates</span>
               <h2>LATEST FARMING NEWS</h2>
            </div>
         </div>
      </div>
      <div class="row">
         <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
         <div class="col-md-4 mb-4">
            <div class="latest <?php echo e($index == 1 ? 'box_desho' : ''); ?>">
               <figure><img src="<?php echo e(asset($blog->image ?? ('frontend/images/news'.(($index % 3) + 1).'.jpg'))); ?>" alt="<?php echo e($blog->title); ?>"/></figure>
               <span><?php echo e($blog->created_at ? $blog->created_at->format('d M') : '15 March'); ?></span>
               <div class="nostrud">
                  <h3><?php echo e(Str::limit($blog->title, 25)); ?></h3>
                  <p><?php echo e(Str::limit(strip_tags($blog->content), 90)); ?></p>
                  <a class="read_more" href="<?php echo e(route('blog.details', $blog->slug ?? $blog->id)); ?>">Read More</a>
               </div>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
         <div class="col-md-4">
            <div class="latest">
               <figure><img src="<?php echo e(asset('frontend/images/news1.jpg')); ?>" alt="#"/></figure>
               <span>15<br> March</span>
               <div class="nostrud">
                  <h3>Smart Irrigation Systems</h3>
                  <p>Discover how automated drip irrigation conserves water while maximizing crop yields.</p>
                  <a class="read_more" href="<?php echo e(route('farming.guides')); ?>">Read More</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="latest box_desho">
               <figure><img src="<?php echo e(asset('frontend/images/news2.jpg')); ?>" alt="#"/></figure>
               <span>15<br> March</span>
               <div class="nostrud">
                  <h3>Organic Fertilizer Secrets</h3>
                  <p>Learn the benefits of bio-fertilizers in sustaining long term soil health and fertility.</p>
                  <a class="read_more" href="<?php echo e(route('farming.guides')); ?>">Read More</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="latest">
               <figure><img src="<?php echo e(asset('frontend/images/news3.jpg')); ?>" alt="#"/></figure>
               <span>15<br> March</span>
               <div class="nostrud">
                  <h3>Crop Rotation Strategies</h3>
                  <p>Enhance pest management and nutrient cycles through seasonal crop rotation schedules.</p>
                  <a class="read_more" href="<?php echo e(route('farming.guides')); ?>">Read More</a>
               </div>
            </div>
         </div>
         <?php endif; ?>
      </div>
   </div>
</div>
<!-- end news -->

<!-- Contact Experts Section -->
<div class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage text_align_center">
               <span>Expert Consultation</span>
               <h2>ASK AN AGRICULTURAL ADVISOR</h2>
            </div>
         </div>
         <div class="col-md-8 offset-md-2">
            <?php if(session('success')): ?>
               <div class="alert alert-success text-center mb-4">
                  <?php echo e(session('success')); ?>

               </div>
            <?php endif; ?>
            <form id="request" class="main_form" action="<?php echo e(route('contact.submit')); ?>" method="POST" enctype="multipart/form-data">
               <?php echo csrf_field(); ?>
               <div class="row">
                  <div class="col-md-6">
                     <input class="form_control" placeholder="Your Name *" type="text" name="name" required> 
                  </div>
                  <div class="col-md-6">
                     <input class="form_control" placeholder="Your Email *" type="email" name="email" required>                          
                  </div>
                  <div class="col-md-6">
                     <input class="form_control" placeholder="Phone Number" type="text" name="phone">                          
                  </div>
                  <div class="col-md-6">
                     <input class="form_control" placeholder="Subject / Crop Name" type="text" name="subject">                          
                  </div>
                  <div class="col-md-12">
                     <input class="textarea" placeholder="Describe your question or crop symptoms *" type="text" name="message" required> 
                  </div>
                  <div class="col-md-12 text-left mb-3">
                     <label class="text-white small font-weight-bold">Upload Field Photo / Lab Report (Optional):</label>
                     <input type="file" name="attachment" class="form-control-file text-white p-2 border rounded" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                  </div>
                  <div class="col-md-12">
                     <div class="group_btn">
                        <button class="send_btn" type="submit">Submit to Advisor</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="map-responsive mt-5">
      <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Dhaka+Bangladesh" width="600" height="430" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
   </div>
</div>
<!-- end contact -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/frontend/index.blade.php ENDPATH**/ ?>