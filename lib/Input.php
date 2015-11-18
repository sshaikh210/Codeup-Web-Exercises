<?php

class Input
{

    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    public static function get($key, $default = null)
    {
        if (self::has($key)) {
            return $_REQUEST[$key];
        } else {
            return NULL;
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
