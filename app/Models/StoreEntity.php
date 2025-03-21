<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Get the driver related with this entity
     */
    public function driver(): BelongsTo
    {
        return $this->belongsTo(Driver::class, 'uuid', 'driver');
    }

    /**
     * Gets the children entities related with this entity
     *
     * @return HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(StoreEntity::class, 'parent_store_entity', 'uuid');
    }

    /**
     * Get the partitions related with this entity
     *
     * @return HasMany
     */
    public function partitions(): HasMany
    {
        return $this->hasMany(Partition::class, 'store_entity', 'uuid');
    }
}
