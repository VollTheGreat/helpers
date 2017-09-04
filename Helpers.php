<?php

namespace App\Classes;

class Helpers
{

    public static function set_by_url($path, $active = 'active')
    {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
    public static function set_active($path, $active = 'active')
    {
        return str_contains(url()->current(), $path) ? $active : false;
    }
}