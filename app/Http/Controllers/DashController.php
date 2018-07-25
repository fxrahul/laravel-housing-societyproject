<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashModel;
use Illuminate\Support\Facades\Auth;
class DashController extends Controller
{
    //
    public function dashboard(Request $request,$s_id){
        $result=DashModel::where('soc_id', $s_id)->get();
        // $m_maint_no=$result['m_maint_no'];
        // $m_name=$result['m_name'];
        // $m_address=$result['m_address'];
        // $m_pan_card=$result['m_pan_card'];
        // $m_cel_no=$result['m_cel_no'];
        // $m_parking_charge=$result['m_parking_charge'];
        // $m_gas_charge=$result['m_gas_charge'];
        // $m_water_charge=$result['m_water_charge'];
        // $m_light_charge=$result['m_light_charge'];
        return view('dashview',['result'=>$result,'soc_id'=>$s_id]);
        // ['soc_id'=>$s_id,'m_maint_no'=>$m_maint_no,'m_name'=>$m_name,
        // 'm_address'=>$m_address,'m_pan_card'=>$m_pan_card,'m_cel_no'=>$m_cel_no,
        // 'm_parking_charge'=>$m_parking_charge,'m_gas_charge'=>$m_gas_charge,'m_water_charge'=>$m_water_charge,
        // 'm_light_charge'=>$m_light_charge]);
    }
    public function store(Request $request){
        $soc_id=$request->input('soc_id');
        $m_maint_no=$request->input('m_maint_no');
        $m_name=$request->input('m_name');
        $m_email=$request->input('m_email');
        $m_password=$request->input('m_password');
        $m_wing=$request->input('m_wing');
        $m_flat_no=$request->input('m_flat_no');
        $m_address=$request->input('m_address');
        $m_pan_card=$request->input('m_pan_card');
        $m_cel_no=$request->input('m_cel_no');
        $m_parking_charge='5000';
        $m_gas_charge='5000';
        $m_water_charge='5000';
        $m_light_charge='5000';
        $result=DashModel::create(['soc_id'=>$soc_id,'m_maint_no'=>$m_maint_no,'m_name'=>$m_name,'m_email'=>$m_email,
                                    'm_password'=>$m_password,'m_wing'=>$m_wing,'m_flat_no'=>$m_flat_no,'m_address'=>$m_address,
                                    'm_pan_card'=>$m_pan_card,
                                    'm_cel_no'=>$m_cel_no,'m_parking_charge'=>$m_parking_charge,
                                    'm_gas_charge'=>$m_gas_charge,
                                    'm_water_charge'=>$m_water_charge,'m_light_charge'=>$m_light_charge]);
        return view('registermembersuccess');
    }
    public function check(Request $request){
        $m_email=$request->input('email');
        $m_password=$request->input('password');
        $result=DashModel::where('m_email',$m_email)->where('m_password',$m_password)->first();
        if($result){
            return view('member_dash',['result'=>$result]);
        }
        else{
            return view('memberlogin');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return view('welcome');
    }
}
