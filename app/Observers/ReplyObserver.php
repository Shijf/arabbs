<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    public function creating(Reply $reply)
    {
        //处理XSS威胁
        $reply->content = clean($reply->content, 'user_topic_body');
    }
    //添加评论后
    public function created(Reply $reply)
    {
        $reply->topic->increment('reply_count', 1);
    }

    public function updating(Reply $reply)
    {
        //
    }
}