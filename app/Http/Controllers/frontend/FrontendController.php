<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
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
        return view('frontend.blog');
    }
    public function faq()
    {
        $faq = Faq::all();
        return view('frontend.faq', compact('faq'));
    }
    
}
