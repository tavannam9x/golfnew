<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\PostModel;
use App\Models\VideoModel;    

class VideoController extends Controller
{
    public function index()
    {

        $show= PostModel::where('_id','=','5d9b31d74c9c99238c1fab28')->get();
        return view('video', [
            'videos' => $show
        ]);

    }
}
