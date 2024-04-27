<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsReminder extends Model
{
    use HasFactory;

    
    protected $table = 'sms_reminders';

    protected $primaryKey = 'reminder_id';

   
    protected $fillable = [
        'user_id',
        'reminder_type',
        'reminder_date_time',
        'status',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
