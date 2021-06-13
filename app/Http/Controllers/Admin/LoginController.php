<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function LoginView(){
        // return registers::all();
        // return $users = DB::select('select * from state');
        return view('LoginView.LoginForm');
    }

    public function loginCheck(Request $req){
        // return $req->input();
        $match_data=User::where(['login_id'=>$req->login_id])->first();
        if($match_data!="" && Hash::check($req->password, $match_data->login_password)){
            
        }
    }
}
