<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUsers;
use Illuminate\Support\Facades\Hash;
class RegisterUser extends Controller
{
    public function store(Request $request){
        $firstName=$request->input('first_name');
        $lastName=$request->input('last_name');
        $email=$request->input('email');
        $mobile=$request->input('mobile_number');
        $password=Hash::make($request->input('password'));
        RegisterUsers::create(['firstname'=>$firstName,'lastname'=>$lastName,'email'=>$email,'mobilenumber'=>$mobile,'password'=>$password]);
        return view('registersuccess');
    }
}
