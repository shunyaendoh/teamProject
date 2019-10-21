<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageUser extends Model
{
    protected $table = 'message_users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'sender_id', 'receiver_id'
    ];
}
