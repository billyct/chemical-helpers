<?php

namespace XiXi\Helpers\Chemical;

class Substance
{
    /**
     * @var string
     */
    public static $REG_CAS = '/^[1-9]\d{1,7}-\d{2}-\d$/';

    /**
     * @var string
     */
    public static $REG_EC = '/^[2-9]\d{2}-\d{3}-\d$/';

    /**
     * @param string $value
     * @return bool
     */
    public static function isCAS($value)
    {
        return boolval(preg_match(static::$REG_CAS, $value));
    }

    /**
     * @param string $value
     * @return bool
     */
    public static function isEC($value)
    {
        return boolval(preg_match(static::$REG_EC, $value));
    }
}
