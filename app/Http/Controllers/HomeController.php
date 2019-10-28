<?php

namespace App\Http\Controllers;


use App\Models\MenuModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $listMenu = MenuModel::where('_id','=','583fa0b639ac651a9b71a411')->get();
        foreach ($listMenu as &$value) {
        	$childs = $value->children;
            foreach ($childs as $key => $val) {
                $value->childModel = MenuModel::where('_id','=', $val)->first(); 
            }
        }
        dd($listMenu);
        return view('home', [
            'menu' => $listMenu
        ]);

    }
}
