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

    public function getCatalog($page = 30, $delete = 0, $active = 1)
    {
        return $this->with('images')->where([
            'delete' => $delete, 'active' => $active
        ])->paginate($page);
    }
}
