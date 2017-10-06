<?php

namespace App\Http\Controllers\Api;

use App\Models\Employee;
use App\Models\Task;
use Illuminate\Http\Request;

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
    public function index()
    {
        //
        $employeeModel = new Employee();
        /** @var Employee $employee */
        $employee = $employeeModel->all();
        $tasks = $employee->tasks;

//        $taskList = Task::find(1);
//
//        dd($taskList);

        return ['tasks' => $tasks, 'employee' => $employee];
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
