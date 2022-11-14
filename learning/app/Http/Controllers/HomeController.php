<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index($name=null)
    // {
    //     $hello='hello ';
    //     return view('Home')->with([
    //         'hello'=> $hello,
    //         'name'=> $name
    //     ]);

    // }

    public function index()
    {

        // $posts=[['id'=> 1,'title'=> 'post title 1','body'=> 'post body 1',],['id'=> 2,'title'=> 'post title 2','body'=> 'post body 2',],['id'=> 3,'title'=> 'post title 3','body'=> 'post body 3',]];
        // $posts = Post::all();
        $posts = Post::paginate(8);
        return view('/home')->with([
            'posts' => $posts,

        ]);
    }

    
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('/show')->with([
            'post' => $post,
        ]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $post= new Post();
        $post->title =$request->title;
        $post->slug =Str::slug($request->title);
        $post->body =$request->body;
        $post->image ='https://via.placeholder.com/640x480.png/00ee44?text=odit';
        $post->save() ;

    }
}
