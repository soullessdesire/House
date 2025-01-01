<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'county',
        'subcounty',
        'consitituency',
        'ward',
        'location',
        'sublocation',
        'village'
    ];
    public function id()
    {
        return $this->id;
    }
}
