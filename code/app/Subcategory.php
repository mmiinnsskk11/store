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
     * @param $delete
     * @return mixed
     */
    public function getSubcategories($delete = 0)
    {
        return $this->with('category')->where('delete', $delete)->get();
    }

    public function getSubcategoryById($id)
    {
        return $this->where('id', $id)->first();
    }
}
