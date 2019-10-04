<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'rate_avg',
        'image',
        'location_id',
    ];

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }

    public function taggable()
    {
        return $this->morphTo();
    }
}
