<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantidate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'last_name',
        'cell',
        'email',
        'ide',
        'type_ide',
        'position',
        'experience',
        'cv',
        'status'
    ];
}