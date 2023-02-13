<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class AlphaUsers extends Model
{
    use HasFactory;
    use HasUlids;

    protected $primaryKey = 'uuid';

    protected $guarded = [];

    public function roles()
    {
        return $this->belongsToMany(AlphaRoles::class, 'alpha_role_users', 'alpha_user_uuid', 'alpha_role_uuid');
    }

    public function posts()
    {
        return $this->hasMany(AlphaPosts::class, 'alpha_user_uuid', 'uuid');
    }

    public function comments()
    {
        return $this->hasMany(AlphaComments::class, 'alpha_user_uuid', 'uuid');
    }
}
