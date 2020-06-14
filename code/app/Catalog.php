<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';

    protected $fillable = [
        'categories_id', 'subcategories_id', 'name', 'description', 'cost', 'reserve', 'active', 'delete'
    ];

    public function images()
    {
        return $this->hasMany(Image::class, 'product_id','id');
    }

    /**
     * @param int $page
     * @param int $delete
     * @param int $active
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getCatalogs($page = 30, $delete = 0, $active = 1)
    {
        return $this->with('images')->where([
            'delete' => $delete, 'active' => $active
        ])->paginate($page);
    }

    public function getCatalog($categories_id, $page = 30, $delete = 0, $active = 1)
    {
        return $this->with('images')->where([
            'delete' => $delete, 'active' => $active, 'categories_id' => $categories_id
        ])->paginate($page);
    }

    public function getProducts($active = 1, $limit = 5)
    {
        return $this->where('active', $active)->orderBy('id')->limit($limit)->get();
    }
}
