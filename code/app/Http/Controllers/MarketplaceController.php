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
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Catalog $catalog)
    {
        $products = $catalog->getCatalog();
        return view('marketplace.index', compact('products'));
    }


}
