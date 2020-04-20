<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    protected $category;
    /**
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public function header()
    {
        $category = new Category();
        $category = $category->getCategories();
        view()->share('category', $category);
    }
}
