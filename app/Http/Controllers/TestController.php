<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class TestController extends Controller
{
    public function test1(){
        $pages = Page::All();

        foreach ($pages as $page) {
            echo "$page->name - ($page->description)";
            echo '<br>';
        }
    }
}
