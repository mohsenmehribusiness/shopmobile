<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /*
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $guarded=['id'];
    protected $table='users';
    protected $fillable = ['name', 'email', 'password','img','role','level'];
    /**
     * The attributes that should be hidden for arrays.
     *name,email,password,fulllname,img,phone,role,
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];
    /*public function product()
    {
        return $this->hasMany(product::class,'id');
    }*/
    /***/
    public function isAdmin()
    {
        return $this->level == 'admin' ? true : false;
    }

}