<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'booking_id',
        'tour_id',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function tours()
    {
        return $this->hasMany(Tour::class, 'tour_id');
    }
}
