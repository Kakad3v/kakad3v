<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function booted()
    {
        static::created(function($model){
            $model->slug = Str::slug($model->title);
        });
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

