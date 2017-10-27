<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Message extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $messages = ['deleted_at'];

    protected $hidden = [
        'messageable_id',
        'messageable_type'
    ];

    /**
     * Get all of the owning messageable models.
     */
    public function messageable()
    {
        return $this->morphTo();
    }
}