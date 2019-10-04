<?php

namespace App\Models;

use App\Models\CategoryDetail;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\TagDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'rate_avg',
        'short_desc',
        'content',
        'image',
    ];

    public function categoryDetails()
    {
        return $this->morphToMany(CategoryDetail::class, 'categoryable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function rates()
    {
        return $this->morphMany(Rate::class, 'rateable');
    }

    public function tagDetails()
    {
        return $this->morphToMany(TagDetail::class, 'taggable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
