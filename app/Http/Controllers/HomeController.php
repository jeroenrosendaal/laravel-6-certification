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
        $user = $user->makeHidden(['id', 'name', 'password']);

        $collection = $collection->forget('email');

        return view('home')
            ->with('users', User::all());
    }
}
