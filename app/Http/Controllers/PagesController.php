<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    public function index(){
        return view('pages.index');
    }
    public function program(){
        return view('pages.program');
    }
    public function news(){
        return view('pages.news');
    }
    public function member(){
        return view('pages.member');
    }
    public function contact(){
        return view('pages.contact');
    }
    
}