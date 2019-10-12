<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Determine if the user is authorized to make this request.

    protected $fillable = [
        'user_id','nickname','age','job','locate','comment','gender','picture_path'
    ];

    public function users()
    {
        return $this->hasOne('App\User');
    }

    //Get the validation rules that apply to the request.
}
