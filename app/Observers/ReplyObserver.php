<?php

namespace App\Observers;

use App\Models\Reply;
use App\Notifications\TopicReplied;
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
        $topic = $reply->topic;
        $topic->increment('reply_count', 1);

        // 通知作者话题被回复了
        $topic->user->notify(new TopicReplied($reply));
    }

    public function updating(Reply $reply)
    {
        //
    }
}