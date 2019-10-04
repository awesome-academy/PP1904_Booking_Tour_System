<?php

namespace App\Models;

use App\Models\CategoryDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function categoryDetails()
    {
        return $this->hasMany(CategoryDetail::class);
    }
}
