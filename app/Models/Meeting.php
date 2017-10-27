<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meeting extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $meetings = ['deleted_at'];

    protected $hidden = [
        'meetingable_id',
        'meetingable_type'
    ];

    /**
     * Get all of the owning meetingable models.
     */
    public function meetingable()
    {
        return $this->morphTo();
    }
}