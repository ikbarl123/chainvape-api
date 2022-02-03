<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Reply;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function ThreadList()
    {
        $thread = Thread::all();
        return $thread;
    }

    public function ThreadView($id)
    {
        $reply = Reply::where('thread_id',$id)->get();
        if ($reply->isEmpty()) {
            return Response(null,204);
         }
        return $reply;
    }

    public function CreateThread(Request $request)
    {
        $user=auth()->user();
        $thread = Thread::create([
            'title'=> $request['title'],
            'text'=> $request['text'],
            'user_id'=> $user['id']
        ]);

        return response(201);
    }
    
    public function AddReply(Request $request)
    {
        $user=auth()->user();
        $reply = Reply::create([
            'thread_id'=>$request['post_id'],
            'text'=> $request['text'],
            'user_id'=> $user['id']
        ]);

        return response(201);
    }

}
