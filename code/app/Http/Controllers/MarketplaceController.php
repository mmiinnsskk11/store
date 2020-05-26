<?php

namespace App\Http\Controllers;

use App\Catalog;
use App\Subcategory;
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

    public function show($name, Subcategory $subcategory)
    {
        $subcategory = $subcategory->getSubcategoryByCategory($name);
        return view('marketplace.show', compact('subcategory', 'name'));
    }


}
