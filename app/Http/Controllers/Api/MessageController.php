<?php

namespace App\Http\Controllers\Api;

use App\Models\Message;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use Illuminate\Pagination\LengthAwarePaginator;

class MessageController
{
    use Helpers;

    /** @var Message $messageModel */
    protected $messageModel;

    public function __construct(Message $message)
    {
        $this->messageModel = $message;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {

        return $this->messageModel->paginate($perPage = 5, $request->get('pageSize', config('api.paginate')));
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
        $this->messageModel->from = $request->get('from');
        $this->messageModel->message = $request->get('message');
        $this->messageModel->deleted_at = $request->get('deleted_at', null);

        if ($this->messageModel->save()) {
            return $this->messageModel;
        }
        return $this->response->errorBadRequest();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message $message
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $this->messageModel->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Message $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $message = $this->messageModel->findOrFail($id);
        $message->from = $request->get('from');
        $message->message = $request->get('message');

        if ($message->update()) {
            return $message;
        }
        return $message->response->errorBadRequest();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $message = $this->messageModel->findOrFail($id);

        if ($message->delete()) {
            return $message;
        }
        return $message->response->errorBadRequest();
    }
}
