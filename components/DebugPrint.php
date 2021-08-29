<?php

namespace app\components;


/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.04.2021
 * Time: 23:29
 */

class DebugPrint
{
    public static function debug($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}