<?php

namespace App\Http\Helper;

class CurrentUrl
{
    public  static function get_after_url()
    {
        $request = parse_url($_SERVER['REQUEST_URI']);
        $path = $request["path"];

        $result = trim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');

        if (explode('/',$result)[0]=='en' || (explode('/',$result)[0]=='ru'))
        {

            //  return  substr($result,strpos($result,'/',1));
            //
            // another way with arrays
            return  implode('/',array_slice(explode('/',$result),1));
        }


    }    
}