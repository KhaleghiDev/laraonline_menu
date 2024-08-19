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
        $component="cv";
        $title="رزومه موسس";
        return view("layouts_master.page",compact("title",'component'));
     }
    /**
     * Summary of service
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function  service(){
        $component="service";
        $title="خدمات  ما ";
        return view("layouts_master.page",compact("title",'component'));
    }
    /**
     * Summary of branches
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function  branches(){
        $component="branches";
        $title="شعبات ما ";
        return view("layouts_master.page",compact("title",'component'));
    }
    public function about(){
        $component="about";
        $title="درباره ما ";
        return view("layouts_master.page",compact("title",'component'));
    }
    public function branchesInput(){
        $component="branchesInput";
        $title="شعبه های ما ";
        return view("layouts_master.page",compact("title",'component'));
    }
    public function branchesOutput(){
        $component="branchesOutput";
        $title="شعبه های ما ";
        return view("layouts_master.page",compact("title",'component'));
    }
}

