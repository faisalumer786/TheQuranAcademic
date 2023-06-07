<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complementry extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact',
        'date_of_birth',
        'city',
        'country',
        'gender',
        'course',
    ];
}
