<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Robotateme\Roles\Traits\HasRoleAndPermission;

class User extends Model
{
    use HasRoleAndPermission;
}
