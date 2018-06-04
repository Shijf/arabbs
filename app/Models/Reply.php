<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];

    //关联帖子ID
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    //关联用户ID
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
