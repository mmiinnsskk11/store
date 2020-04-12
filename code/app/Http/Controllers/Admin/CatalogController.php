<?php

namespace App\Http\Controllers\Admin;

use App\Catalog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Services\CreateProduct;
use App\Services\UploadImage;
use App\Subcategory;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Catalog $catalog)
    {
        $catalog = $catalog->getCatalog();
        return view('admin.catalog.index', compact('catalog'));
    }

    /**
     * Show the form for creating a new resource.
     * @param Category $categories
     * @param Subcategory $subcategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Category $categories,
                           Subcategory $subcategory)
    {
        $categories = $categories->all();
        $subcategories = $subcategory->all();
        return view('admin.catalog.create',
            compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @param CreateProduct $createProduct
     */
    public function store(Request $request,
                          CreateProduct $createProduct)
    {
        return $createProduct->createProduct($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(Catalog $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalog $catalog)
    {
        //
    }
}
