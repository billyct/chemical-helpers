<?php

namespace XiXi\Helpers;

class Str
{
    /**
     * @param string $value
     * @return array|false|string[]
     */
    public static function rangeSplit($value)
    {
        $result = preg_split(
            '/[\-|\~|——]/',
            $value
        );

        if (blank($result)) {
            return $result;
        }

        return collect($result)
            ->map(function($item) {
                return trim($item);
            })
            ->filter()
            ->values()
            ->all();
    }

    /**
     * convert string to float (🚌 support negative number).
     *
     * @param string $value
     * @return float
     */
    public static function toFloat($value)
    {
        return (float) filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }
}
