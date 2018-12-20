<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['country', 'resort',
        'hotel', 'date_start',
        'date_end', 'food',
        'price', 'peoples',
        'status', 'user_id'];
}
