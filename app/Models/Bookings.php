<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'service_id',
        'hotel_id',
        'date',
        'quantity',
        'total_cost',
        'loyalty_points_earned',
        'status',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'integer',
        'quantity' => 'integer',
        'total_cost' => 'integer',
        'loyalty_points_earned' => 'integer',
        'created_at' => 'integer',
        'updated_at' => 'integer',
    ];
}
