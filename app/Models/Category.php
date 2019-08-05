<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $table = 'categories';

    protected $guarded = ['id'];

    // 与文章关联
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['landscape'], ['http://', 'https://'])) {
            return $this->attributes['landscape'];
        }
        return '/upload/'.$this->attributes['landscape'];
    }


}
