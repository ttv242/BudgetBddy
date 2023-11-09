<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;

class Helper
{
    public static function isActiveRoute($route, $output = 'active')
    {
        if (Route::currentRouteName() === $route) {
            return $output;
        }

        return '';
    }
}
?>
