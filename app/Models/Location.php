<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

   
    protected $table = 'locations';
    protected $primaryKey = 'location_id';

    protected $fillable = [
        'user_id',
        'subcounty_id',
        'ward_id',
        'estate',
        'building_name',
        'house_number',
        'county_id',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   
    public function subcounty()
    {
        return $this->belongsTo(Subcounty::class);
    }

    
    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    
    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
