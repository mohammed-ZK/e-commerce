<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('home.userpage',compact('data'));
    }
    public function redirect(){
        $userType = Auth::user()->userType;
        if ($userType=='1') {
            return view('admin.home');
        }else{
            return view('home.userpage');
        }
    }
}
