<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    //
    public function signin() {
        return view('signin');
    }
    public function signup() {
        return view('signup');
    }
    public function products(Request $request){
        $text = $request['product'];
        return view('products')->with(['result'=>$text]);
    }
}
