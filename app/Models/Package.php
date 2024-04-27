<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

  
    protected $table = 'packages';
    protected $primaryKey = 'package_id';

    
    protected $fillable = [
        'package_name',
        'description',
        'price',
        'allows_special_request',
        'created_by',
        'is_active',
    ];

   
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
