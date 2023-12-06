<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_module;
use App\Models\monitoring;
use App\Models\plugging;
use Carbon\Carbon;


class reeferserviceController extends Controller
{
    public function monitoring()
    {
        $menu = m_module::with('sub_m_module')->get();
        $data_monitor = monitoring::orderBy('id', 'desc')->where('monitor', 'not')->get();
        return view(
            'reefer_monitoring',
            [
                'showdata' => $menu,
                'data_monitor' => $data_monitor
            ]
        );
    }

    public function not_monitoring()
    {
        // Misalnya, Anda memiliki model bernama YourModel
        $uniqueDates = monitoring::selectRaw('DATE_FORMAT(time_monitoring, "%d-%m-%Y") as date')
            ->distinct()
            ->orderBy('date', 'asc')
            ->get();


        // $uniqueDates sekarang berisi koleksi dari tanggal unik
        $menu = m_module::with('sub_m_module')->get();
        $data_monitor = monitoring::selectRaw('*, DATE_FORMAT(time_monitoring, "%d-%m-%Y") as formatted_date')
            ->orderBy('time_monitoring', 'asc')
            ->where('monitor', 'not')
            ->get();


        return view(
            'not_monitoring',
            [
                'showdata' => $menu,
                'data_monitor' => $data_monitor,
                'date' => $uniqueDates
            ]
        );
    }

    public function pti()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('reefer_pti', ['showdata' => $menu]);
    }


    public function plugging()
    {
        $view_data = plugging::orderBy('plug_id', 'desc')->where('status', 'Plugging')->paginate(50);
        $menu = m_module::with('sub_m_module')->get();
        return view('reefer_plugging', ['showdata' => $menu, 'data' => $view_data]);
    }

    public function start_plugging(Request $request)
    {


        $validatedData = $request->validate([
            'no_container' => 'required|string|size:11',
            'set_temp' => 'required|integer|regex:/^[0-9]+$/',
            'cel_one' => 'required|string',
            'sup_temp' => 'required|integer|regex:/^[0-9]+$/',
            'cel_two' => 'required|string',
            'ret_temp' => 'required|integer|regex:/^[0-9]+$/',
            'cel_tree' => 'required|string',
            'remark' => 'string|nullable',
            'alarm' => 'string|nullable',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg',
            // Contoh validasi file gambar
        ]);

        if ($validatedData) {

            $currentTime = Carbon::now();
            $currentShift = $this->startshift($currentTime);
            $nextshift = $this->getShift($currentTime);
            $no_container = $request->input('no_container');
            $set_temp = $request->input('set_temp');
            $cel_one = $request->input('cel_one');
            $sup_temp = $request->input('sup_temp');
            $cel_two = $request->input('cel_two');
            $ret_temp = $request->input('ret_temp');
            $cel_tree = $request->input('cel_tree');
            $remark = $request->input('remark');
            $alarm = $request->input('alarm');
            $photoNames = [];
            $photos = $request->file('photo');
            foreach ($photos as $photo) {
                $hashName = $photo->hashName();
                $photo->store('photo-start-plug');
                $photoNames[] = $hashName;
            }
            $compact_photo_start = implode(',', $photoNames);
            $time = now();
            $timeString = $time->format('Y-m-d H:i:s');
            $set_point = $cel_one . $set_temp;
            $supply_temp = $cel_two . $sup_temp;
            $return_temp = $cel_tree . $ret_temp;
            $data = [
                'no_container' => $no_container,
                'set_temp' => $set_point,
                'sup_temp' => $supply_temp,
                'ret_temp' => $return_temp,
                'remark' => $remark,
                'time' => $timeString,
                'alarm' => $alarm,
                'photo' => $compact_photo_start,
                'shift' => $currentShift,
                'monitor' => 'done'
            ];
            plugging::create($data);


            $dataForMonitoring = [
                'no_container' => $no_container,
                'set_temp' => $set_point,
                'sup_temp' => $supply_temp,
                'ret_temp' => $return_temp,
                'remark' => $remark,
                'time_monitoring' => $timeString, // Kolom ini di tabel monitoring
                'alarm' => $alarm,
                'photo' => $compact_photo_start,
                'shift' => $nextshift,
                'status' => 'not'
            ];


            monitoring::create($dataForMonitoring);
            return redirect()->route('reefer_plugging');
        } else {
            return redirect()->route('reefer_plugging')->with('error', 'Pesan Kesalahan di Sini');
        }
    }

    public function end_plugging(Request $request)
    {

        $validatedData = $request->validate([
            'sup_temp_end' => 'required|integer|regex:/^[0-9]+$/', // Menambahkan validasi integer
            'ret_temp_end' => 'required|integer|regex:/^[0-9]+$/', // Menambahkan validasi integer
            'cel_two_end' => 'required|string',
            'cel_tree_end' => 'required|string',
            'remark_end' => 'string|nullable',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($validatedData) {
            $id = $request->input('id');
            $no_container = $request->input('no_container');
            $sup_temp_end = $request->input('sup_temp_end');
            $cel_two_end = $request->input('cel_two_end');
            $ret_temp_end = $request->input('ret_temp_end');
            $cel_tree_end = $request->input('cel_tree_end');
            $remark_end = $request->input('remark_end');
            $time = now();
            $time_end = $time->format('Y-m-d H:i:s');
            $supply_temp_end = $cel_two_end . $sup_temp_end;
            $return_temp_end = $cel_tree_end . $ret_temp_end;
            $photoNames_end = [];
            $photos_end = $request->file('photo_end');
            foreach ($photos_end as $photoend) {
                $hashName_end = $photoend->hashName();
                $photoend->store('photo-end-plug');
                $photoNames_end[] = $hashName_end;
            }
            $compact_photo_end = implode(',', $photoNames_end);

            $data = [
                'sup_end_temp' => $supply_temp_end,
                'ret_end_temp' => $return_temp_end,
                'end_remark' => $remark_end,
                'time_end' => $time_end,
                'status' => 'End-plugging',
                'photo' => $compact_photo_end
            ];
            plugging::where('no_container', $no_container)->where('plug_id', $id)->update($data);

            return redirect()->route('reefer_plugging');
        } else {
            return redirect()->route('reefer_plugging');
        }
    }

    public function monitoring_plug(Request $request)
    {

        $validatedData = $request->validate([
            'sup_temp' => 'required|integer|regex:/^[0-9]+$/',
            'ret_temp' => 'required|integer|regex:/^[0-9]+$/',
            'cel_two' => 'required|string',
            'cel_tree' => 'required|string',
            'remark' => 'string|nullable',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($validatedData) {
            $currentTime = Carbon::now();
            $currentShift = $this->getShift($currentTime);
            $last_monitor = $request->input('last_monitor');
            $no_container = $request->input('no_container');
            $set_temp = $request->input('set_temp');
            $sup_temp = $request->input('sup_temp');
            $cel_two = $request->input('cel_two');
            $ret_temp = $request->input('ret_temp');
            $cel_tree = $request->input('cel_tree');
            $remark = $request->input('remark');
            $alarm = $request->input('alarm');
            $time_monitor = now()->format('Y-m-d H:i:s');
            $supply_temp = $cel_two . $sup_temp;
            $return_temp = $cel_tree . $ret_temp;
            $photo_monitor_array = [];
            $photo_monitor = $request->file('photo');
            foreach ($photo_monitor as $monitor_photo) {
                $hash_monitor_photo = $monitor_photo->hashName();
                $monitor_photo->store('photo-monitor-plug');
                $photo_monitor_array[] = $hash_monitor_photo;
            }
            $compact_photo_monitor = implode(',', $photo_monitor_array);

            $data = [
                'no_container' => $no_container,
                'set_temp' => $set_temp,
                'sup_temp' => $supply_temp,
                'ret_temp' => $return_temp,
                'remark' => $remark,
                'time_monitoring' => $time_monitor,
                'photo' => $compact_photo_monitor,
                'alarm' => $alarm,
                'shift' => $currentShift
            ];

            $data_plug = [
                'monitor' => 'done',
            ];

            monitoring::where('no_container', $no_container)->where('time_monitoring', $last_monitor)->update($data_plug);
            monitoring::create($data);
            return redirect()->route('monitoring');
        } else {
            return redirect()->route('monitoring');
        }
    }

    public function monitoring_not(Request $request)
    {

        $validatedData = $request->validate([
            'sup_temp' => 'required|integer|regex:/^[0-9]+$/',
            'ret_temp' => 'required|integer|regex:/^[0-9]+$/',
            'cel_two' => 'required|string',
            'cel_tree' => 'required|string',
            'remark' => 'string|nullable',
        ]);

        if ($validatedData) {
            $currentTime = Carbon::now();
            $currentShift = $this->getShift($currentTime);
            $last_monitor = $request->input('last_monitor');
            $no_container = $request->input('no_container');
            $set_temp = $request->input('set_temp');
            $sup_temp = $request->input('sup_temp');
            $cel_two = $request->input('cel_two');
            $ret_temp = $request->input('ret_temp');
            $cel_tree = $request->input('cel_tree');
            $remark = $request->input('remark');
            $alarm = $request->input('alarm');
            $time_monitor = now()->format('Y-m-d H:i:s');
            $supply_temp = $cel_two . $sup_temp;
            $return_temp = $cel_tree . $ret_temp;
            $photo_monitor_array = [];
            $photo_monitor = $request->file('photo');
            foreach ($photo_monitor as $monitor_photo) {
                $hash_monitor_photo = $monitor_photo->hashName();
                $monitor_photo->store('photo-monitor-plug');
                $photo_monitor_array[] = $hash_monitor_photo;
            }
            $compact_photo_monitor = implode(',', $photo_monitor_array);

            $data = [
                'no_container' => $no_container,
                'set_temp' => $set_temp,
                'sup_temp' => $supply_temp,
                'ret_temp' => $return_temp,
                'remark' => $remark,
                'time_monitoring' => $time_monitor,
                'photo' => $compact_photo_monitor,
                'alarm' => $alarm,
                'shift' => $currentShift
            ];

            $data_plug = [
                'monitor' => 'done',
            ];

            monitoring::where('no_container', $no_container)->where('time_monitoring', $last_monitor)->update($data_plug);
            monitoring::create($data);
            return redirect()->route('monitoring');
        } else {
            return redirect()->route('monitoring');
        }
    }


    private function getShift($time)
    {
        if ($time->between(Carbon::parse('07:00'), Carbon::parse('15:00'))) {
            return 'shift 2';
        } elseif ($time->between(Carbon::parse('15:00'), Carbon::parse('23:00'))) {
            return 'shift 3';
        } else {
            return 'shift 1';
        }
    }

    private function startshift($time)
    {
        if ($time->between(Carbon::parse('07:00'), Carbon::parse('15:00'))) {
            return 'shift 1';
        } elseif ($time->between(Carbon::parse('15:00'), Carbon::parse('23:00'))) {
            return 'shift 2';
        } else {
            return 'shift 3';
        }
    }

    public function history()
    {
        $data_endplug = plugging::where('status', 'End-plugging')->orderBy('time', 'desc')->get();

        $menu = m_module::with('sub_m_module')->get();
        return view('endplug_history', ['showdata' => $menu, 'data' => $data_endplug]);
    }

    public function view_history($plug_id)
    {
        $menu = m_module::with('sub_m_module')->get();
        $data_plug = plugging::where('plug_id', $plug_id)->first();
        $data_monitor = plugging::leftJoin('monitorings', 'pluggings.plug_id', '=', 'monitorings.monitor_id')->where('monitorings.monitor_id', $plug_id)
            ->select('monitorings.no_container', 'monitorings.set_temp', 'monitorings.sup_temp', 'monitorings.ret_temp', 'monitorings.remark', 'monitorings.time_monitoring', 'monitorings.monitor')->get();


        return view('view_plug_history', ['data_plug' => $data_plug, 'showdata' => $menu, 'data_monitor' => $data_monitor]);
    }
}
