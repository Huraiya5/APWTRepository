<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // 
        public function home(){
        return view('home');
    }
        public function ourteams(){
        return view('ourTeams');
    }
        public function aboutus(){
        return view('aboutUs');
    }

        public function contactus(){
        return view('contactUs');
    }
}
