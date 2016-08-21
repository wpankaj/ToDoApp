<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
  //
  protected $table = "tasks";

  protected $dates = Array("deleted_at");

  protected $fillable = Array("name", "slug", "desc", "duedate", "completed");


  public  function setDueDateAttribute($date)
  {
    return $this->attributes["duedate"] = Carbon::parse($date);
  }


  public function user()
  {
    return $this->belongsTo("App\User");
  }


  public function project()
  {
    return $this->belongsTo("App\Project");
  }

  
  public function subtasks()
  {
    return $this->hasMany("App\Subtask");
  }

}
