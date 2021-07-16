<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable=[
        'room',
        'building_id'
    ];

    protected $dates=[
        'created_at', 'updated_at','deleted_at'
    ];

    public function building(){
        return $this->belongsTo('App\Models\Building','building_id');
    }
}
