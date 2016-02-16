<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
//use Request;


class PostsController extends Controller
{
    public function index()
	{
		$posts = Post::orderby('name', 'ASC')->get();
		
		return view ('posts.index', compact('posts')); 
	}
	
	public function create()
	{
		return view ('posts.create');
	}
	
	public function store(PostRequest $request)
	{
		//name is a required field
		//validation would be triggered before this runs
		
		//$input = Request::all();  <- no longer needed
		
		Post::create($request->all());
		
		return redirect('posts');
	}
	
	
	//when user visists edit page
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return view('posts.edit', compact('post'));
	}
	
	//when user hits update button
	public function update($id, PostRequest $request)
	{
		$post = Post::findOrFail($id);
		
		$post->update($request->all());
		
		return redirect('posts');
	}
	
	
	public function destroy($id)
	{
    	$post = Post::findOrFail($id);
    	
    	$post->delete();

    	return redirect('posts');
	}
	
	 
}