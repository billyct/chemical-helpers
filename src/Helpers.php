<?php

use XiXi\ChemicalHelpers\Substance;

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



