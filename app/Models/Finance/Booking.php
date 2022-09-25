<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Auth\User;
use App\Models\Finance\Package;
use App\Models\Event;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes =[
        'status' => 1,
    ];

    protected $fillable = [
        'event_id',
        'package_id',
        'user_id',
        'quantity',
        'date',
        'total_price',
        'status',
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

// Event
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
// Package
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
// User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
