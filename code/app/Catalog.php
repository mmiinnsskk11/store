<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';

    protected $fillable = [
        'categories_id', 'subcategories_id', 'name', 'description', 'cost', 'reserve', 'active', 'delete'
    ];
}
