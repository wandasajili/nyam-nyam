<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request){
        $messages = Message::get();
        return view('admin.message.index', compact('messages'));
    }
}
