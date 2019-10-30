<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function pages(){
        return view('pages.pages');
    }
    public function contact(){
        return view('pages.contact');
    }
    
}