@extends('layout.app')

@section('title', 'Forum')

@section('content')
<style>
    .chat {
        display: flex;
        flex-direction: column;
        background-color: #f4f4f4;
        min-height: 100vh;
        padding: 20px;
    }
    .chat .forum {
        width: 100%;
        max-width: 1000px;
        margin-top: 20px;
        padding: 20px 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .chat .forum .post {
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        position: relative;
    }
    .chat .forum .post .time {
        font-size: 12px;
        color: #999;
        position: absolute;
        left: 5px;
        top: 0px;
    }
    .chat .forum .post .text {
        font-size: 18px;
        background-color: #e1ffc7;
        border-radius: 10px;
        padding: 20px;
        margin-top: 5px;
        margin-left: 30px;
    }
    .chat .write {
        width: 100%;
        max-width: 1000px;
        margin-top: 20px;
        padding: 20px 30px;
        background-color: #f4f4f4;
        border-top: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .chat .write textarea {
        flex: 1;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        resize: none;
    }
    .chat .write button {
        margin-left: 10px;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .chat .write button:hover {
        background-color: #555;
    }
    .chat .delete-btn {
        position: absolute;
        top: 0px;
        right: 10px;
        background: none;
        border: none;
        color: #999;
        cursor: pointer;
    }
    .chat .delete-btn:hover {
        color: #333;
    }
</style>
<h2>Forum Diskusi</h2>
<div class="chat">
    <div class="forum mainChat">
        @foreach($Chats as $chat)
            <div class="post u1" id="post-{{ $chat->id }}">
                <div class="time">{{ $chat->time }}</div>
                <div class="text">{{ $chat->text }}</div>
                @if(Auth::check() && Auth::user()->is_admin)
                    <form action="{{ route('forum.destroy', $chat) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn">Hapus</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
    <div class="write">
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <textarea name="message" id="message" rows="3" placeholder="Tulis pesan..."></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>
@endsection
