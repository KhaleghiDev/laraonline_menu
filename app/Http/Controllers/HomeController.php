<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function changeLang(Request $request){
        $lang = $request->segment(1);
     
        $langs=["en","ar","fa"];
        if(!isset($lang )&& in_array($lang,$langs)){
         return redirect()->route("lang");
        }
    
        app()->setLocale($lang);
        // dd(app()->getLocale());
        
        return view("home",compact("lang"));

    }
    /**
     * Summary of home
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home(){
        $lang=request()->segment(1);
        app()->setLocale($lang);
        return view("home" ,compact("lang"));
    }
     /**
     * Summary of home
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function lang(){
        
        return view("lang");
    }
     /**
      * Summary of cv
      * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
      */
     public function cv() {
        $lang=request()->segment(1);
        app()->setLocale($lang);
        $component="cv";
        $title="رزومه موسس";
        return view("layouts_master.page",compact("title",'component','lang'));
     }
    /**
     * Summary of service
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function  service(){
        $lang=request()->segment(1);
        app()->setLocale($lang);
        $component="service";
        $title="خدمات  ما ";
        return view("layouts_master.page",compact("title",'component','lang'));
    }
    /**
     * Summary of branches
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function  branches(){
        $lang=request()->segment(1);
        app()->setLocale($lang);
        $component="branches";
        $title="شعبات ما ";
        return view("layouts_master.page",compact("title",'component','lang'));
    }
    public function about(){
        $lang=request()->segment(1);
        app()->setLocale($lang);
        $component="about";
        $title="درباره ما ";
        return view("layouts_master.page",compact("title",'component','lang'));
    }
    public function branchesInput(){
        $lang=request()->segment(1);
        app()->setLocale($lang);
        
        
        $component="branchesInput";
        
        $title="شعبه های ما ";
        return view("layouts_master.page",compact("title",'component','lang'));
    }
    public function branchesOutput(){
        $lang=request()->segment(1);
        app()->setLocale($lang);
        $lang=request()->segment(1);
        $component="branchesOutput";
        $title="شعبه های ما ";
        return view("layouts_master.page",compact("title",'component','lang'));
    }
}

