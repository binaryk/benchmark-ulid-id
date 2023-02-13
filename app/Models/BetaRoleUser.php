<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BetaRoleUser extends Pivot
{
    protected $table = 'beta_role_users';

    protected $guarded = [];
}
