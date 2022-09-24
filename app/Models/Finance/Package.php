<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Event;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $attributes =[
        'sort_order' => 0,
        'status' => 1,
    ];

    protected $fillable = [
        'event_id',
        'title',
        'description',
        'price',
        'sort_order',
        'status',
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

    public function event(){
        return $this->belongsTo(Event::class);
    }

}
