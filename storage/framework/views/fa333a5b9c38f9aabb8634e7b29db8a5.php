<?php $__env->startSection('title', 'AgroPro - Services'); ?>

<?php $__env->startSection('body_class', 'inner_page service_page'); ?>

<?php $__env->startSection('content'); ?>
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
         <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset($service->image ?? ('frontend/images/service'.(($index % 3) + 1).'.jpg'))); ?>" alt="#"/></figure>
                  <div class="veget">
                     <h3><?php echo strtoupper(str_replace(' ', '<br>', $service->title ?? 'FRESH VEGETABLES')); ?></h3>
                     <p><?php echo e($service->description ?? 'High quality agricultural products and services tailored for local farmers.'); ?></p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('contact')); ?>">Contact Us</a>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset('frontend/images/service1.jpg')); ?>" alt="#"/></figure>
                  <div class="veget">
                     <h3>FRESH<br>VEGETABLES</h3>
                     <p>High quality, organically grown fresh vegetables harvested daily from local farms.</p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('contact')); ?>">Contact Us</a>
            </div>
         </div>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset('frontend/images/service2.jpg')); ?>" alt="#"/></figure>
                  <div class="veget">
                     <h3>AGRICULTURE<br>PRODUCTS</h3>
                     <p>Modern equipment, fertilizers, and seeds designed to maximize crop yield.</p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('contact')); ?>">Contact Us</a>
            </div>
         </div>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset('frontend/images/service3.jpg')); ?>" alt="#"/></figure>
                  <div class="veget">
                     <h3>ORGANIC<br>PRODUCTS</h3>
                     <p>100% natural organic fertilizers and eco-friendly soil health enhancers.</p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('contact')); ?>">Contact Us</a>
            </div>
         </div>
         <?php endif; ?>
      </div>
   </div>
</div>
<!-- end services section -->

<?php if(isset($faqs) && count($faqs) > 0): ?>
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
               <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="card mb-3 border-0 shadow-sm">
                  <div class="card-header bg-white" id="heading<?php echo e($index); ?>">
                     <h5 class="mb-0">
                        <button class="btn btn-link text-dark font-weight-bold text-decoration-none" type="button" data-toggle="collapse" data-target="#collapse<?php echo e($index); ?>" aria-expanded="<?php echo e($index == 0 ? 'true' : 'false'); ?>">
                           <i class="fa fa-question-circle text-success mr-2"></i> <?php echo e($faq->question); ?>

                        </button>
                     </h5>
                  </div>
                  <div id="collapse<?php echo e($index); ?>" class="collapse <?php echo e($index == 0 ? 'show' : ''); ?>" aria-labelledby="heading<?php echo e($index); ?>" data-parent="#faqAccordion">
                     <div class="card-body text-muted">
                        <?php echo e($faq->answer); ?>

                     </div>
                  </div>
               </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/frontend/service.blade.php ENDPATH**/ ?>