<?php


namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use  App\Http\Controllers\HomeController;
use App\user;
use App\Http\Controllers\Session;
use Auth;
class HomeController extends Controllers
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function register()
    {
        return view('register');
    }
     public function showlogin()
    {
        return view('login');
    }
         public function dologin(Request $request)
    {
     
	
		$rules = array(
			'email'=> 'required|email', 
			'password' => 'required|alphaNum|min:1' 
		);
		
		$validator = \Validator::make($request->all(),$rules);
		
//	if ($validator->fails()) {
//			return Redirect::to('login-register')
//				->withErrors($validator) 
//				->withInput($request->except('password'));
//		} else {
			
			$userdata = array(
				'email' 	=> $request->email,
				'password' 	=> $request->password
			);
                 
			echo 'welcome tologin';
                          return Redirect::to('home');
			if (Auth::attempt($userdata)) {
				
				echo 'SUCCESS!';
			} else {
			       return Redirect::to('login');	
				
			}
    }
    
	
    	public function insertregister(Request $request)
	{
	            $inputs=$request->all();
                    
                    $register= new register;
		    $register->name=$request->name;
                    $register->email=$request->email;
                    $register->username=$request->username;
                    $register->password=$request->password;
                    $register->save();
                      //Session::flash('flash_message', 'Successfully Register!');

        return redirect()->back();
        echo 'Register Sucessfully';
        }
}
