<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;
    protected $fillable=[

        'name','work','tell','tribe','fee','dob','county','gender','next_of_keen','id_no',

    ];
}
