<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes =[
        'sort_order' => 0,
        'status' => 0,
    ];

    protected $fillable = [
        'sort_order',
        'status',
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

}
