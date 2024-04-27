<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrashCollection extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'trash_collection';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'collection_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'location_id',
        'collection_date_time',
        'is_special_request',
        'status',
        'trash_bag_count',
        'additional_bags_requested',
        'notes',
        'collection_day',
    ];

    /**
     * Get the user who requested the trash collection.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the location where the trash collection is requested.
     */
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
