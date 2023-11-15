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
        return view('detail_resume', ['showdata' => $menu,]);
    }

    public function cfs_view()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('cfs_form', ['showdata' => $menu,]);
    }
    public function cfs_tally()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('cfs_tally', ['showdata' => $menu,]);
    }
    public function cargo_release()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('cargo_release', ['showdata' => $menu,]);
    }

    public function cargo_receiving()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('cargo_receiving', ['showdata' => $menu,]);
    }

    public function cfs_form(Request $request)
    {
        dd($request);
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $shipper = $request->input('shipper');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $closing_date = $request->input('closing_date');
        $remark = $request->input('remark');

        $no_centainer_strip = $request->input('no_container_strip');
        $seal_strip = $request->input('seal_strip');
        $no_container_staf = $request->input('no_container-staf');
        $seal_staf = $request->input('seal_staf');
    }
}
