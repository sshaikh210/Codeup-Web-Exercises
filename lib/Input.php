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
    public static function getDate($key)
    {
        $date = trim(self::get($key));
        if(!strtotime($date)) {
            throw new Exception("{$key} must be in YYYY-MM-DD format");
        } else {
            $dateArray = date_parse(date("y-m-d", strtotime($date)));
            if (checkdate($dateArray['month'], $dateArray['day'], $dateArray['year'])) {
                return date("y-m-d", strtotime($date));
            } else {
                throw new Exception ("Not a valid date format");
            }
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
