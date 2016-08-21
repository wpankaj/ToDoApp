<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use Auth;

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
    //
}
