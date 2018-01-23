<?php

use XiXi\Helpers\Str;
use XiXi\Helpers\DateTime;
use XiXi\Helpers\Chemical\PH;
use XiXi\Helpers\Chemical\Substance;

if (! function_exists('reg_cas')) {
    /**
     * reg string for cas.
     *
     * @return string
     */
    function reg_cas()
    {
        return Substance::$REG_CAS;
    }
}

if (! function_exists('reg_ec')) {
    /**
     * reg string for ec.
     *
     * @return string
     */
    function reg_ec()
    {
        return Substance::$REG_EC;
    }
}

if (! function_exists('is_cas')) {

    /**
     * @param string $value
     * @return bool
     */
    function is_cas($value)
    {
        return Substance::isCAS($value);
    }
}

if (! function_exists('is_ec')) {
    /**
     * @param string $value
     * @return bool
     */
    function is_ec($value)
    {
        return Substance::isEC($value);
    }
}

if (! function_exists('month_abbreviation_en')) {
    /**
     * replace date to month abbreviation mapping.
     * reference: http://web.library.yale.edu/cataloging/months.htm
     *
     * @param string $date
     * @return string
     */
    function month_abbreviation_en($date)
    {
        return DateTime::monthAbbreviationEN($date);
    }
}

if (! function_exists('is_none')) {
    /**
     * @param mixed $value
     * @return bool
     */
    function is_none($value)
    {
        return Substance::isNone($value);
    }
}

if (! function_exists('is_no_data_available')) {
    /**
     * @param mixed $value
     * @return bool
     */
    function is_no_data_available($value)
    {
        return Substance::isNoDataAvailable($value);
    }
}

if (! function_exists('is_hazard')) {
    /**
     * @param mixed $value
     * @return bool
     */
    function is_hazard($value)
    {
        return !Substance::isNoDataAvailable($value) && !Substance::isNone($value);
    }
}

if (! function_exists('range_split')) {
    /**
     * @param string $value
     * @return array
     */
    function range_split($value)
    {
        return Str::rangeSplit($value);
    }
}

if (! function_exists('str_to_float')) {
    /**
     * @param string $value
     * @return float
     */
    function str_to_float($value)
    {
        return Str::toFloat($value);
    }
}

if (! function_exists('is_dangerous_ph')) {
    /**
     * @param string $ph
     * @return bool
     */
    function is_dangerous_ph($ph)
    {
        return PH::isDangerous($ph);
    }
}
