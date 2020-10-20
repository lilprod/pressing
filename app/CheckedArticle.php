<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckedArticle extends Model
{
    protected $fillable = [
        'deposit_id', 'depositedarticle_id', 'status', 'client_id', 'client_name', 'user_id',
    ];

    public function depositedarticle()
    {
        return $this->belongsTo('App\DepositedArticle');
    }

    public function deposit()
    {
        return $this->belongsTo('App\Deposit');
    }
}
