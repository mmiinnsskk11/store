<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategory';

    protected $fillable = [
        'category_id', 'name', 'delete', 'description'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    /**
     * Запрос на получение всех подкатегорий
     * @param int $page
     * @param int $delete
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getSubcategories($page = 12, $delete = 0)
    {
        return $this->with('category')->where('delete', $delete)
            ->latest('id')->paginate($page);
    }

    /**
     * @param $category_id
     * @param int $page
     * @param int $delete
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getSubcategoryByCategory($category_id, $page = 12, $delete = 0)
    {
        return $this->with('category')
            ->where(['delete' => $delete, 'category_id' => $category_id])
            ->latest('id')->paginate($page);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getSubcategoryById($id)
    {
        return $this->where('id', $id)->first();
    }
}
