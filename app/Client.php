<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'firstname', 'email', 'phone_number', 'address', 'profile_picture',
    ];
}
