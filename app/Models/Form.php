<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'faculty',
        'student_id',
        'phone_number',
        'deposited_item',
    ];
}
