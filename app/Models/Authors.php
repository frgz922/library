<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $table = 'authors';

    public function books()
    {
        return $this->hasMany('App\Models\Books', 'author_id');
    }
}
