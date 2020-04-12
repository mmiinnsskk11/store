<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'name', 'img', 'description'
    ];


    /**
     * Запрос на получение записи по id категории
     * @param $id
     * @return mixed
     */
    public function getCategoryById($id)
    {
        return $this->where('id', $id)->first();
    }


    /**
     * Запрос на получение всех активных категорий
     * @param int $delete
     * @return mixed
     */
    public function getCategories($delete = 0)
    {
        return $this->where('delete', $delete)->get();
    }
}
