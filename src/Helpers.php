<?php

use XiXi\Helpers\DateTime;
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



