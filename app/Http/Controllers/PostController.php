<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
        $header = 'All Post';
        $posts = Post::all();
        return view('admin.pages.home',compact('posts','header'));
    }
    public function show($id){
        $header = 'Post';
        $post = Post::find($id);
        return view('admin.pages.show',compact('post','header'));
    }
    public function create(){
        $header = 'Create Post';
        $categories = Category::all();
        return view('admin.pages.create',compact('categories','header'));
    }
    public function store(){
        $this->validate(request(),[
           'title' => 'required',
           'category_id' => 'required',
           'content' => 'required'
        ]);
        Post::create([
            'title' => request('title'),
            'category_id' => request('category_id'),
            'content' => request('content')
        ]);
        return redirect()->route('index');
    }
    public function edit($id){
        $header = 'Edit Post';
        $post = Post::find($id);
        $categories = Category::all();
        return view('admin.pages.edit',compact('post','categories','header'));
    }
    public function update($id){
        $post = Post::find($id);
        $this->validate(request(),[
           'title' => 'required',
           'category_id' => 'required',
           'content' => 'required|min:20'
        ]);
        $post->update([
           'title' => request('title'),
           'category_id' => request('category_id'),
           'content' => request('content')
        ]);
        return redirect()->route('index');
    }
    public function destroy($id){
        $post = Post::find($id);
        $post->delete();

        return redirect()->back();
    }
}
