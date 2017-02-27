<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware("auth", ["except"=>["index", "show"]]);

    }
    public function index()
    {
      $posts = Post::latest()
          ->with(["comments", "user"])
          ->filter(request(["month", "year"]))
          ->get();

      return view("posts.index", compact("posts"));
    }
    public function create()
    {
      return view("posts.create");
    }
    public function store()
    {
      $this->validate(request(),[
        "title" => "required|min:6",
        "body" => "required"
      ]);

      auth()->user()->posts()->create(
        request(["title", "body"])
      );


      return redirect("/");

    }

    public function show(Post $post)
    {

      return view("posts.show", compact("post"));
    }
}
