<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class AddJobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:company');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_job()
    {
        return view('add_job');
    }

    public function submit_job(Request $request){
        $data= array();
        $data['job_title']=$request->job_title;
        $data['job_des']=$request->job_des;
        $data['salary']=$request->salary;
        $data['location']=$request->location;
        $data['country']=$request->country;
        // $data['company_id']=$request->company_id;

        DB::table('jobs')->insert($data);
        Session::put('product_message','Product added sucsessfully!!!');
        return Redirect::to('/company');
    }
}
