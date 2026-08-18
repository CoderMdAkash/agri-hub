@extends('layouts.frontend')

@section('title', 'Pest Control Strategies & IPM Guide - Agricultural Information Hub')

@section('meta_description', 'Integrated Pest Management (IPM) strategies, pest identification, organic remedies, biological controls, and early detection guidelines.')

@section('body_class', 'inner_page')

@section('content')
<div class="services mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center mb-5">
            <div class="titlepage">
               <span>Plant Health & Protection</span>
               <h2>PEST CONTROL STRATEGIES & IPM GUIDE</h2>
               <p class="lead text-muted mt-2">Identify common crop pests, prevent infestations early, and implement eco-friendly biological & organic controls.</p>
            </div>
         </div>
      </div>

      <!-- Integrated Pest Management (IPM) Pillars -->
      <div class="row mb-5">
         <div class="col-md-12">
            <div class="card border-0 shadow-sm p-4 bg-success text-white">
               <h3 class="font-weight-bold text-white mb-3"><i class="fa fa-shield-alt mr-2"></i> The 4 Pillars of Integrated Pest Management (IPM)</h3>
               <div class="row text-center text-dark mt-4">
                  <div class="col-md-3 mb-3">
                     <div class="bg-white p-3 rounded h-100">
                        <h5 class="font-weight-bold text-success">1. Prevention</h5>
                        <p class="small text-muted mb-0">Crop rotation, clean seeds, field sanitation, resistant cultivars.</p>
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <div class="bg-white p-3 rounded h-100">
                        <h5 class="font-weight-bold text-success">2. Monitoring</h5>
                        <p class="small text-muted mb-0">Yellow sticky traps, pheromone lures, field scouting twice weekly.</p>
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <div class="bg-white p-3 rounded h-100">
                        <h5 class="font-weight-bold text-success">3. Biological Control</h5>
                        <p class="small text-muted mb-0">Ladybugs, Trichogramma wasps, Bacillus thuringiensis (Bt).</p>
                     </div>
                  </div>
                  <div class="col-md-3 mb-3">
                     <div class="bg-white p-3 rounded h-100">
                        <h5 class="font-weight-bold text-success">4. Organic Remedies</h5>
                        <p class="small text-muted mb-0">Neem oil spray, bio-pesticides, garlic extract, soapy water solution.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Common Pest Identification & Treatment Grid -->
      <div class="row">
         <div class="col-md-12 mb-4">
            <h3 class="font-weight-bold text-dark border-bottom pb-2">Common Crop Pests & Disease Identification</h3>
         </div>

         <!-- Pest 1 -->
         <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
               <div class="card-body p-4">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <span class="badge badge-danger px-3 py-1">Insect Pest</span>
                     <small class="text-muted">Target: Paddy Rice & Maize</small>
                  </div>
                  <h4 class="font-weight-bold text-dark">Fall Armyworm (Spodoptera frugiperda)</h4>
                  <p class="text-muted small"><strong>Identification:</strong> Dark caterpillars with inverted 'Y' mark on head and 4 square spots on tail segment.</p>
                  
                  <div class="bg-light p-3 rounded mt-3">
                     <h6 class="font-weight-bold text-danger mb-1">Treatment & Management:</h6>
                     <ul class="pl-3 mb-0 small text-muted">
                        <li><strong>Early Action:</strong> Handpick egg masses and apply sawdust into leaf whorls.</li>
                        <li><strong>Biological:</strong> Release Trichogramma egg parasitoids at 50,000/ha.</li>
                        <li><strong>Organic Remedy:</strong> Spray Neem Seed Kernel Extract (NSKE 5%) or Spynosad.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         <!-- Pest 2 -->
         <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
               <div class="card-body p-4">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <span class="badge badge-warning px-3 py-1">Sucking Pest</span>
                     <small class="text-muted">Target: Vegetables & Fruits</small>
                  </div>
                  <h4 class="font-weight-bold text-dark">Aphids & Whiteflies (Bemisia tabaci)</h4>
                  <p class="text-muted small"><strong>Identification:</strong> Tiny green/white sucking insects clustering under leaves causing leaf curling and sticky honeydew mold.</p>
                  
                  <div class="bg-light p-3 rounded mt-3">
                     <h6 class="font-weight-bold text-danger mb-1">Treatment & Management:</h6>
                     <ul class="pl-3 mb-0 small text-muted">
                        <li><strong>Monitoring:</strong> Erect yellow sticky traps (15-20 traps per acre).</li>
                        <li><strong>Predators:</strong> Encourage Ladybird beetles (Coccinellidae) and Lacewings.</li>
                        <li><strong>Organic Remedy:</strong> Spray 5ml/L Neem Oil mixed with 2ml insecticidal soap.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         <!-- Disease 3 -->
         <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
               <div class="card-body p-4">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <span class="badge badge-info px-3 py-1">Fungal Disease</span>
                     <small class="text-muted">Target: Tomato & Potato</small>
                  </div>
                  <h4 class="font-weight-bold text-dark">Late Blight (Phytophthora infestans)</h4>
                  <p class="text-muted small"><strong>Identification:</strong> Water-soaked dark lesions on leaf margins with white fuzzy growth underneath during humid weather.</p>
                  
                  <div class="bg-light p-3 rounded mt-3">
                     <h6 class="font-weight-bold text-danger mb-1">Treatment & Management:</h6>
                     <ul class="pl-3 mb-0 small text-muted">
                        <li><strong>Prevention:</strong> Ensure wide plant spacing for airflow and avoid overhead watering.</li>
                        <li><strong>Organic Remedy:</strong> Spray Copper Oxychloride (3g/L) or Trichoderma viride bio-fungicide.</li>
                        <li><strong>Sanitation:</strong> Immediately remove and burn infected vines; do not compost.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

         <!-- Pest 4 -->
         <div class="col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
               <div class="card-body p-4">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                     <span class="badge badge-secondary px-3 py-1">Livestock Health</span>
                     <small class="text-muted">Target: Cattle, Sheep & Goats</small>
                  </div>
                  <h4 class="font-weight-bold text-dark">Livestock Parasites & Tick Management</h4>
                  <p class="text-muted small"><strong>Identification:</strong> Ticks, lice, and internal helminth worms reducing milk yield and causing anemia in livestock.</p>
                  
                  <div class="bg-light p-3 rounded mt-3">
                     <h6 class="font-weight-bold text-danger mb-1">Treatment & Management:</h6>
                     <ul class="pl-3 mb-0 small text-muted">
                        <li><strong>Pasture Rotation:</strong> Rotate grazing pastures every 3 weeks to break parasite life cycles.</li>
                        <li><strong>Herbal Wash:</strong> Apply neem leaf extract or tobacco decoction on animal hides.</li>
                        <li><strong>Deworming:</strong> Deworm herd seasonally before monsoon onset with advice from extension vet.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </div>
</div>
@endsection
