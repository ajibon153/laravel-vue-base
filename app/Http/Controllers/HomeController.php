<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class HomeController extends Controller
{
    //

    public function index(){
        $pages = Page::All();
        $pageDetail = Page::where('id',1)->first();
        return view("website.Home",['pages'=>$pages,'pageDetail'=>$pageDetail]);
    }

    public function page($pageId){
        $pages = Page::All();
        $pageDetail = Page::where('id',$pageId)->first();
        return view("website.Home",['pages'=>$pages,'pageDetail'=>$pageDetail]);
    }

    public function ContactUs(){
        $pages = Page::All();
        return view("website.ContactUs",['pages'=>$pages]);
    }

    public function sendMessage(Request $request){
        $input = $request->all();
        dd($input);
        // echo $input;
    }
}
