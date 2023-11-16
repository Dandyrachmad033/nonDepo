<?php

namespace App\Http\Controllers;

use App\Models\cfs;
use App\Models\stufstrip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\users;
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\m_module;
use Termwind\Components\Dd;

class staffingstrippingController extends Controller
{
    public function index()
    {
        $db_cfs = cfs::orderBy('id_job_order', 'desc')->get();

        $menu = m_module::with('sub_m_module')->get();
        return view('staf-strip', ['showdata' => $menu, 'cfs' => $db_cfs]);
    }

    public function detail($id)
    {
        $data_id = cfs::where('id_job_order', $id)->first();
        $data_column = cfs::leftJoin('stuffingstripping', 'cfs.id_job_order', '=', 'stuffingstripping.Cfs_id_job_order')->where('stuffingstripping.Cfs_id_job_order', $id)
            ->select('stuffingstripping.strip_container_no', 'stuffingstripping.strip_seal_no', 'stuffingstripping.stuf_container_no', 'stuffingstripping.stuf_seal_no')->get();
        $menu = m_module::with('sub_m_module')->get();

        return view('detail_resume', ['showdata' => $menu, 'data_cfs' => $data_id, 'data_column' => $data_column]);
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

    public function resume_cfs($id)
    {
        $menu = m_module::with('sub_m_module')->get();
        $resume_id = cfs::where('id_job_order', $id)->first();

        if ($resume_id) {
            $tanggal_activity = is_string($resume_id->activity_date) ? new \DateTime($resume_id->activity_date) : $resume_id->activity_date;
            $tanggal_clossing = is_string($resume_id->clossing_date) ? new \DateTime($resume_id->clossing_date) : $resume_id->clossing_date;
            $format_activity = $tanggal_activity->format('Y-m-d');
            $format_clossing = $tanggal_clossing->format('Y-m-d');
        } else {
            // Setel $tanggal ke null atau nilai default lainnya jika tidak ada rekaman yang sesuai
            $tanggal = null;
        }

        $data_column = cfs::leftJoin('stuffingstripping', 'cfs.id_job_order', '=', 'stuffingstripping.Cfs_id_job_order')->where('stuffingstripping.Cfs_id_job_order', $id)
            ->select('stuffingstripping.strip_container_no', 'stuffingstripping.strip_seal_no', 'stuffingstripping.stuf_container_no', 'stuffingstripping.stuf_seal_no', 'stuffingstripping.group_id')->get();
        return view('resume_worksheet', ['data_cfs' => $resume_id, 'stufstrip' => $data_column, 'showdata' => $menu, 'tgl_activity' => $format_activity, 'tgl_clossing' => $format_clossing]);
    }

    public function cfs_form(Request $request)
    {
        // CFS form
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $shipper = $request->input('shipper');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $closing_date = $request->input('closing_date');
        $remark = $request->input('remark');

        $cfs_data = [
            'activity_date' => $activity_date,
            'principal' => $principal,
            'no_order' => $no_order,
            'forwarder' => $forwarder,
            'shipper' => $shipper,
            'cargo' => $cargo,
            'party' => $party,
            'clossing_date' => $closing_date,
            'remark' => $remark,
            'form_type' => 'CFS Worksheet'
        ];

        cfs::create($cfs_data);
        $last_id = cfs::latest()->first()->id_job_order;

        $optionalColumns = [
            'strip_container_no',
            'strip_seal_no',
            'stuf_container_no',
            'stuf_seal_no',
            'is_complete',
        ];


        $total_index = count($request->input('strip_container_no'));
        $index = 0;
        for ($index; $index < $total_index; $index++) {
            $optionalData = [];
            $fix_temp = '1';
            foreach ($optionalColumns as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index]) ? $values[$index] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            stufstrip::create(array_merge($optionalData, ['Cfs_id_job_order' => $last_id]));
            $group_id = stufstrip::where('strip_container_no', $optionalData['strip_container_no'])->value('idstuffingStripping');
            stufstrip::where('idstuffingStripping', $group_id)->update(['group_id' => $group_id]);
        }



        return redirect()->route('stuffing-stripping');
    }

    public function resume_worksheet(Request $request)
    {

        $id = $request->input('id');
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $shipper = $request->input('shipper');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $closing_date = $request->input('closing_date');
        $remark = $request->input('remark');
        $cfs_data = [
            'activity_date' => $activity_date,
            'principal' => $principal,
            'no_order' => $no_order,
            'forwarder' => $forwarder,
            'shipper' => $shipper,
            'cargo' => $cargo,
            'party' => $party,
            'clossing_date' => $closing_date,
            'remark' => $remark
        ];


        $optionalColumns = [
            'strip_container_no',
            'strip_seal_no',
            'stuf_container_no',
            'stuf_seal_no',
            'is_complete',
        ];
        $group_id = $request->input('group_id');

        cfs::where('id_job_order', $id)->update($cfs_data);
        $total_index = count($request->input('strip_container_no'));
        $index = 0;
        for ($index; $index < $total_index; $index++) {
            $optionalData = [];
            $fix_temp = '1';
            $id_group = $group_id[$index];
            foreach ($optionalColumns as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index]) ? $values[$index] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            if ($id_group == 0) {

                stufstrip::create($optionalData);
                $last_id = stufstrip::latest()->first()->idstuffingStripping;
                stufstrip::where('idstuffingStripping', $last_id)->update(['group_id' => $last_id, 'Cfs_id_job_order' => $id]);
            }
            stufstrip::where('idstuffingStripping', $id_group)->update($optionalData);

            // stufstrip::create(array_merge($optionalData, ['Cfs_id_job_order' => $last_id]));
        }
        return redirect()->route('stuffing-stripping');
    }

    public function form_tally(Request $request)
    {
        dd($request);
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $container_strip = $request->input('container_strip');
        $quantity = $request->input('quantity');
        $container_stuf = $request->input('container_stuf');

        $data_tally = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'forwarder' => $forwarder,
            'cargo' => $cargo,
            'party' => $party,
            'strip_container' => $container_strip,
            'stuf_container' => $container_stuf,
            'quantity' => $quantity,
            'form_type' => 'Cfs Tally'
        ];

        cfs::create($data_tally);
        $last_id = cfs::latest()->first()->id_job_order;

        $columnTally = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];
        $total_tally = count($request->input('desc'));
        $index_tally = 0;
        for ($index_tally; $index_tally < $total_tally; $index_tally++) {
            $Data_tally = [];
            $fix_temp = '1';
            foreach ($columnTally as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_tally]) ? $values[$index_tally] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $Data_tally[$column] = $valueToStore;
                } else {
                    $Data_tally[$column] = $fix_temp;
                }
            }
            stufstrip::create(array_merge($Data_tally, ['Cfs_id_job_order' => $last_id]));
            $group_id = stufstrip::where('strip_container_no', $Data_tally['strip_container_no'])->value('idstuffingStripping');
            stufstrip::where('idstuffingStripping', $group_id)->update(['group_id' => $group_id]);
        }
    }
}
