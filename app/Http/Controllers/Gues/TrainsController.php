<?php

namespace App\Http\Controllers\Gues;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index(){
        $data = config("db_partials", "dbPartials");
        $trains = Train::all();
        return view('home', compact("trains", "data"));
    }
    public function showOrder($order){
        $data = config("db_partials", "dbPartials");
        $trains = Train::orderBy($order, "asc")->get();
        return view('home', compact("trains", "data"));
    }
}
