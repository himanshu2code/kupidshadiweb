<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
//use App\Models\User;
// AuthUser

//use App\Models\User;

class AuthController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        // dd($request->all());

        // validate data
        $request->validate([
            'email' => 'required',
            'psw' => 'required'
        ]);
        $users = User::all();
        return View('display.users',compact('users'));
    }

    public function register(Request $request){


        // dd($request->all());

        User::create([

            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'income'=>$request->income,
            'occupation'=>$request->occupation,
            'family'=>$request->family,
            'manglik'=>$request->manglik,
            'expincome'=>$request->expincome,
            'preferoccupation'=>$request->preferoccupation,
            'preferfamily'=>$request->preferfamily,
            'prefermanglik'=>$request->prefermanglik,
        ]);
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect( route('home'));
        }
        // return view('display.users');
    }
    public function home(){
        $users = User::all();
        // dd($users[0]);
        // $users =$users[0];
        // dd($users->fname);
        return View('display.users',compact('users'));
    }
    public function register_view(){
        return view('auth.register');
    }
    // public function index(){
    //     return view('auth.login');
    // }
}
