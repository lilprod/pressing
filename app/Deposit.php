<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = [
        'deposit_code',	'quantity',	'deposit_amount', 'discount', 'left_pay',
        'date_retrait',	'status', 'client_id',	'client_name',	'client_email',	'client_address',
        'client_phone',	'user_id',
    ];

    protected $dates = ['created_at', 'date_retrait'];

    public function date_convert($date){
        return mb_convert_encoding($date, "UTF-8", mb_detect_encoding($date, "UTF-8, ISO-8859-1, ISO-8859-15", true));
    }

    public function depositedarticles()
    {
        return $this->hasMany('App\DepositedArticle');
    }

    public function checkedarticles()
    {
        return $this->hasMany('App\CheckedArticle');
    }

}
