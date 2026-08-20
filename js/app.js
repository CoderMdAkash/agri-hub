/* ==========================================================================
   Agri-Hub Interactive Application JavaScript
   Dependencies: jQuery 3.x, Bootstrap Modal / Accordion / Carousel
   ========================================================================== */

$(document).ready(function () {

    // Default fallback data for local file:// protocol preview
    var defaultContentData = {
        "resources": [
            {
                "id": 1,
                "title": "Farming Guides & Practices",
                "category": "Methodology",
                "image": "images/service1.jpg",
                "description": "Step-by-step tutorials on soil preparation, seasonal crop schedules, organic farming, and micro-drip irrigation.",
                "fullDetails": "Comprehensive guide covering land tilling, organic manure application, seed germination testing, and water-saving precision micro-drip techniques tailored for optimal seasonal yield.",
                "buttonText": "View Details"
            },
            {
                "id": 2,
                "title": "Crop Science & Profiles",
                "category": "Crop Science",
                "image": "images/service2.jpg",
                "description": "Catalog covering grains, fruits, vegetables, and cash crops with soil specs, climate requirements, and harvesting.",
                "fullDetails": "Detailed catalog with soil requirements, recommended growth temperature (20°C - 32°C), harvesting schedules, and nutritional profiles for major cereal, vegetable, and cash crops.",
                "buttonText": "View Details"
            },
            {
                "id": 3,
                "title": "Integrated Pest Control",
                "category": "Plant Protection",
                "image": "images/service3.jpg",
                "description": "IPM techniques, biological insect controls, bio-neem remedies, and early pest symptom identification.",
                "fullDetails": "Integrated Pest Management (IPM) guide featuring organic neem oil spray preparation, yellow sticky traps, predatory insect deployment, and early fungal blight detection.",
                "buttonText": "View Details"
            }
        ],
        "farmingGuides": [
            {
                "id": 101,
                "title": "Paddy Rice Cultivation Guide",
                "category": "Cereal Crops",
                "image": "images/service1.jpg",
                "description": "Complete guide from seed bed preparation, seedling transplanting, water management to harvesting.",
                "fullDetails": "Comprehensive paddy rice production manual outlining field levelling, puddle tillage, 14-day seedling transplantation, weed management, and grain drying standards.",
                "buttonText": "Read Guide"
            },
            {
                "id": 102,
                "title": "Soil Testing & NPK Fertilizer Management",
                "category": "Soil Science",
                "image": "images/service2.jpg",
                "description": "Understand soil pH levels, organic composting, and balanced NPK fertilizer application ratios.",
                "fullDetails": "Soil fertility guide detailing soil core sampling, electrical conductivity testing, organic compost enrichment, and split application of Nitrogen (Urea), Phosphorus (TSP), and Potassium (MoP).",
                "buttonText": "Read Guide"
            },
            {
                "id": 103,
                "title": "High Yield Vegetable Farming",
                "category": "Horticulture",
                "image": "images/service3.jpg",
                "description": "Modern greenhouse and open field vegetable production practices for maximum market yield.",
                "fullDetails": "Horticultural production guide focusing on raised bed cultivation, plastic mulching for moisture retention, vertical trellis netting, and micro-nutrient foliar sprays.",
                "buttonText": "Read Guide"
            },
            {
                "id": 104,
                "title": "Smart Micro-Drip Irrigation Systems",
                "category": "Irrigation",
                "image": "images/chose.jpg",
                "description": "Conserve up to 60% water using gravity drip lines and solar-powered fertigation setups.",
                "fullDetails": "Technical installation and maintenance guide for micro-drip emitters, sand filters, pressure regulators, and venturi fertigation injectors in high-value crop fields.",
                "buttonText": "Read Guide"
            }
        ],
        "pestControl": [
            {
                "id": 301,
                "title": "Yellow Stem Borer Management",
                "targetCrop": "Rice / Paddy",
                "symptom": "Dead hearts in vegetative stage and white heads at flowering stage",
                "remedy": "Deploy Trichogramma egg parasitoids, install light traps, spray 5% Neem seed kernel extract (NSKE).",
                "image": "images/news2.jpg"
            },
            {
                "id": 302,
                "title": "Tomato Late Blight Control",
                "targetCrop": "Tomato & Potato",
                "symptom": "Water-soaked dark lesions on leaf edges and white mold growth beneath leaves",
                "remedy": "Foliar spray copper oxychloride or Trichoderma harzianum bio-fungicide during high humidity.",
                "image": "images/service3.jpg"
            },
            {
                "id": 303,
                "title": "Fall Armyworm (FAW) IPM Strategy",
                "targetCrop": "Maize / Corn",
                "symptom": "Ragged holes on whorl leaves and sawdust-like frass inside crop whorls",
                "remedy": "Apply Spinetoram or Bacillus thuringiensis (Bt) dust directly into crop whorls.",
                "image": "images/service2.jpg"
            }
        ],
        "faqs": [
            {
                "id": 401,
                "category": "General",
                "question": "What is the primary mission of the Agricultural Information Hub (Agri-Hub)?",
                "answer": "Agri-Hub is a free digital platform dedicated to empowering farmers and extension agents with scientific crop information, seasonal calendars, IPM pest remedies, and direct access to agricultural specialists."
            },
            {
                "id": 402,
                "category": "Cultivation",
                "question": "How can I request a soil test for my agricultural land?",
                "answer": "You can fill out our Specialist Advisory form on the Contact page or visit your nearest Upazila Agriculture Office (DAE). Collect 10-15 soil core samples at a 15cm depth across your plot for accurate lab testing."
            },
            {
                "id": 403,
                "category": "Pest Control",
                "question": "What are organic alternatives to synthetic chemical pesticides?",
                "answer": "Organic options include 5% Neem Seed Kernel Extract (NSKE), yellow & blue sticky pheromone traps, biopesticides like Trichoderma and Bacillus thuringiensis, and encouraging natural predators like ladybird beetles."
            },
            {
                "id": 404,
                "category": "Irrigation",
                "question": "What is Alternate Wetting and Drying (AWD) in paddy farming?",
                "answer": "AWD is a water-saving technology where paddy fields are allowed to dry periodically until water level drops 15 cm below soil surface before re-flooding. This saves up to 30% irrigation water without reducing yield."
            }
        ]
    };

    var loadedData = defaultContentData;

    // Inject Simple & Clean Detail Modal
    if (!$('#agriDetailModal').length) {
        var modalHtml = `
        <div class="modal fade" id="agriDetailModal" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="agriModalTitle">Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                    </button>
                 </div>
                 <div class="modal-body text-left">
                    <img id="agriModalImage" src="" alt="Details" class="img-fluid rounded mb-3 w-100" style="max-height: 220px; object-fit: cover;">
                    <p id="agriModalDesc" class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;"></p>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm px-4" data-dismiss="modal">Close</button>
                 </div>
              </div>
           </div>
        </div>`;
        $('body').append(modalHtml);
    }

    // Render Home Core Resources
    function renderHomeResources(data) {
        if ($('#resources-container').length && data.resources) {
            var html = '';
            $.each(data.resources, function (i, item) {
                html += `
                <div class="col-lg-4 col-md-6 mb-4">
                   <div class="agri-card">
                      <div class="agri-card-img-wrap">
                         <img src="${item.image}" alt="${item.title}">
                      </div>
                      <div class="agri-card-body">
                         <h3 class="agri-card-title">${item.title}</h3>
                         <p class="agri-card-text">${item.description}</p>
                         <div class="agri-card-footer">
                            <button class="btn btn-agri btn-sm open-agri-modal" data-type="resources" data-id="${item.id}">
                               View Details
                            </button>
                         </div>
                      </div>
                   </div>
                </div>`;
            });
            $('#resources-container').html(html);
        }
    }

    // Render Farming Guides Page
    function renderGuidesPage(data) {
        if ($('#guides-grid-container').length && data.farmingGuides) {
            var html = '';
            var items = data.farmingGuides;

            if (items.length === 0) {
                html = `<div class="col-12 text-center py-5">
                          <h4 class="text-muted">No farming guides available.</h4>
                        </div>`;
            } else {
                $.each(items, function (i, item) {
                    html += `
                    <div class="col-lg-4 col-md-6 mb-4">
                       <div class="agri-card">
                          <div class="agri-card-img-wrap">
                             <img src="${item.image}" alt="${item.title}">
                          </div>
                          <div class="agri-card-body">
                             <h3 class="agri-card-title">${item.title}</h3>
                             <p class="agri-card-text">${item.description}</p>
                             <div class="agri-card-footer">
                                <button class="btn btn-agri btn-sm open-agri-modal" data-type="farmingGuides" data-id="${item.id}">
                                   View Details
                                </button>
                             </div>
                          </div>
                       </div>
                    </div>`;
                });
            }

            $('#guides-grid-container').html(html);
        }
    }

    // Render Pest Control Page
    function renderPestPage(data, searchQuery) {
        if ($('#pest-grid-container').length && data.pestControl) {
            var html = '';
            var items = data.pestControl;

            if (searchQuery) {
                var query = searchQuery.toLowerCase().trim();
                items = items.filter(function (pest) {
                    return pest.title.toLowerCase().includes(query) ||
                           pest.targetCrop.toLowerCase().includes(query) ||
                           pest.symptom.toLowerCase().includes(query);
                });
            }

            $.each(items, function (i, pest) {
                html += `
                <div class="col-lg-4 col-md-6 mb-4">
                   <div class="agri-card">
                      <div class="agri-card-img-wrap">
                         <img src="${pest.image}" alt="${pest.title}">
                      </div>
                      <div class="agri-card-body">
                         <h3 class="agri-card-title text-danger">${pest.title}</h3>
                         <div class="mb-2 small">
                            <strong class="text-dark">Symptom:</strong>
                            <span class="text-muted">${pest.symptom}</span>
                         </div>
                         <div class="mb-3 small">
                            <strong class="text-dark">IPM Remedy:</strong>
                            <span class="text-muted">${pest.remedy}</span>
                         </div>
                         <div class="agri-card-footer">
                            <button class="btn btn-agri btn-sm bg-danger border-danger open-agri-modal" data-type="pestControl" data-id="${pest.id}">
                               View Details
                            </button>
                         </div>
                      </div>
                   </div>
                </div>`;
            });
            $('#pest-grid-container').html(html);
        }
    }

    // Render FAQ Accordion
    function renderFAQPage(data, searchQuery) {
        if ($('#faq-accordion-container').length && data.faqs) {
            var html = '';
            var items = data.faqs;

            if (searchQuery) {
                var query = searchQuery.toLowerCase().trim();
                items = items.filter(function (faq) {
                    return faq.question.toLowerCase().includes(query) ||
                           faq.answer.toLowerCase().includes(query) ||
                           faq.category.toLowerCase().includes(query);
                });
            }

            $.each(items, function (i, faq) {
                var collapseId = 'faqCollapse' + faq.id;
                var headingId = 'faqHeading' + faq.id;
                var isFirst = i === 0;

                html += `
                <div class="card mb-3 border">
                   <div class="card-header" id="${headingId}">
                      <button class="btn btn-link ${isFirst ? '' : 'collapsed'}" type="button" data-toggle="collapse" data-target="#${collapseId}" aria-expanded="${isFirst ? 'true' : 'false'}" aria-controls="${collapseId}">
                         <span><span class="badge badge-success mr-2">${faq.category}</span> ${faq.question}</span>
                      </button>
                   </div>
                   <div id="${collapseId}" class="collapse ${isFirst ? 'show' : ''}" aria-labelledby="${headingId}" data-parent="#faq-accordion-container">
                      <div class="card-body">
                         ${faq.answer}
                      </div>
                   </div>
                </div>`;
            });

            $('#faq-accordion-container').html(html);
        }
    }

    // Modal Trigger Event Handler - Simple & Clean
    $(document).on('click', '.open-agri-modal', function (e) {
        e.preventDefault();
        var type = $(this).data('type');
        var id = $(this).data('id');
        var list = loadedData[type] || defaultContentData[type];

        var item = list.find(function (x) { return x.id == id; });

        if (item) {
            $('#agriModalTitle').text(item.title || item.name);
            $('#agriModalImage').attr('src', item.image).attr('alt', item.title || item.name);
            
            var textContent = item.fullDetails || item.description || item.remedy || item.symptom || '';
            $('#agriModalDesc').text(textContent);
            
            $('#agriDetailModal').modal('show');
        }
    });

    // Live Search & Filter Handlers
    $('#pest-search-input').on('keyup', function () {
        var query = $(this).val();
        renderPestPage(loadedData, query);
    });

    $('#faq-search-input').on('keyup', function () {
        var query = $(this).val();
        renderFAQPage(loadedData, query);
    });

    // Contact Form Submission Handler
    $('#request, #contact-form').on('submit', function (e) {
        e.preventDefault();
        var form = $(this);
        var submitBtn = form.find('button[type="submit"]');

        submitBtn.html('Submitting...').prop('disabled', true);

        setTimeout(function () {
            submitBtn.html('Inquiry Sent!').prop('disabled', false);

            var alertHtml = `
            <div class="alert alert-success alert-dismissible fade show mt-3 shadow-sm" role="alert">
               <strong>Thank You!</strong> Your inquiry has been dispatched to our Agricultural Advisory Specialist Team. We will contact you within 24 hours.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>`;

            form.after(alertHtml);
            form[0].reset();

            setTimeout(function () {
                submitBtn.html('Submit Inquiry');
            }, 3000);
        }, 800);
    });

    // Initial Data Fetch Execution
    function initAll(data) {
        loadedData = data;
        renderHomeResources(data);
        renderGuidesPage(data);
        renderPestPage(data, '');
        renderFAQPage(data, '');
    }

    $.ajax({
        url: 'data/content.json',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            initAll(data);
        },
        error: function () {
            console.log('Using default dataset fallback.');
            initAll(defaultContentData);
        }
    });
});
