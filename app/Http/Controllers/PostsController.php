<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Input;
use Mews\Purifier\Facades\Purifier;
use Validator;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {

      $validator = Validator::make($request->all(), [
         'title' => 'required|unique:posts|max:255',
         'slug' => 'required|unique:posts|max:255',
         'editordata' => 'required',
     ]);

     if ($validator->fails()) {
         return redirect('post/new')
                     ->withErrors($validator)
                     ->withInput();
     }
      // If everything validates then do this
      $post->title = $request->title;
      $clean = Purifier::clean(Input::get('editordata'));
      $post->body = $clean;

      $stripped = strip_tags($clean);
      $post->excerpt = substr($stripped,0,350) . "...";
      //$post->featureimage = $path;
      $post->slug = $request->slug;
      $post->save();
      return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.show', compact('post'));
    }



    public function showAll(Post $post){
      $posts = DB::table('posts')->paginate(10);
      return view('posts.showAll', compact('posts'));
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->delete();
        return redirect('/');
    }
}
