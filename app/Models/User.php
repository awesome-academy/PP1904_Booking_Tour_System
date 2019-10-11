<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Contribute;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use NotificationChannels\WebPush\HasPushSubscriptions; //import trait

class User extends Model
{
    use HasPushSubscriptions;
    
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'user_id');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id');
    }

    public function contributes()
    {
        return $this->hasMany(Contribute::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
    public function rate()
    {
        return $this->hasMany(Rate::class, 'user_id');
    }
}
