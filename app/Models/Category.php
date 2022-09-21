<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes =[

    ];

    protected $fillable = [
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

}
