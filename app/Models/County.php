<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    
    protected $table = 'counties';

    
    protected $primaryKey = 'county_id';

    
    protected $fillable = [
        'county_name',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
