<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $blog = Blog::all();
        return view('frontend.home', compact('blog'));
    }
    public function about()
    {
        $team = Team::all();
        return view('frontend.about', compact('team'));
    }
    public function service()
    {
        $services = Service::all();
        return view('frontend.service', compact('services'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function gallery()
    {
        $glry = Gallery::all();
        return view('frontend.gallery', compact('glry'));
    }
    public function blog()
    {
        $blog = Blog::all();
        return view('frontend.blog', compact('blog'));
    }
    public function faq()
    {
        $faq = Faq::all();
        return view('frontend.faq', compact('faq'));
    }
    
}
