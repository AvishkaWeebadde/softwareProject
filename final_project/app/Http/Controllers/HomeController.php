<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$products = Products::take(20)->get();
        //$products = Products::latest()->get();
        $products = DB::table('products')->orderBy('id','desc')->get();
        //$products = Products::latest()->get();
        return view('home',['allProducts'=> $products]);
    }
}
