<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartitionRequest;
use App\Http\Requests\UpdatePartitionRequest;
use App\Http\Resources\PartitionCollection;
use App\Models\Driver;
use App\Models\Partition;
use App\Models\StoreEntity;

class PartitionsController extends ResourceController
{
    protected static string $modelClass = Partition::class;
    protected static string $collectionClass = PartitionCollection::class;

    /**
     * Display a listing of the resource.
     */
    public function index(Driver $driver, StoreEntity $entity)
    {
        return $this->listResource();
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver, StoreEntity $entity, Partition $partition)
    {
        return $this->showResource($partition);
    }
}
