<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;


use App\Http\Controllers\Controller;
use App\Project;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
  public function index()
  {
    //return "project";
    $user = Auth::User();
    $projects = Auth::user()->projects()->orderby('created_at')->get();
    //var_dump($projects);
    $currenttime= Carbon::now()->format("h:i A");
    $today = Carbon::now()->formatlocalized("%a %d %b %y");
    return view("pages.projects.home", compact("projects", "today", "currenttime", "user"));

  }

  public function store(ProjectRequest $request)
  {
    if($request->ajax())
    {
      $slug = Str::slug($request->name);

      Auth::user()->projects()->create(
          Array(
            "name"=>$request->name,
            "slug"=>$slug,
            "desc"=>$request->desc,
            "duedate"=>$request->duedate
            )
      );

      $response = Array("msg"=>"Project Saved. Please close modal");
      return Response::json($response);
    }
    else
    {
      $slug = Str::slug($request->name);

      Auth::user()->projects()->create(
          Array(
            "name"=>$request->name,
            "slug"=>$slug,
            "desc"=>$request->desc,
            "duedate"=>$request->duedate
            )
      );

      redirect("projects")->with("success", "Project ".ucwords($request->name). " has been created");
    }
  }
    //
}
