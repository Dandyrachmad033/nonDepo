<?php

namespace App\Http\Controllers;


use App\Models\m_module;


class joborderController extends Controller
{
    public function index()
    {
        $db = m_module::all();

        return view('create_jo', ['showdata' => $db]);
    }
}
