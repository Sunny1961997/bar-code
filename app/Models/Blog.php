<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id', 'title', 'description', 'image', 'slug', 'publish'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}
