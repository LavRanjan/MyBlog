<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
Use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function question()
    {
        return $this->hasMany('App\Models\Question','created_by');
    }

    public static function loggingIn($email, $password, $remember)
    {
        $loginValue = array('authenticated' => false);

        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            $user = User::where('email', $email)->first();
            $loginValue['authenticated'] = true;
            return $loginValue;
        }
        else {
            return $loginValue;
        }
    }
}
