<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Summary of home
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home(){
        return view("home");
    }
     /**
      * Summary of cv
      * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
      */
     public function cv() {
        return view("cv");
     }
    /**
     * Summary of service
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function  service(){
        return view("service");
    }
    /**
     * Summary of branches
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function  branches(){
        return view("branches");
    }
    public function about(){
        return view("about");
    }
}

