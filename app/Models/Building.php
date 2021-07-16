<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'block',
    ];

    protected $dates=[
        'created_at', 'updated_at','deleted_at'
    ];
}
