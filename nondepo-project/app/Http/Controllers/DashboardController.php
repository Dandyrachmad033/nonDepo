<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\m_module;
use Illuminate\Http\Request;
use App\Models\monitoring;
use App\Models\plugging;
use App\Models\Users;

class DashboardController extends Controller
{
    public function index()
    {

        $currentTime = Carbon::now();
        $get_shift = $this->getshift($currentTime);
        $today = Carbon::now()->format('d-m-Y');
        $db = m_module::all();

        $db_plug = plugging::where('status', 'plugging')->count();
        $db_monitor = monitoring::where('time_monitoring', 'LIKE', $today . '%')->where('monitor', 'not')
            ->where('shift', $get_shift)->count();


        return view('dashboard', ['showdata' => $db, 'db_plug' => $db_plug, 'db_monitor' => $db_monitor]);
    }

    private function getshift($time)
    {
        if ($time->between(Carbon::parse('07:00'), Carbon::parse('15:00'))) {
            return 'shift 1';
        } elseif ($time->between(Carbon::parse('15:00'), Carbon::parse('23:00'))) {
            return 'shift 2';
        } else {
            return 'shift 3';
        }
    }
}
