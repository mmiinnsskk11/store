<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Category $category)
    {
        $categories = $category->getCategories();
        return view('admin.category.index', compact('categories'));
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
     * @param Category $categories
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoriesRequest $request,
                          Category $categories)
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
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Category $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $categories, int $id)
    {
        $category = $categories->getCategoryById($id);
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoriesRequest $request
     * @param Category $categories
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoriesRequest $request, Category $categories)
    {
        try {
            $categories->where('id', $request->category)->update([
                    'name' => $request->name,
                    'description' => $request->description
                ]);
        } catch (\Exception $e) {
            return redirect()->route('category.index')->with('error', 'Возникла ошибка повторите еще раз');
        }
        return redirect()->route('category.index')->with('success', 'Категория успешно обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $categories,
                            int $id)
    {
        dd($categories);
    }
}
