<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'taggable_id',
        'taggable_type',
        'tag_id',
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
