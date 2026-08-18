<?php $__env->startSection('title', 'AgroPro - Portfolio & Projects'); ?>

<?php $__env->startSection('body_class', 'inner_page'); ?>

<?php $__env->startSection('content'); ?>
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
         <?php $__empty_1 = true; $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset($item->image ? 'storage/'.$item->image : 'frontend/images/service'.(($index % 3) + 1).'.jpg')); ?>" alt="#"/></figure>
                  <div class="veget">
                     <h3><?php echo e($item->title); ?></h3>
                     <p><?php echo e(Str::limit($item->description, 100)); ?></p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('portfolio.details', $item->id)); ?>">View Project</a>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
         <div class="col-md-4 mb-4">
            <div class="services_box_main">
               <div class="services_box text_align_left">
                  <figure><img src="<?php echo e(asset('frontend/images/service1.jpg')); ?>" alt="#"/></figure>
                  <div class="veget">
                     <h3>Highland Greenhouse Initiative</h3>
                     <p>Controlled climate greenhouse installation boosting off-season vegetable production.</p>
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
                     <h3>Solar Drip Irrigation</h3>
                     <p>Renewable solar-powered irrigation project across 500 hectares of cropland.</p>
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
                     <h3>Organic Fertilizer Plant</h3>
                     <p>Sustainable bio-waste conversion to high efficiency soil nutrients.</p>
                  </div>
               </div>
               <a class="read_more" href="<?php echo e(route('contact')); ?>">Contact Us</a>
            </div>
         </div>
         <?php endif; ?>
      </div>
   </div>
</div>
<!-- end portfolio section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/frontend/portfolio.blade.php ENDPATH**/ ?>