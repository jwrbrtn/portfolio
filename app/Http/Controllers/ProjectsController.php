<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Input;
use Mews\Purifier\Facades\Purifier;

use Validator;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
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
      $projects = $project->getAllProjects();
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
             'title' => 'required|unique:posts|max:255',
             'editordata' => 'required',
         ]);

         if ($validator->fails()) {
             return redirect('project/new')
                         ->withErrors($validator)
                         ->withInput();
         }
        //$path = $request->file('featureimage')->store('projects');
        $file = Input::file('featureimage');
        $number = rand(1, 10000);
        $file->move(public_path().'/images/',$number.'.jpg');
        $project->title = $request->title;
        $clean = Purifier::clean(Input::get('editordata'));
        $project->body = $clean;
        $project->featureimage = $number.'.jpg';
        $project->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit', compact('project'));
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
        $project = Project::find($id);
        $project->title = $request->title;
        $project->body = $request->body;
        $project->save();
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
        $project = Project::find($id);
        $project->delete();
        return view('home');
    }
}
