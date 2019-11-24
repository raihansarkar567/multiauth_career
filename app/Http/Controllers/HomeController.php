<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $my_job_info=DB::table('jobs')
        ->orderBy('job_id','desc')
        ->get();
        $manage_product=view('home')
        ->with('my_job', $my_job_info);
        return view('layouts.app')
        ->with('home',$manage_product);
        // return view('home');
    }
}
