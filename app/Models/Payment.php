<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';

    
    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'user_id',
        'package_id',
        'payment_amount',
        'payment_date_time',
        'payment_method',
        'payment_status',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
