<?php

namespace App\Models;

use App\Models\BookingDetail;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'status_id',
        'is_done',
        'price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function bookingDetail()
    {
        return $this->hasOne(BookingDetail::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}
