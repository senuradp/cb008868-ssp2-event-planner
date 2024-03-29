<?php

namespace App\Models;

use App\Models\Finance\Booking;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

use App\Models\Finance\Package;

class Event extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;


    protected $attributes =[
        'sort_order' => 0,
        'status' => 1,
    ];

    protected $fillable = [
        'category_id',
        'name',
        'url',
        'description',
        'date',
        'time',
        'location',
        'contact',
        'email',
        'link',
        'image',
        'sort_order',
        'status',
    ];

    protected $hidden = [
    ];

    protected $casts = [
    ];

    /***
     * Category Relationship
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    /***
     * Package Relationship
     */
    public function packages(){
        return $this->hasMany(Package::class);
    }

    /***
     * Booking Relationship
     */
    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    /**
     * Register media collection
     */
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

}
