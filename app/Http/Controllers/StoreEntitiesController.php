<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStoreEntityRequest;
use App\Http\Requests\UpdateStoreEntityRequest;
use App\Http\Resources\StoreEntityCollection;
use App\Models\Driver;
use App\Models\StoreEntity;

class StoreEntitiesController extends ResourceController
{
    protected static string $modelClass = StoreEntity::class;
    protected static string $collectionClass = StoreEntityCollection::class;

    /**
     * Display a listing of the resource.
     */
    public function index(Driver $driver)
    {
        return $this->listResource(
            StoreEntity::where('driver', $driver->uuid)
                ->where('parent_store_entity', null)
                ->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStoreEntityRequest $request)
    {
        return $this->storeResource($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver, StoreEntity $storeEntity)
    {
        return $this->showResource($storeEntity);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStoreEntityRequest $request, StoreEntity $storeEntity)
    {
        return $this->updateResource($request, $storeEntity);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StoreEntity $storeEntity)
    {
        return $this->destroyResource($storeEntity);
    }
}
