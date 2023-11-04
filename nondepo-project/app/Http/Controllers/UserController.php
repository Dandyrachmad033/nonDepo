<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_module;

class UserController extends Controller
{
    public function index()
    {
        $db = m_module::all();

        return view('user_management', ['showdata' => $db]);
    }

    public function edituser()
    {
        $db = m_module::all();
        return view('edit_user_management', ['showdata' => $db]);
    }
}
