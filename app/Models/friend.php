<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;
    public $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'phone',
        'email',
    ];
}
