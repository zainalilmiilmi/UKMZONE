<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chats;

class ChatController extends Controller
{
    public function index()
    {
        $Chats = Chats::all();
        return view('pages.forum', compact('Chats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $newChat = new Chats();
        $newChat->time = now();
        $newChat->text = $request->message;
        $newChat->user = 'u1'; // Ganti dengan user yang sesuai, bisa diambil dari auth jika sudah terimplementasi
        $newChat->save();

        return redirect()->route('forum.index');
    }

    public function destroy(Chats $chat)
    {
        $chat->delete();
        return redirect()->route('forum.index');
    }
}
