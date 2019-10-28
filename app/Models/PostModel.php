<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $fillable = [
    	'category','title','slug','post_type','post_format','thumblnail','chapeau','youtube_url'
    ];
    
}
