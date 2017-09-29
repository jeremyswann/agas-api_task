<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Task;

class TaskTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            'name' => $task->name,
            'email' => $user->email,
            'added' => date('Y-m-d', strtotime($user->created_at))
        ];
    }
}
