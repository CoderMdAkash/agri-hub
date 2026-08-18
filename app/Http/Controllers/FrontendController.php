<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Certification;
use App\Models\ContactMessage;
use App\Models\CropDetail;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Faq;
use App\Models\FarmingGuide;
use App\Models\PestControlStrategy;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // 1. Home Page Route (/)
    public function index()
    {
        $about = About::first() ?? new About();
        $guides = FarmingGuide::orderBy('order', 'asc')->take(3)->get();
        $crops = CropDetail::orderBy('order', 'asc')->take(4)->get();
        $pests = PestControlStrategy::orderBy('order', 'asc')->take(3)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();

        return view('frontend.index', compact(
            'about',
            'guides',
            'crops',
            'pests',
            'blogs'
        ));
    }

    // 2. About Page Route (/about)
    public function about()
    {
        $about = About::first() ?? new About();
        $guides = FarmingGuide::orderBy('order', 'asc')->take(3)->get();

        return view('frontend.about', compact('about', 'guides'));
    }

    // 3. Farming Guides Route (/farming-guides)
    public function farmingGuides()
    {
        $about = About::first() ?? new About();
        $guides = FarmingGuide::orderBy('order', 'asc')->get();

        return view('frontend.farming-guides', compact('about', 'guides'));
    }

    // 4. Crop Details Route (/crop-details)
    public function cropDetails()
    {
        $about = About::first() ?? new About();
        $crops = CropDetail::orderBy('order', 'asc')->get();
        $grains = CropDetail::where('category', 'Grains')->orderBy('order', 'asc')->get();
        $vegetables = CropDetail::where('category', 'Vegetables')->orderBy('order', 'asc')->get();
        $fruits = CropDetail::where('category', 'Fruits')->orderBy('order', 'asc')->get();
        $cashCrops = CropDetail::where('category', 'Cash Crops')->orderBy('order', 'asc')->get();

        return view('frontend.crop-details', compact('about', 'crops', 'grains', 'vegetables', 'fruits', 'cashCrops'));
    }

    // 5. Pest Control Strategies Route (/pest-control)
    public function pestControl()
    {
        $about = About::first() ?? new About();
        $pests = PestControlStrategy::orderBy('order', 'asc')->get();

        return view('frontend.pest-control', compact('about', 'pests'));
    }

    // 6. Contact Page Route (/contact)
    public function contact()
    {
        $about = About::first() ?? new About();
        return view('frontend.contact', compact('about'));
    }

    public function portfolio()
    {
        $about = About::first() ?? new About();
        $portfolios = Portfolio::orderBy('created_at', 'desc')->get();
        return view('frontend.portfolio', compact('about', 'portfolios'));
    }

    public function service()
    {
        $services = Service::orderBy('order', 'asc')->get();
        return view('frontend.service', compact('services'));
    }

    public function portfolioDetails($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $relatedPortfolios = Portfolio::where('id', '!=', $id)->take(3)->get();
        return view('frontend.portfolio-details', compact('portfolio', 'relatedPortfolios'));
    }

    public function blogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::where('id', '!=', $blog->id)->take(3)->get();
        return view('frontend.blog-details', compact('blog', 'recentBlogs'));
    }

    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:5',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:5120',
        ]);

        $attachmentPath = null;
        if ($request->hasFile('attachment')) {
            $attachmentPath = $request->file('attachment')->store('attachments', 'public');
        }

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject ?? ('Agricultural Expert Inquiry from ' . $request->name),
            'message' => "Phone: " . ($request->phone ?? 'N/A') . "\n\n" . $request->message,
            'attachment' => $attachmentPath,
        ]);

        return back()->with('success', 'Thank you! Your inquiry has been submitted successfully to our Agricultural Experts.');
    }
}
