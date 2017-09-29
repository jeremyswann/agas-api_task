<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $with = [
      'tasks'
    ];
    protected $table = 'employee_departments';

    public function tasks()
    {
        return $this->morphMany('App\Models\Task', 'taskable');
    }
}