<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';

    public function authors()
    {
        return $this->belongsTo('App\Models\Authors', 'author_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Models\Categories', 'category_id');
    }

    public function publishers()
    {
        return $this->belongsTo('App\Models\Publishers', 'publisher_id');
    }
}
