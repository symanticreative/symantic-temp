<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function about(){
        return view('site.about');
    }

    public function sbds(){
        return view('site.sbds');
    }
}
