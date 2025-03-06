<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\CloudCredentialCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Resources\Json\ResourceCollection;

abstract class ResourceController extends Controller {

    protected static string $modelClass;
    protected static string $resourceCollectionClass;

    /**
     * Display a listing of the resource.
     */
    protected function listResource(): ResourceCollection
    {
        if (!isset(static::$resourceCollectionClass)) {
            return static::$modelClass::all();
        } else {
            return new static::$resourceCollectionClass(static::$modelClass::paginate());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FormRequest $request
     */
    protected function storeResource(FormRequest $request)
    {
        $data = $request->validated();
        $entity = static::$modelClass::create($data);
        $entity->saveOrFail();

        return $entity->toArray();
    }

    /**
     * Display the specified resource.
     *
     * @param Model $entity
     */
    protected function showResource(Model $entity)
    {
        return $entity->toArray();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param FormRequest $request
     * @param Model $entity
     */
    protected function updateResource(FormRequest $request, Model $entity)
    {
        $data = $request->validated();
        $entity->fill($data);
        $entity->updateOrFail();

        return $entity->toArray();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Model $entity
     */
    protected function destroyResource(Model $entity)
    {
        $entity->deleteOrFail();
        return [];
    }
}