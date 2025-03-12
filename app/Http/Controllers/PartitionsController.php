<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartitionRequest;
use App\Http\Requests\UpdatePartitionRequest;
use App\Http\Resources\PartitionCollection;
use App\Models\Partition;

class PartitionsController extends ResourceController
{
    protected static string $modelClass = Partition::class;
    protected static string $collectionClass = PartitionCollection::class;

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
    public function store(StorePartitionRequest $request)
    {
        return $this->storeResource($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Partition $partition)
    {
        return $this->showResource($partition);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartitionRequest $request, Partition $partition)
    {
        return $this->updateResource($request, $partition);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partition $partition)
    {
        return $this->destroyResource($partition);
    }
}
