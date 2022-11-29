<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Facade;
use PharIo\Manifest\Author;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $redirectTo;

    public function redirectTo()
    {
        switch(FacadesAuth::user()->role_id){
            case 2:
            $this->redirectTo = '/donatur';
            return $this->redirectTo;
                break;
            case 1:
                $this->redirectTo = '/admin';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
    }

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
        switch(FacadesAuth::user()->role_id){
            case 2:
                $this->redirectTo = '/donatur';
                return redirect()->route('donatur.index');
                break;
            case 1:
                $this->redirectTo = '/admin';
                return redirect()->route('admin');
                break;
            default:
                $this->redirectTo = '/login';
                return redirect()->route('login');
        }
    }
}
