<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
