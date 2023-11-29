<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_module;
use App\Models\Users;

class joborderController extends Controller
{
    public function index()
    {
        $db = m_module::all();

        return view('create_jo', ['showdata' => $db]);
    }
}
