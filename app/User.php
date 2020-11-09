<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','address','city',
    ];

    public function isDisabled ()
    {
        return $this->typeCheck();
    }

    public function isVisitor ()
    {
        return $this->typeCheck(1);
    }

    public function isAdmin ()
    {
        return $this->typeCheck(2);
    }

    protected function typeCheck ($type = 0)
    {
        return $this->type === $type ? true : false;
    }


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
}
