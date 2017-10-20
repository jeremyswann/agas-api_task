<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Task extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $tasks = ['deleted_at'];

    protected $hidden = [
        'taskable_id',
        'taskable_type'
    ];

    /**
     * Get all of the owning tasktable models.
     */
    public function taskable()
    {
        return $this->morphTo();
    }
}