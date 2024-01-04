<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function index() {
        $messages = Message::all()->sortByDesc('created_at');
        return view('contact',['messages'=>$messages]);
    }
}
