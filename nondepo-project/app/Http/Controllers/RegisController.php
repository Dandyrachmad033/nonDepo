<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class RegisController extends Controller
{
    public function index()
    {
        return view('regis');
    }

    public function user_regis(Request $request)
    {

        $credentials = $request->validate([
            'username' =>  'required|min:6',
            'password' => 'required|min:8',
            'email' => 'required|email',
            'phone' => 'required|string'
        ]);

        if ($credentials) {
            $credentials['password'] = bcrypt($credentials['password']);
            users::create($credentials);
        }

        return view('regis');
    }
}
