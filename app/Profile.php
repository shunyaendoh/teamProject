<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
<<<<<<< HEAD
    //Determine if the user is authorized to make this request.

    protected $fillable = [
        'user_id','nickname','age','job','locate','comment','gender'
    ];

    public function users()
    {
        return $this->hasOne('App\User');
    }

    //Get the validation rules that apply to the request.
=======
    public function user()
    {
        return $this->hasOne('App\User');
    }
>>>>>>> master
}
