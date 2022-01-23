<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function index()
    {
        return view('chat.index');
    }

    public function store(Request $request)
    {
        $message = auth()->user()->messages()->create([
            'body' => $request->body
        ]);

        $message['user'] = auth()->user();
        return response()->json($message, 201);
    }

    public function list(Message $message)
    {
        $messages = $message->with('user')->orderBy('id',"DESC")->limit(50)->latest()->get();
        return response()->json($messages);
    }

}
