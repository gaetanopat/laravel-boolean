<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // per la homepage
    public function homepage(){
      // ritorno la view della home
      return view('home');
    }
    // per la pagina privacy-policy
    public function privacyPolicy(){
      return view('privacy-policy');
    }
    // per la pagina work-with-us
    public function workwithUs(){
      return view('work-with-us');
    }
}
