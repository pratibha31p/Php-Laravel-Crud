<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    
    function login()
    {
        // echo Hash::make('admin');
        // exit;
        return view('admin.login');

    }
   
    public function makeLogin(Request $request)
    {
        $data=array(

            'email' => $request->email,

            'password' =>$request->password
        );

        
        if(Auth::attempt($data))
        {

            return redirect()->route('admin.dashboard');
        }
        else
        {
            return back()->withErrors(['message'=>'invalid details']);
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
     function register()
    {
       
        return view('admin.register');

    }

    public function makeregister(Request $request)
    {
        //
          $request->validate([
            'name'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            
            'dob'=>'required',
             'password'=>'required'
        ]);
        $data=array(
            'name' => $request->name,
            'email' =>$request->email,
            'mobile' =>$request->mobile,
            'dob' =>$request->dob,
            'password' =>Hash::make($request->password)
            
        );
      
        $create=USer::create($data);

        return redirect()->route('admin.login');

    }
 
}
