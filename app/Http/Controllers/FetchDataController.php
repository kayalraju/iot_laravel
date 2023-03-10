<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Validator;
use Hash;
use Auth;
use Session;

class FetchDataController extends Controller
{
    public function fetch_data(){
        // $url = Http::get("https://io.adafruit.com/api/v2/NLServer/feeds/car.sumanlong/data?X-AIO-Key=aio_FsLo68DYBJ1qB3HzczxEKME613Uh");
        // $data=json_decode($url);
        $sosdata = Http::get("https://io.adafruit.com/api/v2/NLServer/feeds/car.sumanpolice/data?X-AIO-Key=aio_FsLo68DYBJ1qB3HzczxEKME613Uh");
        $data=json_decode($sosdata);
        
        //return $data;
        return view('fetch_all_data',[
            // "user"=>$data,
            "sos"=>$data
        ]);
    }

    public function register(){
        return view('register');
    }

    public function user_create(Request $request){
        $request->validate([
            'name'=> 'required|max:30',
            'phone'     => 'required|unique:users',
            'email'     => 'required|unique:users',
            'password' => 'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
           'confirm_password' => 'required|required_with:password|same:password|min:8',
        ]);
    $addUser= new User();
    $addUser->name=$request->input('name');
    $addUser->email=$request->input('email');
    $addUser->phone=$request->input('phone');
    $addUser->password =Hash::make($request->input('password'));
    //$addUser->name=$request->input('name');
    $addUser->save();
    return redirect()->route('login')->with('success','User Register Successfully Now login');
    //return view('web.agent-register');
}

public function login(){
    return view('login');
}
public function login_create(Request $request){
    $request->validate([
        'email'   => 'required|email',
        'password' => 'required|min:6'
    ]);
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
       $user=Auth::user();
         Session::put('user', $user);
        return redirect()->route('fetchdata');
    }
    return back()->withInput($request->only('email', 'remember'));
}


public function logout(){
    if(Session::has('user')){
        Auth::logout();
    }
    session()->flush();
    return redirect()->route('register');
  }

}
