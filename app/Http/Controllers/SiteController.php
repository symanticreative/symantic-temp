<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;

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

    public function works(){

        $test = Cloudder::secureShow('Adobe_Spark_3_zfrfx6',['crop'=> 'crop','height'=>'100','format' => 'jpg' ]);
        return view('site.works',compact('test'));
    }
}
