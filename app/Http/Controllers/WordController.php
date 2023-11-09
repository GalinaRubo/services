<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function check()
    {
        return view('word');
    }

    public function word(Request $request){
       
            $value = $request->input('inputWord');
            if ( $value == "Please") $word = true;
            else $word = false;
        
        return view('auth/register',['word'=>$word]);
    }
    //
}
