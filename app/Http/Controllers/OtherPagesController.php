<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherPagesController extends Controller
{
    public function privacyPolicy(){
        return view('pages.other-pages.privacy-policy');
    }
}
