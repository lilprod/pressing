<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'delivery_code', 'deposit_id',	'deposit_code',	'quantity',	'deposit_amount', 'discount', 'left_pay',
        'deposit_date',	'date_retrait',	'status', 'client_id',	'client_name',	'client_email',	'client_address',
        'client_phone',	'user_id',
    ];
}
