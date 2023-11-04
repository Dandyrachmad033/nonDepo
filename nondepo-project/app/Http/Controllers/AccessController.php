<?php

namespace App\Http\Controllers;

use App\Models\m_module;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AccessController extends Controller
{
    public function index()
    {
        $db = m_module::all();
        return view('access_management', ['showdata' => $db]);
    }

    public function editaccess()
    {
        $db = m_module::all();

        return view('edit_access_management', ['showdata' => $db]);
    }
}
