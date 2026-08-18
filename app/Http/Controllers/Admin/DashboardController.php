<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\CropDetail;
use App\Models\FarmingGuide;
use App\Models\PestControlStrategy;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'farming_guides' => FarmingGuide::count(),
            'crop_details' => CropDetail::count(),
            'pest_controls' => PestControlStrategy::count(),
            'messages' => ContactMessage::count(),
            'unread_messages' => ContactMessage::where('is_read', false)->count(),
            'services' => Service::count(),
            'blogs' => Blog::count(),
        ];

        $recentMessages = ContactMessage::orderBy('created_at', 'desc')->take(5)->get();
        $recentGuides = FarmingGuide::orderBy('created_at', 'desc')->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentMessages', 'recentGuides'));
    }
}
