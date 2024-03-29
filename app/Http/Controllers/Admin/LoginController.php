<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    public function show_login_view(){
        return view('admin.auth.login');
    }





    public function login(LoginRequest $request){   
      
if(auth()->guard('admin')->attempt(['username'=>$request->input('username'),'password'=>$request->input('password')]))
{

   return redirect()->route('admin.dashboard');



}


    }
    public function make_new_admin(){
        $admin=new App\Models\Admin();
        $admin->id=1;
        $admin->name='admin';
        $admin->email='admin@gmail.com';
        $admin->password=bcrypt('admin');
        $admin->username="admin";
        $admin->save();
    }
    
}
