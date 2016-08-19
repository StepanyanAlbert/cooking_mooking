<?php

namespace App;

use App\Http\Helper\CheckEmailExistence;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{


    protected $fillable = [
        'first_name', 'email', 'password', 'last_name',
        'date_of_birth', 'social_account_id', 'acc_type'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function findorCreateSocialUser($provider, $id, $userObj)
    {

        $user_soc = User::where('acc_type', $provider)->first();

        if (!is_null($user_soc))
        {

            $user = User::where('acc_id', $id)->first();
            return $user;

        } else {
            try {

                $user_soc = new User();
                if (isset($userObj->name))
                {
                    $name = $userObj->name;
                    $names = explode(' ', $name);
                    $firstname = $names[0];
                    $lastname = $names[1];
                } else {
                    $firstname = '';
                    $lastname = '';
                }

                $user_soc->first_name = $firstname;
                $user_soc->last_name = $lastname;
                $email=isset($userObj->email) ? $userObj->email : '';
                 if(CheckEmailExistence::check_email_social_login($email)=='exist')
                 {
                     return 'message';
                 }else{
                     $user_soc->email = $email;
                 }
                $user_soc->acc_id = $id;
                $user_soc->acc_type = $provider;
                $user_soc->avatar_url = isset($userObj->avatar) ? $userObj->avatar : '';
                $user_soc->save();
                $user = User::where('acc_id', $id)->where('acc_type', $provider)->first();

                return $user;
                /// Auth::login($user);
                //return redirect()->route('dashboard');

            } catch (QueryException $e) {
                var_dump($e->errorInfo);
            }

        }

    }
}