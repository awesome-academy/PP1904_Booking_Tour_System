<?php

namespace App\Models;

use App\Models\CategoryDetail;
use App\Models\TagDetail;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'short_desc',
        'content',
        'image',
    ];

    public function categoryDetails()
    {
        return $this->morphToMany(CategoryDetail::class, 'categoryable');
    }

    public function tagDetails()
    {
        return $this->morphToMany(TagDetail::class, 'taggable');
    }

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
