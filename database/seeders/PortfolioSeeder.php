<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Super Admin User (DAE Extension Officer)
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Agricultural Extension Officer',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // 2. About Info for Agricultural Information Hub (কৃষি তথ্য হাব)
        About::updateOrCreate(
            ['id' => 1],
            [
                'name' => 'Agricultural Information Hub (কৃষি তথ্য হাব)',
                'title' => 'National Agricultural Extension & Information Resource Center',
                'location' => 'DAE Khamarbari, Farmgate, Dhaka-1215, Bangladesh',
                'bio' => 'The Agricultural Information Hub (কৃষি তথ্য হাব) is Bangladesh\'s premier digital platform dedicated to empowering farmers, extension agents, and agricultural entrepreneurs. Developed under national agricultural extension directives, our hub delivers verified crop production guides, soil health management, Integrated Pest Management (IPM), and direct consultation with certified agricultural extension specialists across all 64 districts of Bangladesh.',
                'mission' => 'To boost national food security, increase crop yields for Bangladeshi farmers, and promote sustainable climate-smart agricultural practices through modern digital extension services.',
                'vision' => 'To establish a digitally connected, climate-resilient, and prosperous farming community across Bangladesh where every farmer has instant access to expert agricultural solutions.',
                'exp_years' => 25,
                'completed_projects' => 64,
                'happy_clients' => 50000,
                'email' => 'info@agrihub.gov.bd',
                'phone' => '16123 (Kishan Call Center) / +880 2-9110345',
                'cv_link' => 'frontend/images/about_img.jpg',
                'image' => 'frontend/images/about_img1.jpg',
            ]
        );

        // 3. Official Agricultural Services Offered
        $services = [
            [
                'title' => 'Crop Health & Symptom Diagnosis (ফসল রোগ নির্ণয়)',
                'description' => 'Submit plant symptom descriptions or upload photo attachments for immediate diagnosis by DAE plant pathologists and extension officers.',
                'icon' => 'fa-solid fa-microscope',
                'order' => 1,
            ],
            [
                'title' => 'Soil Health & Fertilizer Advisory (মাটি পরীক্ষা ও সার পরামর্শ)',
                'description' => 'Get customized NPK, organic vermicompost, and micronutrient (Zinc/Boron) dosing tailored to Upazila soil fertility maps and crop target yields.',
                'icon' => 'fa-solid fa-flask-vial',
                'order' => 2,
            ],
            [
                'title' => 'Integrated Pest & Disease Control (আইপিএম ব্যবস্থাপনা)',
                'description' => 'Receive eco-friendly Integrated Pest Management (IPM) guidelines, sex pheromone trap setups, and bio-pesticide recommendations for crop protection.',
                'icon' => 'fa-solid fa-shield-virus',
                'order' => 3,
            ],
            [
                'title' => 'Climate-Smart Farming & Irrigation (জলবায়ু-সহনশীল কৃষি ও সেচ)',
                'description' => 'Expert guidance on Floating Bed Agriculture (ধাপ চাষ), flood/salinity-tolerant BRRI paddy seeds, and micro-drip fertigation for drought-prone regions.',
                'icon' => 'fa-solid fa-cloud-sun-rain',
                'order' => 4,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['title' => $service['title']],
                $service
            );
        }

        // 4. Agricultural Articles & News (Blogs)
        $blogs = [
            [
                'title' => 'BRRI Releases High-Yield Salinity & Zinc Enriched Rice Varieties (ব্রি নতুন ধান)',
                'slug' => 'brri-zinc-salinity-rice-varieties',
                'excerpt' => 'Bangladesh Rice Research Institute (BRRI) has developed BRRI Dhan-84, 100 & 102 to combat malnutrition and coastal salinity.',
                'content' => 'Bangladesh Rice Research Institute (BRRI) scientists have successfully released climate-smart rice varieties including biofortified zinc rice (BRRI Dhan-84 & 102) and submergence-tolerant rice (BRRI Dhan-51 & 52). These varieties allow coastal farmers in Satkhira, Khulna, and Barishal to achieve high yields even in saline-affected soils during the Boro and Aman seasons.',
                'category' => 'Crop Research',
                'image' => 'frontend/images/news1.jpg',
            ],
            [
                'title' => 'Modern Farm Mechanization: Combined Harvester Subsidy Scheme in Bangladesh',
                'slug' => 'farm-mechanization-combined-harvester-bangladesh',
                'excerpt' => 'Department of Agricultural Extension (DAE) provides 50%-70% subsidy on combined harvesters, reapers, and transplanters for smallholder farmers.',
                'content' => 'To address seasonal agricultural labor shortages during Haor and Boro paddy harvesting, the Ministry of Agriculture is offering up to 70% matching grants for modern agricultural machinery. Farmers forming custom hiring groups can harvest 1 acre of paddy within 45 minutes, reducing grain loss from 15% to under 2%.',
                'category' => 'Mechanization',
                'image' => 'frontend/images/news2.jpg',
            ],
            [
                'title' => 'Organic Vermicompost Production: A Profitable Venture for Rural Entrepreneurs',
                'slug' => 'organic-vermicompost-production-bangladesh',
                'excerpt' => 'Rural youth and women farmers across Bogura, Rangpur, and Jessore are producing high-grade organic fertilizer using red earthworms.',
                'content' => 'Vermicomposting using Eisenia fetida earthworms converts cow dung and crop residue into nutrient-rich organic manure within 45 days. This eco-friendly bio-fertilizer restores depleted soil organic matter, improves water retention, and provides a sustainable income source for rural farm households.',
                'category' => 'Organic Farming',
                'image' => 'frontend/images/news3.jpg',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::updateOrCreate(
                ['slug' => $blog['slug']],
                $blog
            );
        }
    }
}
