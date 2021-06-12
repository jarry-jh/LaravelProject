<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\registers;

class LoginController extends Controller
{
    public function LoginView(){
        // return registers::all();
        // return $users = DB::select('select * from state');
        return view('LoginView.LoginForm');
    }

    public function loginCheck(Request $req){
        // return $req->input();
        return registers::where([['login_id'=>$req->login_id] && ['password'=>$req->password]])->first();
        // return $match;
    }
}
