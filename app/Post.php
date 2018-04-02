<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'featureimage'];


    function getAllPosts(){
      $posts = DB::table('posts')->orderBy('created_at', 'desc')->get();
      return $posts;
    }



}
