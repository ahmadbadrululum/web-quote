<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    // tidak boleh quote yg sama dalam 1 users
    function user()
    {
                    // milik dari
        return $this->belongsTo('App\Models\User');
    }
}
