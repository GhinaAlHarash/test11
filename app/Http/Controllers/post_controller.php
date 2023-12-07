<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post_controller extends Controller
{
    public function date(){
        return 1010;
    }
    public function name(){
        return "me";
    }
    public function show(){
        return "im a post";
    }
}
