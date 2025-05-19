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

    public function destroy(Request $request, $id){
        $message = Message::findOrFail($id); // akan otomatis 404 jika tidak ada
        $message->delete();
        return redirect()->route('message.index')->with('success', 'Item deleted successfully');

    }
}
