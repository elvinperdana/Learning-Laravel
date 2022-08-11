<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginview()
    {
        return view('shop.page.login.index');
    }
    
    
    public function user_regis()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create([
            "name" => request()->name,
            "email" => request()->email,
            "password" => md5(request()->password),
        ]);
        auth()->login($user);

        return redirect()->route('shop.login');
    }
    
      public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('shop.login.index');
        } 
    
    
        public function user_login(Request $request)
      {
          $user = User::where("email",$request->email)->where("password",md5($request->password))->first();
        
          if(!$user){
              return redirect()->route('shop.login');
          }
          
          Auth::login($user);
    
          return redirect()->route('shop.dashboard');
    
      }
    
}

