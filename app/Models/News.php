<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
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
        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }
}
