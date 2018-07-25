<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckSocietyModel;
class CheckSociety extends Controller
{
    //
    public function check(Request $request,$id){
               $is_society_available=CheckSocietyModel::where('user_id', $id)->first();
               $s_id=$is_society_available['s_id'];
               $s_name=$is_society_available['s_name'];
       if($is_society_available){
           return view('alreadySocieties',['s_id'=>$s_id,'s_name'=>$s_name]);
       }
       else{
           return view('societies',['id'=>$id]);
       }
    }
    public function store(Request $request){
        $user_id=$request->input('user_id');
        $s_id=rand();
        $s_name=$request->input('s_name');
        $s_email=$request->input('s_email');
        $s_address=$request->input('s_address');
        $s_account_no=$request->input('s_account_no');
        $pan_card=$request->input('pan_card');
        $c_tel_no=$request->input('c_tel_no');
        CheckSocietyModel::create(['user_id'=>$user_id,'s_id'=>$s_id,'s_name'=>$s_name,'s_email'=>$s_email,'s_address'=>$s_address,'s_account_no'=>$s_account_no,'pan_card'=>$pan_card,'c_tel_no'=>$c_tel_no]);
        return view('alreadySocieties',['s_id'=>$s_id,'s_name'=>$s_name]);
    }
}
