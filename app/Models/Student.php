<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'college_id',
        'department_id',
        'symbol_no'
    ];

    protected $dates=[
        'created_at', 'updated_at','deleted_at'
    ];
}
