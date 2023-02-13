<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $comment
 */
class AlphaComments extends Model
{
    use HasFactory;
    use HasUlids;

    protected $primaryKey = 'uuid';

    protected $guarded = [];
}
