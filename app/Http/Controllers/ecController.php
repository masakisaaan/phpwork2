<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ecController extends Controller
{
    public function index(){
        $alcohol = \DB::table('alcohol')->get();
        return view('index',compact('alcohol'));
    }

     public function cart(){
        $alcohol = session()->get("alcohol",[]);
        return view("cart",compact('alcohol'));
    }
}