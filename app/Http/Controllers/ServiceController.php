<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function strategic_marketing(){

        return view('site.strategic_marketing');
    }

    public function branding_design(){

        return view('site.branding_design');
    }

    public function websites_applications(){

        return 'Website and Application Development';
    }

    public function social_media_management(){
        return 'Social Media Management';
    }

    public function tools_integrations(){
        return 'Tools and Integrations';
    }
}
