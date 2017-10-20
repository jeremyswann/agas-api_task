<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployeeController
{
    /** @var  Employee */
    protected $employeeModel;

    public function __construct(Employee $employee)
    {
        $this->employeeModel = $employee;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): LengthAwarePaginator
    {
        return $this->employeeModel->paginate($perPage = 5, $request->get('pageSize', config('api.paginate')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @internal param Employee $employee
     */
    public function show(int $id)
    {
        return $this->employeeModel->findOrFail($id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function taskList(int $id)
    {
        return $this->employeeModel->findOrFail($id)->tasks;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function clientList(int $id)
    {
        return $this->employeeModel->findOrFail($id)->clients;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
