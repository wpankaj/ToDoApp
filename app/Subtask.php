<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Subtask extends Model
{
    //
    protected $table = "subtasks";

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


    public function task()
    {
      return $this->belongsTo("App\Task");
    }


    public function subtasks()
    {
      return $this->hasMany("App\Subtask");
    }
}
