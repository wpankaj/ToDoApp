<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    //
    protected $table = "projects";

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


    public function tasks()
    {
      return $this->hasMany("App\Task");
    }

    
    public function subtasks()
    {
      return $this->hasManyThrough("App\Subtask", "App\Task");
    }
}
