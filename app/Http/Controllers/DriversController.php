<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDriverRequest;
use App\Http\Requests\UpdateDriverRequest;
use App\Http\Resources\DriverCollection;
use App\Models\Driver;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriversController extends ResourceController
{
    protected static string $modelClass = Driver::class;
    protected static string $collectionClass = DriverCollection::class;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->listResource(
            Driver::where('user', Auth::id())->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDriverRequest $request)
    {
        return $this->storeResource($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return $this->showResource($driver);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDriverRequest $request, Driver $driver)
    {
        return $this->updateResource($request, $driver);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        return $this->destroyResource($driver);
    }
}
