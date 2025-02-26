<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserCloud extends Model
{
    use HasUuids;

    /**
     * The table associated with the model.
     *
     * @var string|null
     */
    protected $table = 'users_clouds';

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
        'user', 'cloud_credential', 'cloud_name', 'refresh_token', 'expiration_time'
    ];
}
