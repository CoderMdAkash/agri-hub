<?php $__env->startSection('title', 'Crop Details & Profiles - Agricultural Information Hub'); ?>

<?php $__env->startSection('meta_description', 'Detailed crop profiles for grains, fruits, vegetables, and cash crops including soil requirements, cultivation, harvesting, and nutritional values.'); ?>

<?php $__env->startSection('body_class', 'inner_page'); ?>

<?php $__env->startSection('content'); ?>
<div class="services mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center mb-5">
            <div class="titlepage">
               <span>Crop Database</span>
               <h2>COMPREHENSIVE CROP DETAILS & PROFILES</h2>
               <p class="lead text-muted mt-2">Explore cultivation methods, soil requirements, nutritional benefits, and harvesting techniques for major crop categories.</p>
            </div>
         </div>
      </div>

      <!-- Category Filter Tabs -->
      <ul class="nav nav-pills justify-content-center mb-5" id="cropTabs" role="tablist">
         <li class="nav-item">
            <a class="nav-link active font-weight-bold px-4 py-2" id="grains-tab" data-toggle="pill" href="#grains" role="tab">🌾 Grains & Cereals</a>
         </li>
         <li class="nav-item">
            <a class="nav-link font-weight-bold px-4 py-2" id="vegetables-tab" data-toggle="pill" href="#vegetables" role="tab">🥦 Vegetables</a>
         </li>
         <li class="nav-item">
            <a class="nav-link font-weight-bold px-4 py-2" id="fruits-tab" data-toggle="pill" href="#fruits" role="tab">🍎 Fruits & Orchards</a>
         </li>
         <li class="nav-item">
            <a class="nav-link font-weight-bold px-4 py-2" id="cash-tab" data-toggle="pill" href="#cash" role="tab">💰 Cash Crops</a>
         </li>
      </ul>

      <div class="tab-content" id="cropTabsContent">
         
         <!-- TAB 1: GRAINS -->
         <div class="tab-pane fade show active" id="grains" role="tabpanel">
            <div class="row">
               <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                     <div class="row no-gutters">
                        <div class="col-md-5">
                           <img src="<?php echo e(asset('frontend/images/service1.jpg')); ?>" class="card-img h-100" style="object-fit: cover;" alt="Golden Wheat">
                        </div>
                        <div class="col-md-7">
                           <div class="card-body p-4">
                              <span class="badge badge-warning px-2 py-1 mb-2">Grain Crop</span>
                              <h4 class="font-weight-bold text-dark mb-1">Golden Wheat (Triticum aestivum)</h4>
                              <p class="text-muted small mb-2"><strong>Varieties:</strong> BARI Gom-33, HD-2967, PBW-343</p>
                              
                              <ul class="list-unstyled small text-muted mb-3">
                                 <li><strong>🌱 Soil:</strong> Well-drained clay loam (pH 6.0 - 7.5)</li>
                                 <li><strong>☀️ Climate:</strong> Cool winter (10-25°C), moderate rainfall</li>
                                 <li><strong>🌾 Harvest:</strong> 110-130 days when moisture drops below 14%</li>
                              </ul>
                              <div class="bg-light p-2 rounded small">
                                 <strong>Nutritional Value:</strong> Rich in Fiber, Protein (12g/100g), Iron, B-Vitamins.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                     <div class="row no-gutters">
                        <div class="col-md-5">
                           <img src="<?php echo e(asset('frontend/images/service3.jpg')); ?>" class="card-img h-100" style="object-fit: cover;" alt="Highland Maize">
                        </div>
                        <div class="col-md-7">
                           <div class="card-body p-4">
                              <span class="badge badge-warning px-2 py-1 mb-2">Grain / Feed</span>
                              <h4 class="font-weight-bold text-dark mb-1">Maize / Corn (Zea mays)</h4>
                              <p class="text-muted small mb-2"><strong>Varieties:</strong> BARI Hybrid Bhutta-9, Pioneer 30V92</p>
                              
                              <ul class="list-unstyled small text-muted mb-3">
                                 <li><strong>🌱 Soil:</strong> Deep fertile silt loam rich in organic matter</li>
                                 <li><strong>☀️ Climate:</strong> Warm sun (21-30°C), frost sensitive</li>
                                 <li><strong>🌾 Harvest:</strong> 90-120 days for dry grain or 75 days for sweet corn</li>
                              </ul>
                              <div class="bg-light p-2 rounded small">
                                 <strong>Nutritional Value:</strong> Carbohydrates, Vitamin A, Carotenoids, Poultry Feed.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- TAB 2: VEGETABLES -->
         <div class="tab-pane fade" id="vegetables" role="tabpanel">
            <div class="row">
               <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                     <div class="row no-gutters">
                        <div class="col-md-5">
                           <img src="<?php echo e(asset('frontend/images/service1.jpg')); ?>" class="card-img h-100" style="object-fit: cover;" alt="Organic Tomato">
                        </div>
                        <div class="col-md-7">
                           <div class="card-body p-4">
                              <span class="badge badge-success px-2 py-1 mb-2">Vegetable</span>
                              <h4 class="font-weight-bold text-dark mb-1">Solanum Lycopersicum (Tomato)</h4>
                              <p class="text-muted small mb-2"><strong>Varieties:</strong> BARI Tomato-14, Roma VF, Cherry Red</p>
                              
                              <ul class="list-unstyled small text-muted mb-3">
                                 <li><strong>🌱 Soil:</strong> Sandy loam rich in humus (pH 6.0 - 6.8)</li>
                                 <li><strong>☀️ Cultivation:</strong> Staking required, high Potassium feed</li>
                                 <li><strong>🌾 Harvest:</strong> 70-90 days after transplanting</li>
                              </ul>
                              <div class="bg-light p-2 rounded small">
                                 <strong>Nutritional Value:</strong> High Lycopene, Vitamin C, Potassium, Antioxidants.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                     <div class="row no-gutters">
                        <div class="col-md-5">
                           <img src="<?php echo e(asset('frontend/images/service2.jpg')); ?>" class="card-img h-100" style="object-fit: cover;" alt="Fresh Potato">
                        </div>
                        <div class="col-md-7">
                           <div class="card-body p-4">
                              <span class="badge badge-success px-2 py-1 mb-2">Root Vegetable</span>
                              <h4 class="font-weight-bold text-dark mb-1">Potato (Solanum tuberosum)</h4>
                              <p class="text-muted small mb-2"><strong>Varieties:</strong> Granola, Asterix, Diamant</p>
                              
                              <ul class="list-unstyled small text-muted mb-3">
                                 <li><strong>🌱 Soil:</strong> Loose, friable sandy loam avoiding compaction</li>
                                 <li><strong>☀️ Cultivation:</strong> Earthing up required 30 days after planting</li>
                                 <li><strong>🌾 Harvest:</strong> 80-100 days when haulms yellow</li>
                              </ul>
                              <div class="bg-light p-2 rounded small">
                                 <strong>Nutritional Value:</strong> Energy dense Starch, Potassium, Vitamin B6.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- TAB 3: FRUITS -->
         <div class="tab-pane fade" id="fruits" role="tabpanel">
            <div class="row">
               <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                     <div class="row no-gutters">
                        <div class="col-md-5">
                           <img src="<?php echo e(asset('frontend/images/news1.jpg')); ?>" class="card-img h-100" style="object-fit: cover;" alt="Mango Orchard">
                        </div>
                        <div class="col-md-7">
                           <div class="card-body p-4">
                              <span class="badge badge-primary px-2 py-1 mb-2">Fruit Crop</span>
                              <h4 class="font-weight-bold text-dark mb-1">Mango (Mangifera indica)</h4>
                              <p class="text-muted small mb-2"><strong>Varieties:</strong> Amrapali, Haribhanga, Fazli, Langra</p>
                              
                              <ul class="list-unstyled small text-muted mb-3">
                                 <li><strong>🌱 Soil:</strong> Deep alluvial loam with 2-3m water table</li>
                                 <li><strong>☀️ Cultivation:</strong> Grafting, pruning, fruit fly trapping</li>
                                 <li><strong>🌾 Harvest:</strong> May to August depending on cultivar</li>
                              </ul>
                              <div class="bg-light p-2 rounded small">
                                 <strong>Nutritional Value:</strong> Vitamin A, Vitamin C, Dietary Fiber, Polyphenols.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- TAB 4: CASH CROPS -->
         <div class="tab-pane fade" id="cash" role="tabpanel">
            <div class="row">
               <div class="col-md-6 mb-4">
                  <div class="card border-0 shadow-sm h-100">
                     <div class="row no-gutters">
                        <div class="col-md-5">
                           <img src="<?php echo e(asset('frontend/images/news2.jpg')); ?>" class="card-img h-100" style="object-fit: cover;" alt="Golden Jute">
                        </div>
                        <div class="col-md-7">
                           <div class="card-body p-4">
                              <span class="badge badge-danger px-2 py-1 mb-2">Fiber Cash Crop</span>
                              <h4 class="font-weight-bold text-dark mb-1">Golden Jute (Corchorus capsularis)</h4>
                              <p class="text-muted small mb-2"><strong>Varieties:</strong> O-9897 (Tossa), CVL-1 (White)</p>
                              
                              <ul class="list-unstyled small text-muted mb-3">
                                 <li><strong>🌱 Soil:</strong> Plain alluvial soil with high standing water tolerance</li>
                                 <li><strong>☀️ Cultivation:</strong> Broad sowing in March-April, retting in water</li>
                                 <li><strong>🌾 Harvest:</strong> 120 days at 50% pod formation stage</li>
                              </ul>
                              <div class="bg-light p-2 rounded small">
                                 <strong>Potential Uses:</strong> Biodegradable bags, textiles, geo-textiles, paper pulp.
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\NSDA\agri-hub\resources\views/frontend/crop-details.blade.php ENDPATH**/ ?>