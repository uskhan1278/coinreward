<?php

    namespace App\Http\Controllers;

    use Illuminate\Foundation\Bus\DispatchesJobs;
    use Illuminate\Routing\Controller as BaseController;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;   
    use App\ins;
    use Illuminate\Http\Request;
    use App\Http\Requests;

    class Form extends Controller{
        
        public function index(){
            return view('hello');
        }

        public function insert(Request $request)
        {
            // $ins = new ins();
            // $ins->name="Shubham";
            // $ins->save();

            dd($request->all());

        }
    }
?>