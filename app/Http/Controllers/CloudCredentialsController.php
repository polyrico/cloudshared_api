<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResourceController;
use App\Http\Requests\StoreCloudCredentialRequest;
use App\Http\Requests\UpdateCloudCredentialRequest;
use App\Http\Resources\CloudCredentialCollection;
use App\Models\CloudCredential;

class CloudCredentialsController extends ResourceController
{
    protected static string $modelClass = CloudCredential::class;
    protected static string $resourceCollectionClass = CloudCredentialCollection::class;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->listResource();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCloudCredentialRequest $request)
    {
        return $this->storeResource($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(CloudCredential $cloudCredential)
    {
        return $this->showResource($cloudCredential);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCloudCredentialRequest $request, CloudCredential $cloudCredential)
    {
        return $this->updateResource($request, $cloudCredential);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CloudCredential $cloudCredential)
    {
        return $this->destroyResource($cloudCredential);
    }
}
