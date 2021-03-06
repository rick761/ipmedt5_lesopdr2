<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

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
        $this->middleware('studentcheck');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::All();
        return view('home',['modules' => $modules]);
    }
}
