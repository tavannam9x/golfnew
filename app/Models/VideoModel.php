<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class VideoModel extends Model
{
    protected $table = 'categories';
    protected $fillable = [
    	'title','parent','slug','path',
    ];

}
