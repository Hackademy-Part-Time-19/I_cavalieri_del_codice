<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('homepage');
    }

    public function homepage() {
        return view('welcome');
    }

    public function careers() {
        return view('careers');
    }

    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail(compact('role' , 'email' , 'message')));

        switch ($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;

            case 'revisor':
                $user->is_revisor = NULL;
                break;

            case 'writer':
                $user->is_writer = NULL;
                break;

        }

        $user->update();

        return redirect(route('homepage'))->with('message' , 'Grazie per averci contattato!');
    }
}
