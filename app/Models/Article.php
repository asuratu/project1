<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        '' => 'boolean', // on_sale 是一个布尔类型的字段
    ];

    // 与栏目关联
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
