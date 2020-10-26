<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','familyname','identitycode','gender','birthdate','grade','university','phone','address','englishname','englishfamilyname'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_has_article(){
        return $this->hasOne('App\Article','user_id');
    }

    public function user_pay_no_article(){
        return $this->hasOne('App\Payment','id','article_code');
    }
}
