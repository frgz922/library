<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function books()
    {
        return $this->hasMany('App\Models\Books', 'category_id');
    }
}
