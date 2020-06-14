<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->header();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Catalog $catalog)
    {
        $product = $catalog->getProducts();
        return view('home', compact('product'));
    }

    public function aboutAs()
    {
        return view('about-as.about-as');
    }

    public function contact()
    {
        return view('about-as.contact');
    }

    public function contactData()
    {
        return view('about-as.contact-data');
    }
}
