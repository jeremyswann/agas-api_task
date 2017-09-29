<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $with = [
        'department',
        'employeeTasks',
        //'departmentTasks'
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function employeeTasks()
    {
        return $this->morphMany('App\Models\Task', 'taskable');
    }

    public function departmentTasks()
    {
        //dd($this->department);
        return $this->department;
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Employee\Department', '');
    }
}