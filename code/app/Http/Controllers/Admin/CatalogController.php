<?php

namespace App\Http\Controllers\Admin;

use App\Catalog;
use App\Category;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
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
        $catalog = $catalog->getCatalogs();
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
     * @param ProductService $createProduct
     */
    public function store(Request $request,
                          ProductService $createProduct)
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
     * @param Catalog $catalog
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Catalog $catalog, Category $category, Subcategory $subcategory)
    {
        $categories = $category->getCategories();
        $subcategories = $subcategory->getSubcategories();
        return view('admin.catalog.edit', compact('catalog', 'categories', 'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog, ProductService $productService)
    {
        return $productService->updateProduct($request, $catalog);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalog $catalog)
    {
        $catalog->delete();
        return redirect()->route('catalog.index');
    }
}
