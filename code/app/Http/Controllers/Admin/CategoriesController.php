<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Categories::all();
        return view('admin.categories.index', compact('categories'));
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
     * @param CategoriesRequest $request
     * @param Categories $categories
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoriesRequest $request,
                          Categories $categories)
    {
        try {
            $categories->create($request->all());
        } catch (\Exception $e) {
            return redirect()->route('categories.index')->with('error', 'Возникла ошибка повторите еще раз');
        }
        return redirect()->route('categories.index')->with('success', 'Категория успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories, int $id)
    {
        $category = $categories->getCategoryById($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoriesRequest $request
     * @param Categories $categories
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoriesRequest $request, Categories $categories)
    {
        try {
            $categories->where('id', $request->category)->update([
                    'name' => $request->name,
                    'description' => $request->description
                ]);
        } catch (\Exception $e) {
            return redirect()->route('categories.index')->with('error', 'Возникла ошибка повторите еще раз');
        }
        return redirect()->route('categories.index')->with('success', 'Категория успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $categories,
                            int $id)
    {
        dd($categories);
    }
}
