<?php $__env->startSection('title', 'Contact Agricultural Experts - Agricultural Information Hub'); ?>

<?php $__env->startSection('meta_description', 'Submit inquiries, upload field images or documents, and seek direct advice from certified agricultural advisors and extension specialists.'); ?>

<?php $__env->startSection('body_class', 'inner_page'); ?>

<?php $__env->startSection('content'); ?>
<div class="contact mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center mb-4">
            <div class="titlepage">
               <span>Expert Consultation</span>
               <h2>CONTACT AGRICULTURAL EXPERTS</h2>
               <p class="text-muted mt-2">Have a question regarding crop disease, soil health, or farming techniques? Submit your inquiry with optional field photo attachments.</p>
            </div>
         </div>
      </div>

      <div class="row">
         <!-- Direct Contact Info for Extension Services -->
         <div class="col-md-4 mb-4">
            <div class="card border-0 shadow-sm p-4 h-100 bg-light">
               <h4 class="font-weight-bold text-dark border-bottom pb-3 mb-4"><i class="fa fa-phone-alt text-success mr-2"></i>Extension Hotline</h4>
               
               <div class="mb-4">
                  <strong class="d-block text-success small text-uppercase">Kishan Call Center Hotline:</strong>
                  <span class="font-weight-bold h5 text-dark">16123 / 09612316123</span>
                  <p class="small text-muted mb-0">Toll-free expert advice (Sun - Thu, 9 AM - 5 PM)</p>
               </div>

               <div class="mb-4">
                  <strong class="d-block text-success small text-uppercase">Advisory Email:</strong>
                  <a href="mailto:experts@agrihub.org" class="font-weight-bold text-dark">experts@agrihub.org</a>
               </div>

               <div class="mb-4">
                  <strong class="d-block text-success small text-uppercase">Headquarters & Lab:</strong>
                  <span class="text-dark small">Department of Agricultural Extension (DAE), Farmgate, Dhaka-1215</span>
               </div>
            </div>
         </div>

         <!-- Inquiry Form with File Attachment -->
         <div class="col-md-8 mb-4">
            <div class="card border-0 shadow-sm p-4">
               <h4 class="font-weight-bold text-dark mb-4">Submit Expert Advisory Request</h4>

               <?php if(session('success')): ?>
                  <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                     <i class="fa fa-check-circle mr-2"></i> <?php echo e(session('success')); ?>

                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
               <?php endif; ?>

               <?php if($errors->any()): ?>
                  <div class="alert alert-danger mb-4">
                     <ul class="mb-0 pl-3">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
               <?php endif; ?>

               <form id="expert-contact-form" action="<?php echo e(route('contact.submit')); ?>" method="POST" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label class="font-weight-bold text-dark small">Full Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Farmer / User Name" required value="<?php echo e(old('name')); ?>">
                     </div>
                     <div class="form-group col-md-6">
                        <label class="font-weight-bold text-dark small">Email Address <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="user@example.com" required value="<?php echo e(old('email')); ?>">
                     </div>
                  </div>

                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label class="font-weight-bold text-dark small">Phone Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="+8801700000000" value="<?php echo e(old('phone')); ?>">
                     </div>
                     <div class="form-group col-md-6">
                        <label class="font-weight-bold text-dark small">Inquiry Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="e.g. Pest Infestation / Soil Test Advice" value="<?php echo e(old('subject')); ?>">
                     </div>
                  </div>

                  <div class="form-group">
                     <label class="font-weight-bold text-dark small">Detailed Message / Description <span class="text-danger">*</span></label>
                     <textarea name="message" rows="4" class="form-control" placeholder="Describe crop symptoms, field location, or questions for our specialists..." required><?php echo e(old('message')); ?></textarea>
                  </div>

                  <div class="form-group">
                     <label class="font-weight-bold text-dark small">Optional Field Image / Document Attachment</label>
                     <input type="file" name="attachment" class="form-control-file p-2 border rounded bg-light" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                     <small class="form-text text-muted">Upload crop leaf photos, soil lab reports, or field documents (Max: 5MB. Formats: JPG, PNG, PDF, DOC).</small>
                  </div>

                  <button type="submit" class="btn btn-success btn-lg btn-block mt-4 font-weight-bold">
                     <i class="fa fa-paper-plane mr-2"></i> Submit Inquiry to Advisor
                  </button>
               </form>
            </div>
         </div>
      </div>

      <div class="map-responsive mt-5">
         <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Dhaka+Bangladesh" width="600" height="430" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/frontend/contact.blade.php ENDPATH**/ ?>