<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'job_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }
    public function job()
    {
        return $this->hasOne('App\Job');
    }
    public function ideas()
    {
        return $this->hasMany('App\Idea');
    }
    public function favorites()
    {
        return $this->belongsToMany('App\Idea', 'favorites');
    }
    public function chats()
    {
        return $this->hasMany('App\Chat');
    }
}
