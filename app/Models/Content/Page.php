<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
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
