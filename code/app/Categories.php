<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'img', 'description'];


    /**
     * Запрос на получение записи по id категории
     *
     * @param $id
     * @return mixed
     */
    public function getCategoryById($id)
    {
        return $this->where('id', $id)->first();
    }
}
