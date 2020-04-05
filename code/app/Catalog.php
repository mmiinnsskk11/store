<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $table = 'catalogs';

    protected $fillable = ['name', 'description', 'img', 'cost', 'comment_id', 'active', 'delete'];
}
