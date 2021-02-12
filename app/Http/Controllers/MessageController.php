<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function get(){
        $messages = Message::get();
        return view('messages')->with(['messages'=>$messages]);
    }

    public function store(Request $request){
        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone_number = $request->phone_number;
        $message->message = $request->message;

        if($message->save()){
            return response()->json(['message' => 'success']);
        } else {
            return response()->json(['message' => 'failed']);
        }
    }
}
