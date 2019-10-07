<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
<<<<<<< HEAD
    //Determine if the user is authorized to make this request.





    //Get the validation rules that apply to the request.
=======
    public function user()
    {
        return $this->hasOne('App\User');
    }
>>>>>>> master
}
