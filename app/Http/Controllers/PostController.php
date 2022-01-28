<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
    {   
        return view('blog-post',compact('post'));
    }

    public function create()
    {   
        return view('admin.post.create');
    }

    public function store(Request $request)
    {   
        $inputs = request()->validate([
            
            'title'=>'required|min:10|max:255',
            'post_image' =>'mimes:jpeg,jpg,png',
            'body'=>'required'   
        ]);

        if (request('post_image')){
            $inputs['post_image']=request('post_image')->store('images');
        }
        
        auth()->user()->posts()->create($inputs);

        return back();
    }



}
