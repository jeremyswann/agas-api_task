<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Client extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $clients = ['deleted_at'];

    protected $hidden = [
        'clientable_id',
        'clientable_type'
    ];

    /**
     * Get all of the owning clientable models.
     */
    public function clientable()
    {
        return $this->morphTo();
    }
}