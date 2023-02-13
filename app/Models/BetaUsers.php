<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class BetaUsers extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(BetaRoles::class, 'beta_role_users', 'beta_user_id', 'beta_role_id');
    }

    public function posts()
    {
        return $this->hasMany(BetaPosts::class, 'beta_user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(BetaComments::class, 'beta_user_id', 'id');
    }
}
