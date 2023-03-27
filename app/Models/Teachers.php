<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'dob',
        'tribe',
        'salary',
        'phone',
        'id_no',
        'county',
        'doe',
        'next_of_keen',
        'academic_level',
        'marital_status',
        'spouse_name'

    ];
}
