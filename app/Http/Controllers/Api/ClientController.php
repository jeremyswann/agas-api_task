<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use Dingo\Api\Routing\Helpers;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientController
{
    use Helpers;

    /** @var Client $clientModel */
    protected $clientModel;

    public function __construct(Client $client)
    {
        $this->clientModel = $client;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function index(Request $request): LengthAwarePaginator
    {

        return $this->clientModel->paginate($perPage = 5, $request->get('pageSize', config('api.paginate')));
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
        $this->clientModel->name = $request->get('name');
        $this->clientModel->last_name = $request->get('last_name');
        $this->clientModel->email = $request->get('email');
        $this->clientModel->due_at = $request->get('due_at');
        $this->clientModel->completed = $request->get('completed', 0);
        $this->clientModel->deleted_at = $request->get('deleted_at', null);

        if ($this->clientModel->save()) {
            return $this->clientModel;
        }
        return $this->response->errorBadRequest();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return $this->clientModel->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $client = $this->clientModel->findOrFail($id);
        $this->clientModel->name = $request->get('name');
        $this->clientModel->last_name = $request->get('last_name');
        $this->clientModel->email = $request->get('email');
        $client->due_at = $request->get('due_at');
        $client->completed = $request->get('completed', 0);

        if ($client->update()) {
            return $client;
        }
        return $client->response->errorBadRequest();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $client = $this->clientModel->findOrFail($id);

        if ($client->delete()) {
            return $client;
        }
        return $client->response->errorBadRequest();
    }
}
