<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'remarks',
        'account_number',
        'balance',
        'image',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
