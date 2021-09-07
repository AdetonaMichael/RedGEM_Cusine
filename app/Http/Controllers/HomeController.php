<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function adminhome(){
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view(route('adminhome'));
        }else{
            return view('home');
        }
    }
    public function subscribe(){
        return view('subscribe');
    }
}
