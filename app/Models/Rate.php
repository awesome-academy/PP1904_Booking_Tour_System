<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rate extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'rate_point',
        'rateable_id',
        'rateable_type',
    ];

    public function rateable()
    {
        return $this->morphTo();
    }
}
