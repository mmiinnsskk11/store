<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

class MarketplaceController extends Controller
{

    public function __construct()
    {
        $this->header();
    }

    /**
     * Display a listing of the resource.
     * @param Catalog $catalog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Catalog $catalog)
    {
        $products = $catalog->getCatalogs();
        return view('marketplace.index', compact('products'));
    }

    public function show($name, Catalog $catalog)
    {
        $products = $catalog->getCatalog($name);
        return view('marketplace.index', compact('products'));
    }


}
