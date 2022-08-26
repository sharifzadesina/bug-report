<?php

namespace App\Models;

use App\Casts\GMPCast;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    protected $casts = [
        'amount' => GMPCast::class,
    ];
}
