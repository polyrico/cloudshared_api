<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCloudCredentialRequest;
use App\Models\CloudCredential;
use Illuminate\Http\Request;

class CloudCredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CloudCredential::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCloudCredentialRequest $request)
    {
        $request->validated();
        $entity = new CloudCredential($request->all());
        $entity->saveOrFail();

        return $entity;
    }

    /**
     * Display the specified resource.
     */
    public function show(CloudCredential $cloudCredential)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CloudCredential $cloudCredential)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CloudCredential $cloudCredential)
    {
        //
    }
}
