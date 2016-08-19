<?php
/**
 * Created by PhpStorm.
 * User: nov_usb
 * Date: 8/19/16
 * Time: 2:47 PM
 */

namespace App\Http\Helper;


use App\User;

class CheckEmailExistence
{
    public  static  function check_email_social_login($email)
    {
        $user=User::where('email',$email)->first();
        if ($user)
        {
            return 'exist';
        }
    }
}