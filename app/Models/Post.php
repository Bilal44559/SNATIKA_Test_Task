<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'image',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
