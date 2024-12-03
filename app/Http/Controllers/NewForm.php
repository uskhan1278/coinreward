<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\NewModel;

	class NewForm extends Controller
	{
	    public function index()
	    {
	    	return view('NewForm');
	    }

	    public function insert(Request $request)
	    {
	    	$o = new NewModel();
	    	$o->name = $request->name;;
	    	$o->email = $request->email;;
	    	$o->password = $request->password;;
	    	$o->save();
	    	return "Successful";
	    }

	    public function fetch()
	    {
	    	$data = NewModel::all();
	    	return view("Newtable",compact('data'));
	    }

	    public function delete($id)
	    {
	    	$delete = NewModel::find($id);
	    	$delete->delete();
	    	return redirect('/view');
	    }

	    public function edit($id)
	    {
	    	$e = NewModel::find($id);
	    	return view('NewForm',compact('e'));
	    }

	    public function update(Request $request)
	    {
	    	$u = NewModel::find($request->id);
	    	$u->name = $request->name;
	    	$u->email = $request->email;
	    	$u->password = $request->password;
	    	$u->save();
	    	$data = NewModel::all();
	    	return view('NewTable',compact('data'));
	    }
	}
?>