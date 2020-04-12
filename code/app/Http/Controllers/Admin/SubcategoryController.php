<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $categories, Subcategory $subcategory)
    {
        $categories = $categories->getCategories();
        $subcategories = $subcategory->getSubcategories();
        return view('admin.subcategory.index',
            compact('categories', 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Subcategory $subcategory)
    {
        try {
            $subcategory->create($request->all());
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->route('subcategories.index')->with('error', 'Возникла ошибка повторите еще раз');
        }
        return redirect()->route('subcategories.index')->with('success', 'Категория успешно добавлена');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param $id
     * @param Subcategory $subcategory
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $subcategory = new Subcategory();
        $subcategory = $subcategory->getSubcategoryById($id);
        $category = new Category();
        $categories = $category->getCategories();
        return view('admin.subcategory.edit',
            compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        try {
            $subcategory->where('id', $request->category)->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
        } catch (\Exception $e) {
            return redirect()->route('subcategories.index')->with('error', 'Возникла ошибка повторите еще раз');
        }
        return redirect()->route('subcategories.index')->with('success', 'Категория успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }
}
