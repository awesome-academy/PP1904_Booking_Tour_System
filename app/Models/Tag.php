<?php

namespace App\Models;

use App\Models\TagDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function tagDetails()
    {
        return $this->hasMany(TagDetail::class);
    }
}
