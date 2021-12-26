<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function index1(){
        return view('pages.product');
    }
    public function index2(){
        return view('pages.news');
    }
}
