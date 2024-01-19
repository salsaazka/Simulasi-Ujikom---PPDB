<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nisn',
        'jk',
        'address',
        'school',
        'religion',
        'interest',
        'no_telp',
    ];
}
