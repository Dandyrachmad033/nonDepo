<?php

namespace App\Http\Controllers;

use App\Models\cfs;
use App\Models\stufstrip;
use App\Models\tally_stufstrip;
use App\Models\release_stufstrip;
use App\Models\receiving_stufstrip;
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
        $db_cfs = cfs::where('finish_status', 'Pending')->orderBy('activity_date', 'asc')->paginate(9);

        $menu = m_module::with('sub_m_module')->get();
        return view('staf-strip', ['showdata' => $menu, 'cfs' => $db_cfs]);
    }

    public function index_form()
    {
        $menu = m_module::with('sub_m_module')->get();
        return view('form_cfs', ['showdata' => $menu]);
    }

    public function index_finish()
    {
        $db_cfs = cfs::orderBy('activity_date', 'asc')->where('finish_status', 'Finished')->get();

        $menu = m_module::with('sub_m_module')->get();
        return view('stufstrip_finish', ['showdata' => $menu, 'cfs' => $db_cfs]);
    }

    public function detail($id)
    {
        $data_id = cfs::where('id_job_order', $id)->first();
        $data_column = cfs::leftJoin('stuffingstripping', 'cfs.id_job_order', '=', 'stuffingstripping.Cfs_id_job_order')->where('stuffingstripping.Cfs_id_job_order', $id)
            ->select('stuffingstripping.strip_container_no', 'stuffingstripping.strip_seal_no', 'stuffingstripping.stuf_container_no', 'stuffingstripping.stuf_seal_no')->get();
        $menu = m_module::with('sub_m_module')->get();

        return view('detail_resume', ['showdata' => $menu, 'data_cfs' => $data_id, 'data_column' => $data_column]);
    }

    public function detail_tally($id_tally)
    {

        $menu = m_module::with('sub_m_module')->get();
        $data_tally = cfs::where('id_job_order', $id_tally)->first();
        $data_column_tally =
            cfs::leftJoin('stufstrip_tally', 'cfs.id_job_order', '=', 'stufstrip_tally.id_job_order_tally')->where('stufstrip_tally.id_job_order_tally', $id_tally)
            ->select('stufstrip_tally.desc', 'stufstrip_tally.dimension', 'stufstrip_tally.unit', 'stufstrip_tally.value')->get();
        return view('detail_tally', ['data_cfs' => $data_tally, 'showdata' => $menu, 'data_column_tally' => $data_column_tally]);
    }

    public function detail_release($id_release)
    {
        $menu = m_module::with('sub_m_module')->get();
        $data_release = cfs::where('id_job_order', $id_release)->first();
        $data_column_release =
            cfs::leftJoin('stufstrip_release', 'cfs.id_job_order', '=', 'stufstrip_release.id_job_order_release')->where('stufstrip_release.id_job_order_release', $id_release)
            ->select('stufstrip_release.desc', 'stufstrip_release.dimension', 'stufstrip_release.unit', 'stufstrip_release.value')->get();
        return view('detail_release', ['data_cfs' => $data_release, 'showdata' => $menu, 'data_column_release' => $data_column_release]);
    }

    public function detail_receiving($id_receiving)
    {
        $menu = m_module::with('sub_m_module')->get();
        $data_receiving = cfs::where('id_job_order', $id_receiving)->first();
        $data_column_receiving = cfs::leftJoin('stufstrip_receiving', 'cfs.id_job_order', '=', 'stufstrip_receiving.id_job_order_receiving')->where('stufstrip_receiving.id_job_order_receiving', $id_receiving)
            ->select('stufstrip_receiving.desc', 'stufstrip_receiving.dimension', 'stufstrip_receiving.unit', 'stufstrip_receiving.value')->get();
        return view('detail_receiving', ['data_cfs' => $data_receiving, 'showdata' => $menu, 'data_column_receiving' => $data_column_receiving]);
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

    public function resume_cfs_tally($tally_id)
    {

        $menu = m_module::with('sub_m_module')->get();
        $resume_id = cfs::where('id_job_order', $tally_id)->first();
        if ($resume_id) {
            $tanggal_activity = is_string($resume_id->activity_date) ? new \DateTime($resume_id->activity_date) : $resume_id->activity_date;
            $format_activity = $tanggal_activity->format('Y-m-d');
        } else {
            // Setel $tanggal ke null atau nilai default lainnya jika tidak ada rekaman yang sesuai
            $tanggal = null;
        }

        $data_column_tally = cfs::leftJoin('stufstrip_tally', 'cfs.id_job_order', '=', 'stufstrip_tally.id_job_order_tally')->where('stufstrip_tally.id_job_order_tally', $tally_id)
            ->select('stufstrip_tally.desc', 'stufstrip_tally.dimension', 'stufstrip_tally.unit', 'stufstrip_tally.value', 'stufstrip_tally.group_id')->get();
        return view('resume_tally', ['data_cfs' => $resume_id, 'tally' => $data_column_tally, 'showdata' => $menu, 'tgl_activity' => $format_activity]);
    }

    public function resume_cfs_release($release_id)
    {
        $menu = m_module::with('sub_m_module')->get();
        $resume_id = cfs::where('id_job_order', $release_id)->first();
        if ($resume_id) {
            $tanggal_activity = is_string($resume_id->activity_date) ? new \DateTime($resume_id->activity_date) : $resume_id->activity_date;
            $format_activity = $tanggal_activity->format('Y-m-d');
        } else {
            // Setel $tanggal ke null atau nilai default lainnya jika tidak ada rekaman yang sesuai
            $tanggal = null;
        }

        $data_column_release = cfs::leftJoin('stufstrip_release', 'cfs.id_job_order', '=', 'stufstrip_release.id_job_order_release')->where('stufstrip_release.id_job_order_release', $release_id)
            ->select('stufstrip_release.desc', 'stufstrip_release.dimension', 'stufstrip_release.unit', 'stufstrip_release.value', 'stufstrip_release.group_id')->get();
        return view('resume_release', ['data_cfs' => $resume_id, 'release' => $data_column_release, 'showdata' => $menu, 'tgl_activity' => $format_activity]);
    }

    public function resume_cfs_receiving($receiving_id)
    {
        $menu = m_module::with('sub_m_module')->get();
        $resume_id = cfs::where('id_job_order', $receiving_id)->first();
        if ($resume_id) {
            $tanggal_activity = is_string($resume_id->activity_date) ? new \DateTime($resume_id->activity_date) : $resume_id->activity_date;
            $format_activity = $tanggal_activity->format('Y-m-d');
        } else {
            // Setel $tanggal ke null atau nilai default lainnya jika tidak ada rekaman yang sesuai
            $tanggal = null;
        }

        $data_column_receiving = cfs::leftJoin('stufstrip_receiving', 'cfs.id_job_order', '=', 'stufstrip_receiving.id_job_order_receiving')->where('stufstrip_receiving.id_job_order_receiving', $receiving_id)
            ->select('stufstrip_receiving.desc', 'stufstrip_receiving.dimension', 'stufstrip_receiving.unit', 'stufstrip_receiving.value', 'stufstrip_receiving.group_id')->get();
        return view('resume_receiving', ['data_cfs' => $resume_id, 'receiving' => $data_column_receiving, 'showdata' => $menu, 'tgl_activity' => $format_activity]);
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
        $time = now();
        $timeWorksheet = $time->format('H:i:s');
        $combinedDateTime = $activity_date . ' ' . $timeWorksheet;
        $cfs_data = [
            'activity_date' => $combinedDateTime,
            'principal' => $principal,
            'no_order' => $no_order,
            'forwarder' => $forwarder,
            'shipper' => $shipper,
            'cargo' => $cargo,
            'party' => $party,
            'clossing_date' => $closing_date,
            'remark' => $remark,
            'form_type' => 'CFS Worksheet',
            'finish_status' => 'Pending'
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
            'remark' => $remark,
            'finish_status' => 'Pending'
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

        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $container_strip = $request->input('container_strip');
        $quantity = intval($request->input('quantity'));
        $container_stuf = $request->input('container_stuf');
        $time = now();
        $timeTally = $time->format('H:i:s');
        $combinedDateTime_tally = $activity_date . ' ' . $timeTally;

        $data_tally = [
            'activity_date' => $combinedDateTime_tally,
            'no_order' => $no_order,
            'principal' => $principal,
            'forwarder' => $forwarder,
            'cargo' => $cargo,
            'party' => $party,
            'strip_container' => $container_strip,
            'stuf_container' => $container_stuf,
            'quantity' => $quantity,
            'form_type' => 'CFS Tally',
            'finish_status' => 'Pending'
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
            tally_stufstrip::create(array_merge($Data_tally, ['id_job_order_tally' => $last_id]));
            $group_id = tally_stufstrip::where('desc', $Data_tally['desc'])->value('idstufstrip_tally');
            tally_stufstrip::where('idstufstrip_tally', $group_id)->update(['group_id' => $group_id]);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function resume_tally(Request $request)
    {

        $id_tally = $request->input('id');
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $container_strip = $request->input('container_strip');
        $quantity = intval($request->input('quantity'));
        $container_stuf = $request->input('container_stuf');

        $cfs_tally = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'forwarder' => $forwarder,
            'cargo' => $cargo,
            'party' => $party,
            'strip_container' => $container_strip,
            'stuf_container' => $container_stuf,
            'quantity' => $quantity,
            'finish_status' => 'Pending'

        ];

        cfs::where('id_job_order', $id_tally)->update($cfs_tally);
        $total_index_tally = count($request->input('desc'));

        $columnTally = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];
        $group_id_tally = $request->input('group_id');

        $index_tally = 0;
        for ($index_tally; $index_tally < $total_index_tally; $index_tally++) {
            $optionalData = [];
            $fix_temp = '1';
            $id_group = $group_id_tally[$index_tally];
            foreach ($columnTally as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_tally]) ? $values[$index_tally] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            if ($id_group == 0) {
                tally_stufstrip::create($optionalData);
                $last_id = tally_stufstrip::latest()->first()->idstufstrip_tally;
                tally_stufstrip::where('idstufstrip_tally', $last_id)->update(['group_id' => $last_id, 'id_job_order_tally' => $id_tally]);
            }
            tally_stufstrip::where('idstufstrip_tally', $id_group)->update($optionalData);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function form_release(Request $request)
    {

        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $con_size = $request->input('con_size');
        $veh_type = $request->input('veh_type');
        $veh_id = $request->input('veh_id');
        $grounded = $request->input('grounded');
        $remark = $request->input('remark');
        $time = now();
        $timeRelease = $time->format('H:i:s');
        $combinedDateTime_release = $activity_date . ' ' . $timeRelease;
        $con_act = '';
        if ($grounded == null) {
            $con_act = 'ON CHASIS';
        } else {
            $con_act = 'GROUNDED';
        }

        $data_release = [
            'activity_date' => $combinedDateTime_release,
            'no_order' => $no_order,
            'principal' => $principal,
            'con_size' => $con_size,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_act' => $con_act,
            'remark' => $remark,
            'form_type' => 'Cargo Release',
            'finish_status' => 'Pending'
        ];

        cfs::create($data_release);
        $last_id = cfs::latest()->first()->id_job_order;
        $columnRelease = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];

        $total_release = count($request->input('desc'));
        $index_release = 0;
        for ($index_release; $index_release < $total_release; $index_release++) {
            $Data_release = [];
            $fix_temp = '1';
            foreach ($columnRelease as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_release]) ? $values[$index_release] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $Data_release[$column] = $valueToStore;
                } else {
                    $Data_release[$column] = $fix_temp;
                }
            }

            release_stufstrip::create(array_merge($Data_release, ['id_job_order_release' => $last_id]));
            $group_id = release_stufstrip::where('desc', $Data_release['desc'])->value('idstufstrip_release');
            release_stufstrip::where('idstufstrip_release', $group_id)->update(['group_id' => $group_id]);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function resume_release(Request $request)
    {
        $id_release = $request->input('id');
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $veh_type  = $request->input('veh_type');
        $veh_id = intval($request->input('veh_id'));
        $con_size = $request->input('con_size');
        $con_act = $request->input('con_act');
        $remark = $request->input('remark');



        $cfs_release = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_size' => $con_size,
            'con_act' => $con_act,
            'remark' => $remark,
            'finish_status' => 'Pending'

        ];

        cfs::where('id_job_order', $id_release)->update($cfs_release);
        $total_index_release = count($request->input('desc'));

        $columnrelease = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];
        $group_id_release = $request->input('group_id');

        $index_release = 0;
        for ($index_release; $index_release < $total_index_release; $index_release++) {
            $optionalData = [];
            $fix_temp = '1';
            $id_group = $group_id_release[$index_release];
            foreach ($columnrelease as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_release]) ? $values[$index_release] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            if ($id_group == 0) {
                release_stufstrip::create($optionalData);
                $last_id = release_stufstrip::latest()->first()->idstufstrip_release;
                release_stufstrip::where('idstufstrip_release', $last_id)->update(['group_id' => $last_id, 'id_job_order_release' => $id_release]);
            }
            release_stufstrip::where('idstufstrip_release', $id_group)->update($optionalData);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function form_receiving(Request $request)
    {

        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $con_size = $request->input('con_size');
        $veh_type = $request->input('veh_type');
        $veh_id = $request->input('veh_id');
        $grounded = $request->input('grounded');
        $warehouse = $request->input('warehouse');
        $yard = $request->input('yard');
        $remark = $request->input('remark');
        $time = now();
        $timeReceiving = $time->format('H:i:s');
        $combinedDateTime_receiving = $activity_date . ' ' . $timeReceiving;
        $strip_type = '';
        $con_act = '';

        if ($warehouse == null and $yard == null) {
            $strip_type = 'TO CONTAINER';
        } elseif ($warehouse != null) {
            $strip_type = 'TO WAREHOUSE';
        } else {
            $strip_type = 'TO YARD';
        }

        if ($grounded == null) {
            $con_act = 'ON CHASIS';
        } else {
            $con_act = 'GROUNDED';
        }


        $data_receiving = [
            'activity_date' => $combinedDateTime_receiving,
            'no_order' => $no_order,
            'principal' => $principal,
            'con_size' => $con_size,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_act' => $con_act,
            'remark' => $remark,
            'strip_type' => $strip_type,
            'form_type' => 'Cargo Receiving',
            'finish_status' => 'Pending'
        ];
        cfs::create($data_receiving);
        $last_id = cfs::latest()->first()->id_job_order;
        $columnReceiving = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];

        $total_receiving = count($request->input('desc'));
        $index_receiving = 0;
        for ($index_receiving; $index_receiving < $total_receiving; $index_receiving++) {
            $Data_receiving = [];
            $fix_temp = '1';
            foreach ($columnReceiving as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_receiving]) ? $values[$index_receiving] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $Data_receiving[$column] = $valueToStore;
                } else {
                    $Data_receiving[$column] = $fix_temp;
                }
            }

            receiving_stufstrip::create(array_merge($Data_receiving, ['id_job_order_receiving' => $last_id]));
            $group_id = receiving_stufstrip::where('desc', $Data_receiving['desc'])->value('idstufstrip_receiving');
            receiving_stufstrip::where('idstufstrip_receiving', $group_id)->update(['group_id' => $group_id]);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function resume_receiving(Request $request)
    {
        $id_receiving = $request->input('id');
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $veh_type  = $request->input('veh_type');
        $veh_id = intval($request->input('veh_id'));
        $con_size = $request->input('con_size');
        $con_act = $request->input('con_act');
        $remark = $request->input('remark');



        $cfs_receiving = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_size' => $con_size,
            'con_act' => $con_act,
            'remark' => $remark,
            'finish_status' => 'Pending'


        ];

        cfs::where('id_job_order', $id_receiving)->update($cfs_receiving);
        $total_index_receiving = count($request->input('desc'));

        $columnreceiving = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];
        $group_id_receiving = $request->input('group_id');

        $index_receiving = 0;
        for ($index_receiving; $index_receiving < $total_index_receiving; $index_receiving++) {
            $optionalData = [];
            $fix_temp = '1';
            $id_group = $group_id_receiving[$index_receiving];
            foreach ($columnreceiving as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_receiving]) ? $values[$index_receiving] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            if ($id_group == 0) {
                receiving_stufstrip::create($optionalData);
                $last_id = receiving_stufstrip::latest()->first()->idstufstrip_receiving;
                receiving_stufstrip::where('idstufstrip_receiving', $last_id)->update(['group_id' => $last_id, 'id_job_order_receiving' => $id_receiving]);
            }
            receiving_stufstrip::where('idstufstrip_receiving', $id_group)->update($optionalData);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function finish_form_worksheet(Request $request)
    {
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
            'form_type' => 'CFS Worksheet',
            'finish_status' => 'Finished'
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

    public function finish_form_tally(Request $request)
    {
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $container_strip = $request->input('container_strip');
        $quantity = intval($request->input('quantity'));
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
            'form_type' => 'CFS Tally',
            'finish_status' => 'Finished'
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
            tally_stufstrip::create(array_merge($Data_tally, ['id_job_order_tally' => $last_id]));
            $group_id = tally_stufstrip::where('desc', $Data_tally['desc'])->value('idstufstrip_tally');
            tally_stufstrip::where('idstufstrip_tally', $group_id)->update(['group_id' => $group_id]);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function finish_form_release(Request $request)
    {
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $con_size = $request->input('con_size');
        $veh_type = $request->input('veh_type');
        $veh_id = $request->input('veh_id');
        $grounded = $request->input('grounded');
        $remark = $request->input('remark');
        $con_act = '';
        if ($grounded == null) {
            $con_act = 'ON CHASIS';
        } else {
            $con_act = 'GROUNDED';
        }

        $data_release = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'con_size' => $con_size,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_act' => $con_act,
            'remark' => $remark,
            'form_type' => 'Cargo Release',
            'finish_status' => 'Finished'
        ];

        cfs::create($data_release);
        $last_id = cfs::latest()->first()->id_job_order;
        $columnRelease = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];

        $total_release = count($request->input('desc'));
        $index_release = 0;
        for ($index_release; $index_release < $total_release; $index_release++) {
            $Data_release = [];
            $fix_temp = '1';
            foreach ($columnRelease as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_release]) ? $values[$index_release] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $Data_release[$column] = $valueToStore;
                } else {
                    $Data_release[$column] = $fix_temp;
                }
            }

            release_stufstrip::create(array_merge($Data_release, ['id_job_order_release' => $last_id]));
            $group_id = release_stufstrip::where('desc', $Data_release['desc'])->value('idstufstrip_release');
            release_stufstrip::where('idstufstrip_release', $group_id)->update(['group_id' => $group_id]);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function finish_form_receiving(Request $request)
    {
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $con_size = $request->input('con_size');
        $veh_type = $request->input('veh_type');
        $veh_id = $request->input('veh_id');
        $grounded = $request->input('grounded');
        $warehouse = $request->input('warehouse');
        $yard = $request->input('yard');
        $remark = $request->input('remark');
        $strip_type = '';
        $con_act = '';

        if ($warehouse == null and $yard == null) {
            $strip_type = 'TO CONTAINER';
        } elseif ($warehouse != null) {
            $strip_type = 'TO WAREHOUSE';
        } else {
            $strip_type = 'TO YARD';
        }

        if ($grounded == null) {
            $con_act = 'ON CHASIS';
        } else {
            $con_act = 'GROUNDED';
        }

        $data_receiving = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'con_size' => $con_size,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_act' => $con_act,
            'remark' => $remark,
            'strip_type' => $strip_type,
            'form_type' => 'Cargo Receiving',
            'finish_status' => 'Finished'
        ];
        cfs::create($data_receiving);
        $last_id = cfs::latest()->first()->id_job_order;
        $columnReceiving = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];

        $total_receiving = count($request->input('desc'));
        $index_receiving = 0;
        for ($index_receiving; $index_receiving < $total_receiving; $index_receiving++) {
            $Data_receiving = [];
            $fix_temp = '1';
            foreach ($columnReceiving as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_receiving]) ? $values[$index_receiving] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $Data_receiving[$column] = $valueToStore;
                } else {
                    $Data_receiving[$column] = $fix_temp;
                }
            }

            receiving_stufstrip::create(array_merge($Data_receiving, ['id_job_order_receiving' => $last_id]));
            $group_id = receiving_stufstrip::where('desc', $Data_receiving['desc'])->value('idstufstrip_receiving');
            receiving_stufstrip::where('idstufstrip_receiving', $group_id)->update(['group_id' => $group_id]);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function finish_resume_worksheet(Request $request)
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
        $time_finish_worksheet = now();
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
            'finish_status' => 'Finished',
            'finish_time' => $time_finish_worksheet
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

    public function finish_resume_tally(Request $request)
    {
        $id_tally = $request->input('id');
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $forwarder  = $request->input('forwarder');
        $cargo = $request->input('cargo');
        $party = $request->input('party');
        $container_strip = $request->input('container_strip');
        $quantity = intval($request->input('quantity'));
        $container_stuf = $request->input('container_stuf');
        $time_finish_tally = now();
        $cfs_tally = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'forwarder' => $forwarder,
            'cargo' => $cargo,
            'party' => $party,
            'strip_container' => $container_strip,
            'stuf_container' => $container_stuf,
            'quantity' => $quantity,
            'finish_status' => 'Finished',
            'finish_time' => $time_finish_tally

        ];

        cfs::where('id_job_order', $id_tally)->update($cfs_tally);
        $total_index_tally = count($request->input('desc'));

        $columnTally = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];
        $group_id_tally = $request->input('group_id');

        $index_tally = 0;
        for ($index_tally; $index_tally < $total_index_tally; $index_tally++) {
            $optionalData = [];
            $fix_temp = '1';
            $id_group = $group_id_tally[$index_tally];
            foreach ($columnTally as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_tally]) ? $values[$index_tally] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            if ($id_group == 0) {
                tally_stufstrip::create($optionalData);
                $last_id = tally_stufstrip::latest()->first()->idstufstrip_tally;
                tally_stufstrip::where('idstufstrip_tally', $last_id)->update(['group_id' => $last_id, 'id_job_order_tally' => $id_tally]);
            }
            tally_stufstrip::where('idstufstrip_tally', $id_group)->update($optionalData);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function finish_resume_release(Request $request)
    {
        $id_release = $request->input('id');
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $veh_type  = $request->input('veh_type');
        $veh_id = intval($request->input('veh_id'));
        $con_size = $request->input('con_size');
        $con_act = $request->input('con_act');
        $remark = $request->input('remark');
        $time_finish_release = now();
        $cfs_release = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_size' => $con_size,
            'con_act' => $con_act,
            'remark' => $remark,
            'finish_status' => 'Finished',
            'finish_time' => $time_finish_release

        ];

        cfs::where('id_job_order', $id_release)->update($cfs_release);
        $total_index_release = count($request->input('desc'));

        $columnrelease = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];
        $group_id_release = $request->input('group_id');

        $index_release = 0;
        for ($index_release; $index_release < $total_index_release; $index_release++) {
            $optionalData = [];
            $fix_temp = '1';
            $id_group = $group_id_release[$index_release];
            foreach ($columnrelease as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_release]) ? $values[$index_release] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            if ($id_group == 0) {
                release_stufstrip::create($optionalData);
                $last_id = release_stufstrip::latest()->first()->idstufstrip_release;
                release_stufstrip::where('idstufstrip_release', $last_id)->update(['group_id' => $last_id, 'id_job_order_release' => $id_release]);
            }
            release_stufstrip::where('idstufstrip_release', $id_group)->update($optionalData);
        }
        return redirect()->route('stuffing-stripping');
    }

    public function finish_resume_receiving(Request $request)
    {
        $id_receiving = $request->input('id');
        $activity_date = $request->input('activity_date');
        $no_order = $request->input('no_order');
        $principal = $request->input('principal');
        $veh_type  = $request->input('veh_type');
        $veh_id = intval($request->input('veh_id'));
        $con_size = $request->input('con_size');
        $con_act = $request->input('con_act');
        $remark = $request->input('remark');
        $time_finish_receiving = now();


        $cfs_receiving = [
            'activity_date' => $activity_date,
            'no_order' => $no_order,
            'principal' => $principal,
            'veh_type' => $veh_type,
            'veh_id' => $veh_id,
            'con_size' => $con_size,
            'con_act' => $con_act,
            'remark' => $remark,
            'finish_status' => 'Finished',
            'finish-time' => $time_finish_receiving
        ];

        cfs::where('id_job_order', $id_receiving)->update($cfs_receiving);
        $total_index_receiving = count($request->input('desc'));

        $columnreceiving = [
            'desc',
            'dimension',
            'unit',
            'value',
            'is_complete'
        ];
        $group_id_receiving = $request->input('group_id');

        $index_receiving = 0;
        for ($index_receiving; $index_receiving < $total_index_receiving; $index_receiving++) {
            $optionalData = [];
            $fix_temp = '1';
            $id_group = $group_id_receiving[$index_receiving];
            foreach ($columnreceiving as $column) {
                if ($request->has($column)) {
                    $values = $request->input($column);
                    $valueToStore = isset($values[$index_receiving]) ? $values[$index_receiving] : null;
                    if ($valueToStore == null) {
                        $fix_temp = '0';
                    }
                    $optionalData[$column] = $valueToStore;
                } else {
                    $optionalData[$column] = $fix_temp;
                }
            }
            if ($id_group == 0) {
                receiving_stufstrip::create($optionalData);
                $last_id = receiving_stufstrip::latest()->first()->idstufstrip_receiving;
                receiving_stufstrip::where('idstufstrip_receiving', $last_id)->update(['group_id' => $last_id, 'id_job_order_receiving' => $id_receiving]);
            }
            receiving_stufstrip::where('idstufstrip_receiving', $id_group)->update($optionalData);
        }
        return redirect()->route('stuffing-stripping');
    }
}
