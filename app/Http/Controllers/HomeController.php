<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Setting $setting)
    {
        $settings = $setting->first();
        $storagepath = storage_path();
        $posts = Post::all()->count();



        return view('home', compact('settings', 'storagepath', 'posts'));
    }
}
