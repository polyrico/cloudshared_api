<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

abstract class ResourceController extends Controller {

    protected static string $modelClass;

    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    protected function listResource(): array 
    {
        return static::$modelClass::all()->toArray();
    }

    protected function storeResource(FormRequest $request): array
    {
        $data = $request->validated();
        $entity = static::$modelClass::create($data);
        $entity->saveOrFail();

        return $entity->toArray();
    }

    protected function showResource(Model $entity): array
    {
        return $entity->toArray();
    }

    protected function updateResource(FormRequest $request, Model $entity): array
    {
        $data = $request->validated();
        $entity->fill($data);
        $entity->updateOrFail();

        return $entity->toArray();
    }

    protected function destroyResource(Model $entity): array
    {
        $entity->deleteOrFail();
        return [];
    }
}