<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GardController extends Controller
{
    public function index(){

        {
            $products = DB::table('products')->get()->toArray();
            return view('catalog', ['products' => $products]);
        }
        return view('catalog');
    }

    public function logout(Request $request){

        {
            $request->session()->forget('auth');
        }
        return view('main');
    }
}
