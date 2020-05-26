<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscribers';

    protected $fillable = [
        'email'
    ];

    public function getSubscribers(int $page = 30)
    {
        return $this->paginate($page);
    }
}
