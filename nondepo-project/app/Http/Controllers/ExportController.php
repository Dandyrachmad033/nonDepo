<?php

namespace App\Http\Controllers;

use App\Exports\HistoryPlug_export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\plugging;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function Export_plug(Request $request)
    {

        $startDate = $request->input('tanggal_awal');
        $endDate = $request->input('tanggal_akhir');
        $data = Plugging::select('no_container', 'time')
            ->where('time', [$startDate . ' ' . ' 11:47:56'])
            ->get();

        dd($data);
        $test = plugging::select('no_container')->whereDate('time', $startDate)->get();
        dd($test);
        $data = plugging::select('plug_id')->whereBetween(DB::raw('DATE(time)'), [$startDate, $endDate])->get();
        dd($data);
        return Excel::download(new HistoryPlug_export($startDate, $endDate), 'plug_history.xlsx');
    }
}
