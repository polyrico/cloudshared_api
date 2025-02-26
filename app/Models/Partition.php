<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Partition extends Model
{
    use HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string|null
     */
    protected $table = 'partitions';

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
        'user_cloud', 'store_entity', 'size', 'order', 'fileuuid'
    ];
}
