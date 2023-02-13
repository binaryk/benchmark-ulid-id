<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AlphaRoleUser extends Pivot
{
    protected $table = 'alpha_role_users';

    protected $guarded = [];
}
