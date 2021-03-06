<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Validator;
use DB;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $messages = DB::table('messages')->paginate(25);
      return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Message $message)
    {

      $validator = Validator::make($request->all(), [
         'email' => 'required|max:255',
         'name' => 'required',
         'body' => 'required'
     ]);

     if ($validator->fails()) {
         return redirect('/contact')
                     ->withErrors($validator)
                     ->withInput();
     }

      // If validation succe
      $message->email = $request->email;
      $message->name = $request->name;
      $message->body = $request->body;
      $message->save();
      return redirect('/contact')->with('status', 'Your message was sent!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);
        return view('messages.show', compact('message'));
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
        $message = Message::find($id);
        $message->delete();
        return redirect('home')->with('status', 'Message Deleted');
    }
}
