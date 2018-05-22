<?php

namespace XiXi\Helpers;

class Browser
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    public static function isWechatBrowser($request)
    {
        return strpos($request->header('user_agent'), 'MicroMessenger') !== false;
    }
}
