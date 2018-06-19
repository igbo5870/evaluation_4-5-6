<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id', 'room_id', 'booking_status_id', 'arrivals_date', 'departure_date',
        'created_at', 'updated_at',
    ];
}
