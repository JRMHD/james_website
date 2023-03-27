<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'course',
        'level',
        'dob',
        'fee',
        'paid',
        'tribe',
        'county',
        'gender',
        'next_of_keen',
        'tell',
        'id_no'
    ];
}
