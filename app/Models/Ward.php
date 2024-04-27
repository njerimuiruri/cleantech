<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
    class Ward extends Model
    {
        use HasFactory;
        protected $primaryKey = 'ward_id';

        protected $fillable = [
            'ward_name',
            'subcounty_id',
        ];
    
        public function subcounty()
        {
            return $this->belongsTo(Subcounty::class);
        }
    }