<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $table = 'publishers';

    public function books()
    {
        return $this->hasMany('App\Models\Books', 'publisher_id');
    }
}
