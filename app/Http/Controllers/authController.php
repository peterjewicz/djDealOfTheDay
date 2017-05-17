<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class authController extends Controller
{
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(Auth::attempt(['username' => $username, 'password' => $password])){
            return redirect('admin');
        }else{
            return redirect('login');
        }
    }
}
