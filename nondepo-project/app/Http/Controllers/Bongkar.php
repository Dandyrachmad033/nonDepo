<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\actions;
use App\Models\principal;
use App\Models\users_actions;
use App\Models\Users;


class Bongkar extends Controller
{
    public function bongkar()
    {
        $username_id = session('username_id');
        $seletedlabel = session('action');

        users::where('id', $username_id)->update(['action' => $seletedlabel, 'status' => 'login']);
        return view('bongkar', ['action' => $seletedlabel]);
    }

    public function bongkar_principal(Request $request)
    {
        $principal_valid = $request->validate([
            'principal' => 'required'
        ], [
            'principal.required' => 'Principal Harus diisi'
        ]);

        if ($principal_valid) {

            // $seletedlabel = session('action');
            $pricipal = $request->input('principal');
            // $string_principal = $seletedlabel . $pricipal;
            session(['name_principal' => $pricipal]);
            // $action_code = [''];
            // $options = [
            //     'K28HAPAG' => '1', 'K35HAPAG' => '2', 'K41HAPAG' => '3', 'C45HAPAG' => '4', 'F49HAPAG' => '5',
            //     'K28KMTC' => '13', 'K35KMTC' => '14', 'K41KMTC' => '15', 'C45KMTC' => '16', 'F49KMTC' => '17',
            //     'K28SSL' => '18', 'K35SSL' => '19', 'K41SSL' => '20', 'C45SSL' => '21', 'F49SSL' => '22',
            //     'K28ONE' => '23', 'K35ONE' => '24', 'K41ONE' => '25', 'C45ONE' => '26', 'F49ONE' => '27',
            // ];
            // $action_id = $options[$string_principal];
            // session(['action_id' => $action_id]);
            // $username_id = session('username_id');
            // users_actions::where('users_id', $username_id)->update(['actions_id' => $action_id, 'action_status' => $seletedlabel]);


            return redirect()->route('bongkar_data');
        }
        return redirect()->route('bongkar');
    }

    public function bongkar_data()
    {

        $name_principal = session('name_principal');
        $username = session('username');
        $seletedlabel = session('action');
        $retrieved_data_b20 = actions::where('username', $username)->where('activity_type', 'B20')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        $retrieved_data_b40 = actions::where('username', $username)->where('activity_type', 'B40')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        $retrieved_data_m20 = actions::where('username', $username)->where('activity_type', 'M20')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        $retrieved_data_m40 = actions::where('username', $username)->where('activity_type', 'M40')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        $retrieved_data_s20 = actions::where('username', $username)->where('activity_type', 'S20')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        $retrieved_data_s40 = actions::where('username', $username)->where('activity_type', 'S40')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        $retrieved_data_r20 = actions::where('username', $username)->where('activity_type', 'R20')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        $retrieved_data_r40 = actions::where('username', $username)->where('activity_type', 'R40')->where('principal', $name_principal)->where('name_actions', $seletedlabel)->groupBy('username', 'activity_type')->sum('value');
        return view('bongkar_data', [
            'dataB20' => $retrieved_data_b20,
            'principal' => $name_principal,
            'action' => $seletedlabel,
            'dataB40' => $retrieved_data_b40,
            'dataM20' => $retrieved_data_m20,
            'dataM40' => $retrieved_data_m40,
            'dataS20' => $retrieved_data_s20,
            'dataS40' => $retrieved_data_s40,
            'dataR20' => $retrieved_data_r20,
            'dataR40' => $retrieved_data_r40,
        ]);
    }

    public function bongkar_update(Request $request)
    {
        $action = session('action');
        $principal = session('name_principal');
        $time = now();
        $username = session('username');
        $username_id = session('username_id');
        $B20 = $request->input('B20');
        $B40 = $request->input('B40');
        $M20 = $request->input('M20');
        $M40 = $request->input('M40');
        $S20 = $request->input('S20');
        $S40 = $request->input('S40');
        $R20 = $request->input('R20');
        $R40 = $request->input('R40');
        if ($B20 != 0) {
            $dataB20 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $B20,
                'activity_type' => 'B20',
                'name_id' => $username_id
            ];
            actions::create($dataB20);
        }
        if ($B40 != 0) {
            $dataB40 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $B40,
                'activity_type' => 'B40',
                'name_id' => $username_id
            ];
            actions::create($dataB40);
        }
        if ($M20 != 0) {
            $dataM20 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $M20,
                'activity_type' => 'M20',
                'name_id' => $username_id
            ];
            actions::create($dataM20);
        }
        if ($M40 != 0) {
            $dataM40 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $M40,
                'activity_type' => 'M40',
                'name_id' => $username_id
            ];
            actions::create($dataM40);
        }
        if ($S20 != 0) {
            $dataS20 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $S20,
                'activity_type' => 'S20',
                'name_id' => $username_id
            ];
            actions::create($dataS20);
        }
        if ($S40 != 0) {
            $dataS40 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $S40,
                'activity_type' => 'S40',
                'name_id' => $username_id
            ];
            actions::create($dataS40);
        }
        if ($R20 != 0) {
            $dataR20 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $R20,
                'activity_type' => 'R20',
                'name_id' => $username_id
            ];
            actions::create($dataR20);
        }
        if ($R40 != 0) {
            $dataR40 = [
                'name_actions' => $action,
                'principal' => $principal,
                'activity_date' => $time,
                'username' => $username,
                'value' => $R40,
                'activity_type' => 'R40',
                'name_id' => $username_id
            ];
            actions::create($dataR40);
        }

        return response()->json($dataB20);
    }
}
