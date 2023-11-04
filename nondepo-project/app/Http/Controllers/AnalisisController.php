<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\users;
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\m_module;

class AnalisisController extends Controller
{
    public function index()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('analisis.index', ['showdata' => $menu,]);
    }
}
