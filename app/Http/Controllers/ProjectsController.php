<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Input;
use Mews\Purifier\Facades\Purifier;

use Validator;
use DB;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = DB::table('projects')->paginate(5);
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    public function showAll(Project $project)
    {
      $projects = DB::table('projects')->paginate(10);
      return view('projects.showAll', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
          $validator = Validator::make($request->all(), [
             'title' => 'required|unique:projects|max:255',
             'slug' => 'required|unique:projects|max:255',
             'editordata' => 'required',
         ]);

         if ($validator->fails()) {
             return redirect('project/new')
                         ->withErrors($validator)
                         ->withInput();
         }
        $number = rand(1, 10000);
        $project->title = $request->title;
        $clean = Purifier::clean(Input::get('editordata'));
        $project->body = $clean;
        $project->slug = $request->slug;
        $project->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('projects.edit', compact('project'));
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
        $project = Project::where('slug', $slug)->first();
        $project->title = $request->title;
        $project->body = $request->body;
        $project->save();
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
        $project = Project::where('slug', $slug)->first();
        $project->delete();
        return redirect('/');
    }
}
