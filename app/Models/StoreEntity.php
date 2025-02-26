<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class StoreEntity extends Model
{
    use HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string|null
     */
    protected $table = 'store_entities';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';

    /**
     * Fillable columns
     */
    protected $fillable = [
        'driver', 'parent_store_entity', 'name', 'extention', 'size'
    ];
}
