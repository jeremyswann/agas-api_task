<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $with = [
        'department',
        'employeeTasks',
        'employeeClients',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function employeeTasks()
    {
        return $this->morphMany('App\Models\Task', 'taskable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function employeeClients()
    {
        return $this->morphMany('App\Models\Client', 'clientable');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Employee\Department');
    }
}