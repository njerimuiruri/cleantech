<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use HasFactory, Notifiable;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'phone_number',
        'email',
        'password',
        'otp_code_for_registration',
        'otp_expiry_for_registration',
        'otp_code_for_password_reset',
        'otp_expiry_for_password_reset',
        'active',
    ];

    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'otp_expiry_for_registration' => 'datetime',
        'otp_expiry_for_password_reset' => 'datetime',
    ];
    public function getFilamentName(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
