<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Events\UserOnlined;
class ChatController extends Controller
{
    public function chat(){
        $users = User::where('id','<>',Auth::user()->id)->get();
        return view('chat/chatpublic')->with([
            'users'=>$users
        ]);
    }
    public function sendMessage(Request $req){
        broadcast(new UserOnlined($req->user(),$req->message));
       return json_encode($req->message);
    }
}
