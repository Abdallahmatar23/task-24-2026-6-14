<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::Paginate(10);
        $categories = Category::all();
        return view('client.home',['posts' => $posts]);
    }

    public function show($id){

    }
    public function admin(){

    }
}
