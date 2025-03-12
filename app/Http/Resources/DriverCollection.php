<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class DriverCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($driver) {
                return [
                    'uuid' => $driver->uuid,
                    'name' => $driver->name,
                    'created_at' => $driver->created_at,
                    'updated_at' => $driver->updated_at,
                    'deleted_at' => $driver->deleted_at,
                ];
            }),
        ];
    }
}
