<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\CoinModel;
use App\AboutModel;

class Coinreward extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function about()
    {
        $data = AboutModel::first();
        return view('about',compact('data'));
    }

    public function howitworks()
    {
    	return view('howitworks');
    }

    public function affiliates()
    {
    	return view('affiliates');
    }

    public function gethelp()
    {
    	return view('gethelp');
    }

    public function profile()
    {        
        if(empty(session('email')))
        {
            return redirect('/');
        }
        else
        {
            $id = session('email');
            $data = CoinModel::where('email',$id)->first();
            return view('profile',compact('data'));
        }
    }

    public function faq()
    {
    	return view('faq');
    }

    public function news()
    {
    	return view('news');
    }

    public function blog()
    {
    	return view('blog');
    }

    public function login()
    {
        session()->forget('email');
    	return view('login');
    }

    public function register()
    {
    	return view('register');
    }

    public function registration(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|min:5|unique:registration,username',
            'email' => 'required|email:filter|unique:registration,email',
            'password' => 'required|min:8',
            'fname' => 'required|alpha',
            'lname' => 'required|alpha',
        ],[
            'fname.required' => 'The First Name field is Required',
            'fname.alpha' => 'The First Name may only contain letters.',
            'lname.required' => 'The Last Name field is Required',
            'lname.alpha' => 'The Last Name may only contain letters.'
        ]);

        $i = new CoinModel();
        $i->username = $request->username;
        $i->email = $request->email;
        $i->password = bcrypt($request->password);
        $i->fname = $request->fname;
        $i->lname = $request->lname;
        $i->save();
        return back()->with('success','Data is inserted Successfully');
    }

    public function logincheck(Request $login)
    {
        $this->validate($login, [
            'email' => 'required|email:filter|exists:registration,email',
            'password' => 'required|min:8',
        ],[
            'email.exists' => 'Could not find your Email, Check it again'
        ]);

        $d = CoinModel::where('email',$login->email)->first();
        $e = Hash::check($login['password'],$d['password']);
        
        if ($e == true)
        {
            session(['email' => $login['email']]);
            return redirect('/profile');
        }
        else
        {
            session()->forget('email');
            return back()->with("error","Email or password is not valid, Check again");
        }
    }

    public function edit(Request $edit)
    {
        if(!empty(session("email")))
        {
            $this->validate($edit, [
                'first_name' => 'alpha|min:5|nullable',
                'last_name' => 'alpha|min:5|nullable',
                'phone_number' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:11|nullable',
                'mobile_number' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10|nullable',
                'email' => 'email:filter|nullable|unique:registration,email,'.$edit->id,
                'location' => 'nullable',
                'profile_image' => 'image|mimes:jpeg,jpg,png,bmp|max:2048|nullable'
            ],[
                'profile_image.max' => 'Image may not be greater than 2 MB'
            ]);

            $update = CoinModel::find($edit->id);

            $image = $edit->file('profile_image');
            if($image)
            {
                // $delete = asset('public/site_assets/images/profile')."/".$update->profile_image;
                $delete = public_path("site_assets/images/profile/".$update->profile_image);
                if(!empty($update->profile_image))
                {
                    unlink($delete);
                }
                $image_name=time().session('email').".".$image->getClientOriginalExtension();
                $destination_path = public_path("site_assets/images/profile");
                $image->move($destination_path,$image_name);
                $update->profile_image = $image_name; 
            }

            if(!empty($edit->first_name))
            {
                $update->fname = $edit->first_name;
            }

            if(!empty($edit->last_name))
            {
                $update->lname = $edit->last_name;
            }

            if(!empty($edit->phone_number))
            {
                $update->phone = $edit->phone_number;
            }

            if(!empty($edit->mobile_number))
            {
                $update->mobile = $edit->mobile_number;
            }

            if(!empty($edit->email))
            {
                session(['email' => $edit['email']]);
                $update->email = $edit->email;
            }

            if(!empty($edit->location))
            {
                $update->location = $edit->location;
            }

            $update->save();
            return back()->with('success','Data is updated successfully');
        }
        else
        {
            return redirect("/");
        }          
    }
}
