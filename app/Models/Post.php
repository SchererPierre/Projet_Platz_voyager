<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function category () 
    {
      return $this->belongsTo(\App\Models\Category::class, 'categories_id');
    }

    public function author () 
    {
      return $this->belongsTo(\App\Models\Author::class, 'authors_id');
    }

}
