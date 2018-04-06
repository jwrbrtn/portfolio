<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


  public function getRouteKeyName(){
      return 'slug';
    }

  public function getAllProjects(){
    $projects = DB::table('projects')->orderBy('created_at', 'desc')->get();
    return $projects;
  }



}
