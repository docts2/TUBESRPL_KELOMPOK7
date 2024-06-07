<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // Add the fillable property
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'address',
        'resume',
    ];
}
