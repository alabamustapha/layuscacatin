<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $timestamp = false;

    protected $fillable = ['name', 'category_id'];
}
