<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $post;
    public function __construct(Post $post) // $post = new Post();
    {
        $this->post = $post;
    }
    //
    public function index()
    {
        return "Hello from postcontroller: index method";
    }

    public function viewPost($post_id, $username)
    {
        return "This is post $post_id <br> from user: " . $username;
    }
    public function viewAllPosts()
    {
        return view('view-all');
    }
    public function viewUserPost($post_id, $username)
    {
        return view('view-post')
            ->with('post_id', $post_id)
            ->with('uname', $username);
    }

    public function show($name)
    {
        $name = strtoupper($name);

        $all_posts = [
            "How to make a french toast",
            "Japanese Cheesecake Recipe",
            "How to cook a Steak",
            "The best places in tokyo to get shokupan bread",
            "Camboadian style fried chicken"
        ];
    }

    // controller with eloquent
    public function store()
    {
        // INSERT INTO posts
        $this->post->title = "Hello World";
        $this->post->content = "This is my first eloquent";
        $this->post->save();
    }
    public function display(){
        $all_post = $this->post->all();

        foreach($all_post as $post){
            echo "title: " . $post->title;
            echo "<br>";
            echo "content: " . $post->content;
            echo "<br>";
        }
    }
    public function oneData($id){
        $post = $this->post->findOrFail($id);

        return $post->title ."<br>". $post->content;
    }

    // find how to create update in eloquent
}
