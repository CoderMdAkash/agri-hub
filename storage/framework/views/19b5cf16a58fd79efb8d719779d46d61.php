<?php $__env->startSection('title', 'AgroPro - About Us'); ?>

<?php $__env->startSection('body_class', 'inner_page about_page'); ?>

<?php $__env->startSection('content'); ?>
<!-- about section -->
<div class="about mt-5">
   <div class="container-fluid">
      <div class="row d_flex">
         <div class="col-lg-6 col-md-12">
            <div class="titlepage text_align_left">
               <span>About Us</span>
               <h2><?php echo e($about->heading ?? 'AGRICULTURE MARKET'); ?></h2>
               <p><?php echo e($about->description ?? 'We are dedicated to revolutionizing agriculture with sustainable farming methods, fresh organic produce, and modern agricultural solutions. Our team of agronomists and farm specialists work round the clock to deliver excellence.'); ?></p>
               <?php if(isset($about->bio) && !empty($about->bio)): ?>
                  <p class="mt-3"><?php echo e($about->bio); ?></p>
               <?php endif; ?>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="<?php echo e(asset($about->image ?? 'frontend/images/about_img.jpg')); ?>" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php echo e(asset('frontend/images/about_img1.jpg')); ?>" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end about section -->

<?php if(isset($skills) && count($skills) > 0): ?>
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
         <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm p-4 text-center">
               <h4 class="font-weight-bold text-dark"><i class="<?php echo e($skill->icon ?? 'fa fa-leaf'); ?> text-success mr-2"></i><?php echo e($skill->name); ?></h4>
               <div class="progress mt-3" style="height: 12px;">
                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo e($skill->percentage); ?>%;" aria-valuenow="<?php echo e($skill->percentage); ?>" aria-valuemin="0" aria-valuemax="100"><?php echo e($skill->percentage); ?>%</div>
               </div>
            </div>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/frontend/about.blade.php ENDPATH**/ ?>