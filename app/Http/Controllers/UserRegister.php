<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Routing\Controller as BaseController;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserRegister extends Controller
{
   // SHOW REGISTER
   public function showregister
   {
   	// FORM VALIDATION
   	$request->validate([
            'first_name'=> 'required|string|max:255',
            'last_name'=> 'required|string|max:255',
            'mobile'=>'required|string|min:1|max:10',
            'email'=> 'required|string|email|max:191|unique:users',
            'password'=>'required|string|min:6',
             ]);
            //
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $mobile = $request->input('mobile');
            $email = $request->input('email');
            $password = $request->input('password');
            $token=sha1(time());

   }
}
