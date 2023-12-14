<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        return "Hello from postcontroller: index method";
    }

    public function viewPost($post_id,$username){
        return "This is post $post_id <br> from user: " . $username;
    }
    public function viewAllPosts(){
        return view('view-all');
    }
    public function viewUserPost($post_id,$username){
        return view('view-post')
                ->with('post_id',$post_id)
                ->with('uname',$username);
    }

    public function show($name){
        $name = strtoupper($name);

        $all_posts = [
            "How to make a french toast",
            "Japanese Cheesecake Recipe",
            "How to cook a Steak",
            "The best places in tokyo to get shokupan bread",
            "Camboadian style fried chicken"
        ];
    }

}
