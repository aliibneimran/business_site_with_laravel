<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $service = Service::count();
        $category = Category::count();
        $team = Team::count();
        $contact = Contact::count();
        return view('backend.dashboard', compact('service', 'category', 'team', 'contact'));
    }
}
