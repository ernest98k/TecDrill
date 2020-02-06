<?php

namespace App\Http\Controllers;

use App\User;
use App\Recruitment;
use App\Opinion;
use Illuminate\Http\Request;

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
        $users = User::all();
        $recruitments=Recruitment::orderBy('id', 'DESC')->take(3)->get();
        $opinions=Opinion::orderBy('id', 'DESC')->take(3)->get();

        return view('boindex', compact("users","recruitments","opinions"));
    }
}
