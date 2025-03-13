<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Driver extends Model
{
    use HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string|null
     */
    protected $table = 'drivers';

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
        'user', 'name'
    ];

    /**
     * Get the store entities for the current driver.
     *
     * @return HasMany
     */
    public function entities(): HasMany
    {
        return $this->hasMany(StoreEntity::class, 'driver', 'uuid');
    }
}
