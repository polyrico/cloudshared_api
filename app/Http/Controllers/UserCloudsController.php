<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserCloudRequest;
use App\Http\Requests\UpdateUserCloudRequest;
use App\Http\Resources\UserCloudCollection;
use App\Models\UserCloud;

class UserCloudsController extends ResourceController
{
    protected static string $modelClass = UserCloud::class;
    protected static string $collectionClass = UserCloudCollection::class;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->listResource();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserCloudRequest $request)
    {
        $this->storeResource($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserCloud $cloud)
    {
        $this->showResource($cloud);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserCloudRequest $request, UserCloud $cloud)
    {
        $this->updateResource($request, $cloud);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserCloud $cloud)
    {
        $this->destroyResource($cloud);
    }
}
