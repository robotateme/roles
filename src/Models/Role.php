<?php

namespace Robotateme\Roles\Models;

use Illuminate\Database\Eloquent\Model;
use Robotateme\Roles\Contracts\RoleHasRelations as RoleHasRelationsContract;
use Robotateme\Roles\Traits\RoleHasRelations;
use Robotateme\Roles\Traits\Slugable;

class Role extends Model implements RoleHasRelationsContract
{
    use Slugable, RoleHasRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'level'];

    /**
     * Create a new model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        if ($connection = config('roles.connection')) {
            $this->connection = $connection;
        }
    }
}
