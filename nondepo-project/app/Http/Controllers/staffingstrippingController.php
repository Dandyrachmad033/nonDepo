<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\users;
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\m_module;

class staffingstrippingController extends Controller
{
    public function index()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('staf-strip', ['showdata' => $menu,]);
    }

    public function detail()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('details_view', ['showdata' => $menu,]);
    }

    public function cfs_view()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('cfs_form', ['showdata' => $menu,]);
    }
}
