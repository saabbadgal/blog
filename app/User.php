<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

      public function role(){

        return $this->belongsTo('App\Role','role_id','id');
    }


        /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    

    public function sendPasswordResetNotification($token)
    {    
        // dd($this->role->nickname);
        if($this->role->nickname == 'user'){
  
            $route = 'user.password.reset';

        }elseif($this->role->nickname == 'admin'){

           $route = 'admin.password.reset';

        }else{
                $route = '';
        }


        $this->notify(new ResetPasswordNotification($route,$token));
    }

    public function posts(){

        return $this->hasMany('App\Post','user_id');
    }
}
