<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'id',
        'part_id',
        'distance',
        'start_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'birth_date',
        'date2',
        'city',
        'contact',
        'team',
        'club',
        'tshirt_size',
        'transaction',
        'price',
        'status',
        'promo_code',
        'promo_price'
    ];
}