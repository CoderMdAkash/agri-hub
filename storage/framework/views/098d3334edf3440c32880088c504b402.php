<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
   <head>
      <!-- SEO Meta Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $__env->yieldContent('title', 'Agricultural Information Hub - Farming Guides, Crop Details & Pest Control'); ?></title>
      <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Agricultural Information Hub provides comprehensive farming guides, crop details, pest control strategies, and expert advisory services for farmers.'); ?>">
      <meta name="keywords" content="Agricultural Information Hub, farming guides, crop details, pest control strategies, organic farming, IPM, crop cultivation, farming techniques, agricultural advisor">
      <meta name="author" content="Agricultural Information Hub">

      <!-- OpenGraph Meta Tags -->
      <meta property="og:title" content="<?php echo $__env->yieldContent('title', 'Agricultural Information Hub'); ?>">
      <meta property="og:description" content="Comprehensive farming guides, crop profiles, pest control IPM strategies, and expert support for farmers.">
      <meta property="og:type" content="website">
      <meta property="og:url" content="<?php echo e(url()->current()); ?>">
      <meta property="og:image" content="<?php echo e(asset('frontend/images/banner.jpg')); ?>">

      <!-- Structured Data / JSON-LD Schema.org Markup -->
      <script type="application/ld+json">
      <?php echo json_encode([
        '<?php $__contextArgs = [];
if (context()->has($__contextArgs[0])) :
if (isset($value)) { $__contextPrevious[] = $value; }
$value = context()->get($__contextArgs[0]); ?>' => 'https://schema.org',
        '@type' => 'EducationalOrganization',
        'name' => 'Agricultural Information Hub',
        'url' => url('/'),
        'logo' => asset('frontend/images/fevicon.png'),
        'description' => 'Comprehensive resource hub for farmers providing guides, crop info, pest control strategies, and expert consultation.'
      ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>

      </script>

      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo e(asset('frontend/images/fevicon.png')); ?>" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo e(asset('frontend/css/owl.carousel.min.css')); ?>">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
      <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap-datepicker.min.css')); ?>">
      
      <?php echo $__env->yieldPushContent('styles'); ?>
   </head>
   <!-- body -->
   <body class="main-layout <?php echo $__env->yieldContent('body_class'); ?>">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo e(asset('frontend/images/loading.gif')); ?>" alt="#"/></div>
      </div>
      <!-- end loader -->
      
      <!-- header section -->
      <header class="header-area">
         <div class="container-fluid px-lg-4">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-3 col-6">
                  <div class="logo">
                     <a href="<?php echo e(route('home')); ?>" class="d-flex align-items-center font-weight-bold text-decoration-none">
                        <i class="fa fa-leaf text-success mr-2" style="font-size: 22px;"></i>
                        <span class="text-dark h4 font-weight-bold mb-0">Agri<span style="color: #6b7908;">Hub</span></span>
                     </a>
                  </div>
               </div>
               <div class="col-lg-7 col-md-7 d-none d-lg-block">
                  <div class="navbar-area">
                     <nav class="site-navbar">
                        <ul class="nav-menu">
                           <li><a class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a></li>
                           <li><a class="<?php echo e(request()->routeIs('farming.guides') ? 'active' : ''); ?>" href="<?php echo e(route('farming.guides')); ?>">Farming Guides</a></li>
                           <li><a class="<?php echo e(request()->routeIs('crop.details') ? 'active' : ''); ?>" href="<?php echo e(route('crop.details')); ?>">Crop Details</a></li>
                           <li><a class="<?php echo e(request()->routeIs('pest.control') ? 'active' : ''); ?>" href="<?php echo e(route('pest.control')); ?>">Pest Control</a></li>
                           <li><a class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About Us</a></li>
                           <li><a class="<?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-lg-2 col-md-2 col-6 text-right">
                  <div class="d-flex align-items-center justify-content-end">
                     <a href="<?php echo e(route('login')); ?>" class="btn-admin-portal">
                        <i class="fa fa-lock mr-1"></i> Admin
                     </a>
                     <button class="nav-toggler d-lg-none ml-2">
                        <span></span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->

      <div class="full_bg">
         
         <?php echo $__env->yieldContent('banner'); ?>
      </div>
      <!-- end full_bg -->

      <!-- Main Content -->
      <main>
         <?php echo $__env->yieldContent('content'); ?>
      </main>

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="hedingh3 text_align_left">
                        <h3>Newsletter</h3>
                        <form id="colof" class="form_subscri" action="<?php echo e(route('contact.submit')); ?>" method="POST">
                           <?php echo csrf_field(); ?>
                           <input class="newsl" placeholder="Enter Email" type="email" name="email" required>
                           <input type="hidden" name="name" value="Newsletter Subscriber">
                           <input type="hidden" name="message" value="Subscribed to Newsletter">
                           <button class="subsci_btn"><img src="<?php echo e(asset('frontend/images/new.png')); ?>" alt="#"/></button>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="hedingh3 text_align_left">
                        <h3>Explore</h3>
                        <ul class="menu_footer">
                           <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                           <li><a href="<?php echo e(route('about')); ?>">About</a></li>
                           <li><a href="<?php echo e(route('service')); ?>">Service</a></li>
                           <li><a href="<?php echo e(route('portfolio')); ?>">Portfolio</a></li>
                           <li><a href="<?php echo e(route('contact')); ?>">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="hedingh3 text_align_left">
                        <h3>Recent Posts</h3>
                        <ul class="recent">
                           <li><img src="<?php echo e(asset('frontend/images/resent.jpg')); ?>" alt="#"/>Agri Hub Organic Produce</li>
                           <li><img src="<?php echo e(asset('frontend/images/resent.jpg')); ?>" alt="#"/>Modern Farming Solutions</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="hedingh3 flot_right text_align_left">
                        <h3>Contact</h3>
                        <ul class="top_infomation">
                           <li><i class="fa fa-phone" aria-hidden="true"></i> +880 1234 567890</li>
                           <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@agrihub.com">info@agrihub.com</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
              
            <div class="copyright">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-8">
                        <p>© <?php echo e(date('Y')); ?> All Rights Reserved. Agri-Hub Agriculture & Farm Portal</p>
                     </div>
                     <div class="col-md-4">
                        <ul class="social_icon">
                           <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fa-brands fa-linkedin-in" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->

      <!-- Javascript files-->
      <script src="<?php echo e(asset('frontend/js/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/js/bootstrap.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/js/jquery-3.0.0.min.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/js/owl.carousel.min.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/js/bootstrap-datepicker.min.js')); ?>"></script>
      <script src="<?php echo e(asset('frontend/js/custom.js')); ?>"></script>

      <?php echo $__env->yieldPushContent('scripts'); ?>
   </body>
</html>

<?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/layouts/frontend.blade.php ENDPATH**/ ?>