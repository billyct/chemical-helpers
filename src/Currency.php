<?php

namespace XiXi\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class Currency
{
    /**
     * @var string
     */
    protected static $ACCESS_KEY = '19062cddc2d8cda706f6c6940538a066';

    /**
     * @param string $from
     * @param string $to
     * @return float|int
     */
    public static function rate($from, $to)
    {
        $rates = Cache::remember('rates', Carbon::tomorrow(), function() {
            $key = static::$ACCESS_KEY;
            $url = "http://data.fixer.io/api/latest?access_key={$key}&format=1";
            $result = json_decode(file_get_contents($url), true);
            return $result['rates'];
        });

        if ($from === 'EUR') {
            return $rates[$to];
        }

        return 1 / $rates[$from] * $rates[$to];
    }
}
