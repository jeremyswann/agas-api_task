<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use Illuminate\Pagination\LengthAwarePaginator;

class TaskController
{
    use Helpers;

    /** @var Task $taskModel */
    protected $taskModel;

    public function __construct(Task $task)
    {
        $this->taskModel = $task;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {

        return $this->taskModel->paginate($perPage = 5, $request->get('pageSize', config('api.paginate')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->taskModel->name = $request->get('name');
        $this->taskModel->due_at = $request->get('due_at');
        $this->taskModel->completed = $request->get('completed', 0);
        $this->taskModel->deleted_at = $request->get('deleted_at', null);

        if ($this->taskModel->save()) {
            return $this->taskModel;
        }
        return $this->response->errorBadRequest();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $this->taskModel->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $task = $this->taskModel->findOrFail($id);
        $task->name = $request->get('name');
        $task->due_at = $request->get('due_at');
        $task->completed = $request->get('completed', 0);

        if ($task->update()) {
            return $task;
        }
        return $task->response->errorBadRequest();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $task = $this->taskModel->findOrFail($id);

        if ($task->delete()) {
            return $task;
        }
        return $task->response->errorBadRequest();
    }
}
