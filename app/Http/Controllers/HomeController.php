<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    public function index(Request $request)
    {
        $collection = collect([
            'name' => 'jeroen',
            'phone_number' => '0630758354',
            'email' => 'jeroenr1996@hotmail.com'
        ]);

        $user = $request->user();
        $user->makeVisible('password');
        $user->makeHidden(['id', 'name']);

        $users = User::get();
        var_dump($users->keys());


        return view('home');
    }
}
