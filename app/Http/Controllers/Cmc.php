<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cmodel;

class Cmc extends Controller
{
    public function cregister()
    {
    	return view('signup');
    }

    public function crinsert(Request $r)
    {
    	$c = new Cmodel();
    	$c->name = $r->name;
    	$c->email = $r->email;
    	$c->password = $r->password;
    	$c->date = $r->date;
    	$c->country = $r->country;
    	$c->gender = $r->gender;
    	$c->meal = implode(",",$r->meal);
    	$c->agree = $r->agree;
    	$c->save();
    	return back()->with('success','User data inserted');
    }

    public function table()
    {
    	$t = Cmodel::all();
    	return view('table',compact('t'));
    }

    public function edit($id)
    {
    	$data = Cmodel::find($id);
    	return view('signup',compact('data'));
    }

    // public function delete($id)
    // {
    // 	$result = Cmodel::find($id);
    // 	dd($result->all());
    // }

	public function update(Request $req)
	{
		$u = Cmodel::find($req->id);
		$u->name = $req->name;
		$u->email = $req->email;
		$u->date = $req->date;
		$u->country = $req->country;
		$u->gender = $req->gender;
		$u->meal = implode(',',$req->meal);
		$u->save();
		return back()->with('success','User data updated');
	}

	public function delete($id)
	{
		$delete = Cmodel::find($id);
		$delete->delete();
		return redirect('/table');
	}

	public function login()
	{
		return view('login');
	}

	public function checklogin(Request $re)
	{
		$l = Cmodel::all()->where('id',$re['id'])->where('password',$re['password'])->toArray();
		// dd($l);
		if(!empty($l))
		{
			return ("Successfully Logged in");
		}
		else
		{
			return "Sorry try again";
		}
	}
}
?>
