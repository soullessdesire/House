<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'bedrooms',
        'title',
        'description',
        'owner_id',
        'location_id',
        'status'
    ];
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
    public function videos()
    {
        return $this->hasMany(PropertyVideo::class);
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
