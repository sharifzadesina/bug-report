<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes;

class GMPCast implements CastsAttributes, SerializesCastableAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return gmp_init($value, 10);
    }

    public function set($model, $key, $value, $attributes)
    {
        return gmp_strval($value, 10);
    }

    public function serialize($model, string $key, $value, array $attributes)
    {
        return gmp_strval($value, 10);
    }
}
