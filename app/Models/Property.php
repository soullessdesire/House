<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $guarded = [];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function feature()
    {
        return $this->hasMany(PropertyFeature::class);
    }
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
    public function bookings()
    {
        return $this->hasMany(PropertyBooking::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
    public function bookee()
    {
        return $this->hasOne(PropertyBooking::class, 'user_id');
    }
}
