<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function exit(Request $request)
    {
        Auth::logout();
        $request->session()->put('auth', false);
        return view('main');
    }
    //
}
