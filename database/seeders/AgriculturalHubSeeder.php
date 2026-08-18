<?php

namespace Database\Seeders;

use App\Models\CropDetail;
use App\Models\FarmingGuide;
use App\Models\PestControlStrategy;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AgriculturalHubSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Seed Authentic Bangladesh Farming Guides
        $guides = [
            [
                'title' => 'High-Yield Boro & Aman Paddy Cultivation (উচ্চ ফলনশীল আমন ও বোরো ধান চাষ)',
                'category' => 'Seasonal Farming (মৌসুমী চাষ)',
                'season' => 'Boro (বোরো) & Aman (আমন)',
                'summary' => 'Comprehensive DAE guide for BRRI Dhan-28, BRRI Dhan-29, and flood-tolerant BRRI Dhan-51 nursery management, transplanting, and AWD irrigation.',
                'step1_title' => 'Seed Selection & Nursery (বীজ শোধন ও বীজতলা)',
                'step1_detail' => 'Soak certified BRRI seeds in Carbendazim solution (2g/L) for 24h. Raise wet nursery beds for 20-25 days.',
                'step2_title' => 'Line Transplanting (লাইন রোপণ)',
                'step2_detail' => 'Transplant 2-3 seedlings per hill in 20cm x 20cm rows for optimum light interception and tillering.',
                'step3_title' => 'AWD Irrigation & Split Urea (আওড সেচ ও উপরি প্রয়োগ)',
                'step3_detail' => 'Install perforated PVC pipe for Alternate Wetting & Drying (AWD). Apply Urea in 3 split doses (15, 30, 45 DAT).',
                'image' => 'frontend/images/service3.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Floating Bed Agriculture for Wetland Areas (ধাপ চাষ / ভাসমান সবজি চাষ)',
                'category' => 'Climate-Smart Method (জলবায়ু-সহনশীল পদ্ধতি)',
                'season' => 'Monsoon & Year-round',
                'summary' => 'Traditional Bangladesh UNESCO-recognized organic technique (Gopalganj/Pirojpur/Barisal) using water hyacinth rafts for growing flood-proof vegetables.',
                'step1_title' => 'Raft Construction (ধাপ তৈরি)',
                'step1_detail' => 'Compact water hyacinth (কচুড়িপানা) layers to 1-1.5m thickness and allow 15-20 days natural decomposition.',
                'step2_title' => 'Tema Compost Balls (টেমা / পেঁজা তৈরি)',
                'step2_detail' => 'Roll decomposed hyacinth compost into small Tema balls to wrap vegetable seeds.',
                'step3_title' => 'Sowing & Harvesting (বীজ বপন ও ফলন)',
                'step3_detail' => 'Plant bottle gourd, cucumber, okra, and red amaranth on rafts for 100% organic flood-proof yield.',
                'image' => 'frontend/images/service2.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Soil Testing & Balanced Micronutrient Management (মাটি পরীক্ষা ও সুষম সার প্রয়োগ)',
                'category' => 'Soil & Land Prep (মাটি ও জমি প্রস্তুত)',
                'season' => 'Year-round',
                'summary' => 'Maintain optimum soil organic matter (2%+) and pH (6.0-7.0) to overcome Zinc and Boron deficiencies in Bangladeshi soils.',
                'step1_title' => 'Soil Sampling (মাটির নমুনা সংগ্রহ)',
                'step1_detail' => 'Collect Z-pattern core samples at 15cm depth across Upazila field blocks.',
                'step2_title' => 'Organic Enrichment (জৈব সার প্রয়োগ)',
                'step2_detail' => 'Mix 5-8 metric tons/ha of well-rotted vermicompost or cow dung during final land preparation.',
                'step3_title' => 'Micronutrient Dosing (জিঙ্ক ও বোরন প্রয়োগ)',
                'step3_detail' => 'Apply Zinc Sulfate (10 kg/ha) and Solubor Boron (5 kg/ha) during basal fertilization.',
                'image' => 'frontend/images/service1.jpg',
                'order' => 3,
            ],
            [
                'title' => 'Modern Drip & Fertigation Setup for Barind Region (আধুনিক ড্রিপ ও সেচ প্রযুক্তি)',
                'category' => 'Smart Technology (স্মার্ট প্রযুক্তি)',
                'season' => 'Rabi Season (শীতকালীন)',
                'summary' => 'Save up to 40% water and electricity in dry high-land regions (Rajshahi, Dinajpur) for high-value fruits and vegetables.',
                'step1_title' => 'Header Pipe & Disk Filter',
                'step1_detail' => 'Install disk filter and pressure control valve near submersible pump.',
                'step2_title' => 'Lateral Drip Tubes',
                'step2_detail' => 'Lay inline drippers at root zone distances of 30cm for tomato, chili, and mango orchards.',
                'step3_title' => 'Venturi Fertigation',
                'step3_detail' => 'Inject water-soluble fertilizers directly into stream for 95% plant nutrient absorption.',
                'image' => 'frontend/images/about_img.jpg',
                'order' => 4,
            ],
        ];

        foreach ($guides as $guide) {
            FarmingGuide::updateOrCreate(
                ['slug' => Str::slug($guide['title'])],
                array_merge($guide, ['slug' => Str::slug($guide['title'])])
            );
        }

        // 2. Seed Authentic Bangladesh Crop Details
        $crops = [
            [
                'name' => 'Aman & Boro Paddy Rice (ধান)',
                'scientific_name' => 'Oryza sativa',
                'category' => 'Grains',
                'varieties' => 'BRRI Dhan-28, BRRI Dhan-29, BRRI Dhan-89, BRRI Dhan-92, BRRI Dhan-51 (Submergence Tolerant)',
                'soil_type' => 'Clay loam & silt loam plain soils (pH 5.5 - 6.8)',
                'climate' => 'Tropical monsoon, 22-32°C, 1500-2500mm rainfall',
                'harvest_days' => '135-155 days (Boro) / 115-135 days (Aman)',
                'nutritional_value' => 'Staple food of Bangladesh. Rich in Carbohydrates, Protein (7.5g/100g), Biofortified Zinc (Zinc Rice), Energy (360 kcal).',
                'image' => 'frontend/images/service3.jpg',
                'order' => 1,
            ],
            [
                'name' => 'Wheat (গম - বাড়ি গম-৩৩)',
                'scientific_name' => 'Triticum aestivum',
                'category' => 'Grains',
                'varieties' => 'BARI Gom-33 (Blast Resistant & Zinc Enriched), Prodip (BARI Gom-24), BARI Gom-30',
                'soil_type' => 'Well-drained sandy loam to clay loam (pH 6.0 - 7.5)',
                'climate' => 'Cool dry winter (12-24°C), irrigated Rabi season',
                'harvest_days' => '105-115 days',
                'nutritional_value' => 'Dietary Fiber, Protein (12g/100g), Bio-fortified Zinc (50ppm), Iron, Vitamin B-Complex.',
                'image' => 'frontend/images/service1.jpg',
                'order' => 2,
            ],
            [
                'name' => 'Potato (আলু - ডায়মন্ট / এস্টেরিক্স / গ্র্যানোলা)',
                'scientific_name' => 'Solanum tuberosum',
                'category' => 'Vegetables',
                'varieties' => 'BARI Alu-7 (Granola), Asterix, Diamant, BARI Alu-25',
                'soil_type' => 'Friable sandy loam rich in organic matter (pH 5.2 - 6.4)',
                'climate' => 'Cool winter (15-20°C)',
                'harvest_days' => '85-95 days',
                'nutritional_value' => 'Potassium (420mg/100g), Vitamin C, Vitamin B6, Carbohydrates for national food security.',
                'image' => 'frontend/images/service2.jpg',
                'order' => 3,
            ],
            [
                'name' => 'Mango (আম - আম্রপালি / হাড়িভাঙ্গা / ল্যাংড়া)',
                'scientific_name' => 'Mangifera indica',
                'category' => 'Fruits',
                'varieties' => 'Amrapali, Haribhanga (Rangpur), Langra (Rajshahi/Chapainawabganj), Fazli, BARI Aam-4',
                'soil_type' => 'Deep well-drained alluvial soil (pH 5.5 - 7.5)',
                'climate' => 'Tropical dry summer (24-38°C)',
                'harvest_days' => 'May to August',
                'nutritional_value' => 'King of Fruits in Bangladesh. High Vitamin A (Beta-Carotene), Vitamin C, Digestive Enzymes, Fiber.',
                'image' => 'frontend/images/news1.jpg',
                'order' => 4,
            ],
            [
                'name' => 'Tossa & White Jute (পাট - তোষা ও সাদা পাট)',
                'scientific_name' => 'Corchorus olitorius / C. capsularis',
                'category' => 'Cash Crops',
                'varieties' => 'O-9897 (Tossa Jute), BJRI Tossa-8, CVL-1 (White Jute)',
                'soil_type' => 'Rich alluvial silt loam (pH 6.0 - 7.2)',
                'climate' => 'Hot humid monsoon (24-37°C), 1500+ mm rainfall',
                'harvest_days' => '110-120 days',
                'nutritional_value' => 'Golden Fiber of Bangladesh. Biodegradable packaging, Geo-textiles, Export currency earner.',
                'image' => 'frontend/images/news2.jpg',
                'order' => 5,
            ],
            [
                'name' => 'Mustard (সরিষা - বাড়ি সরিষা-১৪)',
                'scientific_name' => 'Brassica juncea',
                'category' => 'Cash Crops',
                'varieties' => 'BARI Sarisha-14, BARI Sarisha-15, BARI Sarisha-17',
                'soil_type' => 'Loam to clay loam soils (pH 6.0 - 7.5)',
                'climate' => 'Short cool winter (15-25°C)',
                'harvest_days' => '75-85 days (Fits between Aman and Boro paddy!)',
                'nutritional_value' => 'Essential Bangladesh cooking oil. High Erucic & Oleic Acid, Omega-3 fatty acids, Mustard oil cake.',
                'image' => 'frontend/images/chose.jpg',
                'order' => 6,
            ],
        ];

        foreach ($crops as $crop) {
            CropDetail::updateOrCreate(
                ['name' => $crop['name']],
                $crop
            );
        }

        // 3. Seed Authentic Bangladesh Pest Management (IPM) Strategies
        $pests = [
            [
                'title' => 'Brown Plant Hopper / Current Poka (কারেন্ট পোকা - BPH)',
                'target_crops' => 'Boro & Aman Paddy Rice',
                'type' => 'Sucking Pest',
                'identification' => 'Small brown bugs congregating at stem bases near water line, causing rapid yellowing and circular field burning (Hopper Burn / হপার বার্ন).',
                'prevention' => 'Avoid excessive Urea fertilizer. Drain water from paddy fields for 3-4 days to expose nymph bases to sun.',
                'biological_control' => 'Protect natural predators like Mirid Bugs (Cyrtorhinus lividipennis) and Lycosa wolf spiders in paddy ecosystems.',
                'organic_remedy' => 'Spray Neem Seed Kernel Extract (NSKE 5%) or Pymetrozine / Triflumezopyrim directly at lower stem bases.',
                'image' => 'frontend/images/news3.jpg',
                'order' => 1,
            ],
            [
                'title' => 'Rice Stem Borer / Majra Poka (মাজরা পোকা)',
                'target_crops' => 'Paddy Rice',
                'type' => 'Insect Pest',
                'identification' => 'Larvae bore into stem tillers causing "Dead Heart" (মরা ডিগ) during vegetative stage and "White Head" (সাদা শীষ) during flowering.',
                'prevention' => 'Set up Light Traps (আলোক ফাঁদ) at night. Clip leaf tips before seedling transplanting to destroy egg masses.',
                'biological_control' => 'Release Trichogramma japonicum egg parasitoid wasps (50,000/ha).',
                'organic_remedy' => 'Apply Cartap Hydrochloride or Chlorantraniliprole granules into standing water.',
                'image' => 'frontend/images/service3.jpg',
                'order' => 2,
            ],
            [
                'title' => 'Fall Armyworm (ফল আর্মিওয়ার্ম)',
                'target_crops' => 'Maize (ভুট্টা) & Paddy Rice',
                'type' => 'Insect Pest',
                'identification' => 'Dark green/brown caterpillars with inverted Y mark on head and 4 black spots on tail, devouring maize leaf whorls.',
                'prevention' => 'Intercrop maize with leguminous crops (cowpea) and place sawdust/sand inside leaf whorls.',
                'biological_control' => 'Perch T-shaped bird stands across fields for natural predation.',
                'organic_remedy' => 'Spray Spinetoram or Bacillus thuringiensis (Bt) bio-insecticide in early morning.',
                'image' => 'frontend/images/news2.jpg',
                'order' => 3,
            ],
            [
                'title' => 'Potato Late Blight / Morok Roga (আলুর মড়ক রোগ)',
                'target_crops' => 'Potato (আলু) & Tomato (টমেটো)',
                'type' => 'Fungal Disease',
                'identification' => 'Water-soaked dark spots on leaf edges with white cottony mold under leaves during cold, foggy, humid weather.',
                'prevention' => 'Plant certified disease-free seed tubers. Maintain wide ridge spacing and avoid late evening sprinkler irrigation.',
                'biological_control' => 'Treat seed tubers with Trichoderma harzianum bio-fungicide before planting.',
                'organic_remedy' => 'Spray Mancozeb / Cymoxanil or Copper Oxychloride (3g/L) immediately upon DAE fog alerts.',
                'image' => 'frontend/images/service1.jpg',
                'order' => 4,
            ],
            [
                'title' => 'Brinjal Fruit & Shoot Borer (বেগুন ডগা ও ফল ছিদ্রকারী পোকা)',
                'target_crops' => 'Eggplant / Brinjal (বেগুন)',
                'type' => 'Insect Pest',
                'identification' => 'Caterpillars bore into tender shoots causing wilting tips and drill holes inside brinjal fruits filled with frass.',
                'prevention' => 'Install Sex Pheromone Traps (ফেরোমোন ফাঁদ - 12-15 traps per bigha). Promptly clip and destroy wilted shoot tips.',
                'biological_control' => 'Use Bt Brinjal cultivars (bjt-01 to bjt-04) developed by BARI.',
                'organic_remedy' => 'Spray Neem Oil (5ml/L) with soap solution or Emamectin Benzoate.',
                'image' => 'frontend/images/service2.jpg',
                'order' => 5,
            ],
        ];

        foreach ($pests as $pest) {
            PestControlStrategy::updateOrCreate(
                ['title' => $pest['title']],
                $pest
            );
        }
    }
}
