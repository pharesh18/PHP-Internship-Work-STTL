<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome(){
        return view("page/home");
    }

    public function getBlog(){
        return view("page/blog");
    }

    public function getUser(string $id){
        return view("page/user", ['id' => $id]);
    }
}