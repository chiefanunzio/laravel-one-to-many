<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;      
class crudController extends Controller
{   
    public function homeFun(){
   
        $posts = Post::all();
           
        return view('pages.home', compact('posts'));      
    }
}      
   