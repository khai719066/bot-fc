<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function info()
    {
    	return View('thongtin');
    }
            
    public function display()
    {
        return redirect()->route("hcm");
    }
}