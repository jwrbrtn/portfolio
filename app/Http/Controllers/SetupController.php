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
         'sitetitle' => 'required',
         'name' => 'required',
         'avatar' => 'required',
         'bio' => 'required',
         'twitter' => 'required',
         'github' => 'required',
     ]);

     if ($validator->fails()) {
         return redirect('setup/')
                     ->withErrors($validator)
                     ->withInput();
     }

     $path = $request->file('avatar')->store('avatars');
      // If everything validates then do this
      $settings->sitetitle = $request->sitetitle;
      $settings->name = $request->name;
      $settings->bio = $request->bio;
      $settings->twitter = $request->twitter;
      $settings->github = $request->github;
      $settings->avatar = $path;
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
        //
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
        //
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
