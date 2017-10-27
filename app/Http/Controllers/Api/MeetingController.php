<?php

namespace App\Http\Controllers\Api;

use App\Models\Meeting;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use Illuminate\Pagination\LengthAwarePaginator;

class MeetingController
{
    use Helpers;

    /** @var Meeting $meetingModel */
    protected $meetingModel;

    public function __construct(Meeting $meeting)
    {
        $this->meetingModel = $meeting;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {

        return $this->meetingModel->paginate($perPage = 5, $request->get('pageSize', config('api.paginate')));
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
        $this->meetingModel->name = $request->get('name');
        $this->meetingModel->time = $request->get('time');
        $this->meetingModel->attending = $request->get('attending', 0);
        $this->meetingModel->deleted_at = $request->get('deleted_at', null);

        if ($this->meetingModel->save()) {
            return $this->meetingModel;
        }
        return $this->response->errorBadRequest();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $this->meetingModel->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $meeting = $this->meetingModel->findOrFail($id);
        $meeting->name = $request->get('name');
        $meeting->time = $request->get('time');
        $meeting->attending = $request->get('attending', 0);

        if ($meeting->update()) {
            return $meeting;
        }
        return $meeting->response->errorBadRequest();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meeting $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $meeting = $this->meetingModel->findOrFail($id);

        if ($meeting->delete()) {
            return $meeting;
        }
        return $meeting->response->errorBadRequest();
    }
}
