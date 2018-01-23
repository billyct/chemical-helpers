<?php

namespace XiXi\Helpers\Chemical;

use XiXi\Helpers\Str;

class PH
{
    /**
     * @param mixed $ph
     * @return bool
     */
    public static function isDangerous($ph)
    {
        if (blank($ph)) {
            return false;
        }

        return collect(Str::rangeSplit($ph))
            ->map(function($ph) {
                return Str::toFloat($ph);
            })
            ->contains(function($ph) {
                return $ph <= 2 || $ph >= 11.5;
            });
    }
}
