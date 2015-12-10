<?php

class Input
{
    public static function setAndNotEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST [$key] != '') {
            return true;
        }
    }

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
    public static function getString($key)
    {
        $value = trim(self::get($key));
        if(!is_string($value)) {
            throw new Exception("{$key} must be a String");
        }
         return ($value); 
    }
    public static function getNumber($key)
    {
        $value = trim(self::get($key));
        if(!is_numeric($value)) {
            throw new Exception("{$key} must be an Integer");
        }
         return ($value); 
    }


    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
