<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\AdminModel;
use App\AboutModel;
use App\AffiliatesModel;

class AdminController extends Controller
{

	//Admin Dashboard

    public function dashboard()
    {
        if(!empty(session('admin_email')))
        {
            return view('admin/index');
        }
        else
        {
            return redirect('/admin_login');
        } 
    }


    //Login

    public function admin_login()
    {
        return view('admin/login');
    }



    //Login authentication

    public function admin_check(Request $check)
    {
        $this->validate($check, [
            "email" => "required|email:filter|exists:admin,email",
            "password" => "required",
        ]);

        $data = AdminModel::where('email',$check->email)->first();

        if(Hash::check($check->password,$data->password) == true)
        {
            session(['admin_name' => $data['name']]);
            session(['admin_email' => $data['email']]);
            return redirect("/_admin");
        }
        else
        {
            return back()->with('error','Email or Password is not valid');
        }
    }


    //Log out

    public function admin_logout()
    {
        session()->forget('admin_name');
        session()->forget('admin_email');
        return redirect('/_admin');
    }


    //Edit About

    public function edit_about()
    {
    	$data = AboutModel::first();
        return view('admin.about',compact('data'));
    }

    public function edit_about_validate(Request $r)
    {
        $this->validate($r,[
            'overview_image' => 'mimes:jpeg,png,jpg|max:2048|nullable',
        ]);

        $update = AboutModel::find($r->id);

        if(!empty($r->page_title))
        {
            $update->page_title = $r->page_title;
        }

        if(!empty($r->overview_heading))
        {
            $update->overview_heading = $r->overview_heading;
        }

        if(!empty($r->overview_content))
        {
            $update->overview_content = $r->overview_content;
        }

        $image = $r->file('overview_image');
        if(!empty($image))
        {
            $delete = public_path("site_assets/images/".$update->overview_image);
            unlink($delete);
            $image_name = time().".".$image->getClientOriginalExtension();
            $destination = public_path('site_assets/images');
            $image->move($destination,$image_name);
            $update->overview_image = $image_name;
        }
        
        if(!empty($r->detail_heading))
        {
            $update->detail_heading = $r->detail_heading;
        }
        
        if(!empty($r->detail_content))
        {
            $update->detail_content = $r->detail_content;
        }
        
        if(!empty($r->detail_subheading_1))
        {
            $update->detail_subheading_1 = $r->detail_subheading_1;
        }
        
        if(!empty($r->detail_subcontent_1))
        {
            $update->detail_subcontent_1 = $r->detail_subcontent_1;
        }
        
        if(!empty($r->detail_subheading_2))
        {
            $update->detail_subheading_2 = $r->detail_subheading_2;
        }
        
        if(!empty($r->detail_subcontent_2))
        {
            $update->detail_subcontent_2 = $r->detail_subcontent_2;
        }
        
        if(!empty($r->detail_subheading_3))
        {
            $update->detail_subheading_3 = $r->detail_subheading_3;
        }
        
        if(!empty($r->detail_subcontent_3))
        {
            $update->detail_subcontent_3 = $r->detail_subcontent_3;
        }
        
        if(!empty($r->detail_subheading_4))
        {
            $update->detail_subheading_4 = $r->detail_subheading_4;
        }
        
        if(!empty($r->detail_subcontent_4))
        {
            $update->detail_subcontent_4 = $r->detail_subcontent_4;
        }
        
        if(!empty($r->capitalization_heading))
        {
            $update->capitalization_heading = $r->capitalization_heading;
        }
        
        if(!empty($r->capitalization_content))
        {
            $update->capitalization_content = $r->capitalization_content;
        }
        
        if(!empty($r->features_heading))
        {
            $update->features_heading = $r->features_heading;
        }
        
        if(!empty($r->features_subheading_1))
        {
            $update->features_subheading_1 = $r->features_subheading_1;
        }
        
        if(!empty($r->features_subcontent_1))
        {
            $update->features_subcontent_1 = $r->features_subcontent_1;
        }
        
        if(!empty($r->features_subheading_2))
        {
            $update->features_subheading_2 = $r->features_subheading_2;
        }

        if(!empty($r->features_subcontent_2))
        {
            $update->features_subcontent_2 = $r->features_subcontent_2;
        }
        
        if(!empty($r->features_subheading_3))
        {
            $update->features_subheading_3 = $r->features_subheading_3;
        }
        
        if(!empty($r->features_subcontent_3))
        {
            $update->features_subcontent_3 = $r->features_subcontent_3;
        }
        
        $update->save();
        return back()->with('success','Updated Successfully');
    }


    //Edit Affiliates
    public function edit_affiliates()
    {
        $data = new AffiliatesModel();
        return view('admin.affiliates',compact('data'));
    }

    public function valid_affiliates(request $r)
    {

    }
}
