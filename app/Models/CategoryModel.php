<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $fillable = [
    	'title'
    ];
}
