<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    protected $fillable = [
        'title', 'code', 'activated_at', 'is_activated'
    ];

    protected $dates = [
        'activated_at'
    ];
}
