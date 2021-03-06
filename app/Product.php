<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';
    protected $fillable = [
    	'title',
    	'sku',
    	'description',
    	'price',
    	'status',
    	'thumbnail'
    ];

    public $timestamps = false;
}
