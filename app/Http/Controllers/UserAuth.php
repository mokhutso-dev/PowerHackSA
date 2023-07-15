<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserAuth extends Controller
{
    //Add Into Database function
   function addUser(Request $request){
        $validator = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:techies',
            'password'=>'required',
            // 'address'=>'required',
            // 'phone'=>'required',
         ]);

         $query = DB::table('techies')->insert([
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'phone'=>$request->input('phone'),
         ]);
        //  print_r($validator);

        // return $validator?redirect('/auth/login')->with('success', ' Registration Successful!'):
        //       redirect()->back()->withErrors($validator);
        if($query)
        { return redirect('/auth/login')->with('success', ' Registration Successful!');
        }}
   //   Update details
   function userUpdate(Request $request){
       $validator=$request->validate([
        'name'=>'required',
        'email'=>'required',
       ]);
       $update = DB::table('users')
       ->where('email',$request->input('email'))
       ->update([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
         'address'=>$request->input('address'),
         'phone'=>$request->input('phone'),
       ]);
       $validator?redirect('/auth/login'):
              redirect()->back()->withErrors($validator);

        if ($update) {
            $logout_request =  $request->session()->forget('name');
            $logout_request =  $request->session()->forget('email');
            $logout_request =  $request->session()->forget('address');
            $logout_request =  $request->session()->forget('phone');
            session(['name' =>$request->input('name')]);
            session(['email' => $request->input('email')]);
            session(['address' => $request->input('address')]);
            session(['phone' => $request->input('phone')]);
            return redirect()->back()->with('success', 'User details Updated Successfully');

        } else {
            return redirect()->back()->with('failure', 'User details Update Failure');

        }
     }
   // Login Authorization
   function loginUser(Request $login_req){
      // get user email and pass from request
         $email = $login_req->input('email');
         $password = $login_req->input('password');
         // get users inventory
         $user = DB::table('techies')->whereEmail($email)->first();
         // if user exist run check
         if ($user) {
            // Get hashed pass
               $hashed = $user->password;
               // compare and set session if match
            if(Hash::check($password, $hashed)) {
                session(['first_name' => $user->first_name]);
                session(['last_name' => $user->last_name]);
                session(['email' => $email]);
                session(['password' => $password]);
                session(['phone' => $user->phone]);
                return redirect('/')->with('login-success', 'Login Successful!');

               }
            else {
                return redirect()->back()->with('login-failure','Incorrect Email or Password');
            }
            # code...
         }else{
            return redirect()->back()->with('login-failure','Incorrect Email or Password');
         }
     }
   //   Logout Auth
   function  logoutUser(Request $request){
        $logout_request =  $request->session()->forget('name');
        $logout_request =  $request->session()->forget('email');
        $logout_request =  $request->session()->forget('password');
        $logout_request =  $request->session()->forget('address');
        $logout_request =  $request->session()->forget('phone');
        return redirect('/')->with('logout-success', 'Log Out Successful!');
     }

}

