<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Validator;


class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function showHomePage(Setting $setting){
       $settings = $setting->first();
       return view('welcome', compact('settings'));
     }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Setting $settings)
    {
      $validator = Validator::make($request->all(), [
         'name' => 'required',
         'bio' => 'required',
         'twitter' => 'required',
         'github' => 'required',
     ]);

     if ($validator->fails()) {
         return redirect('setup/')
                     ->withErrors($validator)
                     ->withInput();
     }


      // If everything validates then do this
      $settings->name = $request->name;
      $settings->subtitle = $request->subtitle;
      $settings->bio = $request->bio;
      $settings->github = $request->github;
      $settings->twitter = $request->twitter;
      $settings->footer = $request->footer;
      $settings->save();
      return redirect('home')->with('status', 'Installation complete!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings = Setting::find($id);
        return view('setup.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $settings = Setting::find($id);
      $settings->name = $request->name;
      $settings->subtitle = $request->subtitle;
      $settings->bio = $request->bio;
      $settings->github = $request->github;
      $settings->twitter = $request->twitter;
      $settings->footer = $request->footer;
      $settings->save();
      return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
