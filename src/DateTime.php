<?php

namespace XiXi\Helpers;

/**
 * Class DateTime
 *
 * @package \XiXi\Helpers
 */
class DateTime
{
    public static $ABBREVIATIONS_OF_MONTHS_EN = [
        'Jan' => 'Jan.', 'Feb' => 'Feb.', 'Mar' => 'Mar.',
        'Apr' => 'Apr.', 'May' => 'May', 'Jun' => 'June',
        'Jul' => 'July', 'Aug' => 'Aug.', 'Sep' => 'Sept.',
        'Oct' => 'Oct.', 'Nov' => 'Nov.', 'Dec' => 'Dec.',
    ];

    /**
     * @param string $date
     * @return string
     */
    public static function monthAbbreviationEN($date)
    {
        foreach (static::$ABBREVIATIONS_OF_MONTHS_EN as $key => $value) {
            $date = str_replace($key, $value, $date);
        }

        return $date;
    }
}
