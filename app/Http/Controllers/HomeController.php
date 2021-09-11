<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\ChekRole;


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
        return view('template.index');
        $role = Auth::user()->role;
        if($role == 'admin'){
            return redirect()->to('admin.index');
        } if($role == 'kasir'){
            return redirect()->to('kasir.index');
        }else {
            return redirect()->to('logout');
        }
    }

    public function admin()
    {
        return view ('admin.user.index');
    }

    
    public function kasir()
    {
        return view ('kasir.index');
    }
}
