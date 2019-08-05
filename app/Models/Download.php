<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $guarded = ['id'];

    public function getFileUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['attachment'], ['http://', 'https://'])) {
            return $this->attributes['attachment'];
        }
        return '/upload/'.$this->attributes['attachment'];
    }

}
