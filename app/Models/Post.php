<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function booted()
    {
        static::creating(function($model){
            $model->slug = Str::slug($model->title);
        });
    }
    
    public function image()
    {
        if (!$this->image_url) {
            return 'https://images.unsplash.com/photo-1542435503-956c469947f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80';
        }
        
        return Storage::disk('public')->url($this->image_url);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

