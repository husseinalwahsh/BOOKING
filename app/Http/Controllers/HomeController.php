<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country;
class HomeController extends Controller
{
   
public function Login() {
    return view('Login');
}

public function Hotale() {
    return view('Hotale');
}
public function Register() {
    return view('Register');
}
public function Booking() {
  
}

}
