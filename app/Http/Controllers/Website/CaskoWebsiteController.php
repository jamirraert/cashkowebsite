<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaskoWebsiteController extends Controller
{
    public function home()
    {
        return view('website.pages.home');
    }

    public function privacyPolicy(){
        return view('website.pages.privacypolicy');
    }
}
