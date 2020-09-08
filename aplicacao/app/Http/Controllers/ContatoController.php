<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        Mail::to('rgcoelho@uenp.edu.br');
        $data=['message'=>'Policia','cc'=>'dkfsdf'];
        Mail::send('contatook',['user' => $user],function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');
            $m->to($user->email, $user->name)->subject('Your Reminder!');
            }
        );
    }
}
