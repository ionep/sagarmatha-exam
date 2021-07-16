<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable=[
        'student_id',
        'class_id',
        'date',
    ];

    protected $dates=[
        'created_at', 'updated_at','deleted_at'
    ];
}
