<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\m_module;
use App\Models\m_sub_module;


class ModulesController extends Controller
{
    public function index()
    {

        $menu = m_module::with('sub_m_module')->get();
        return view(
            'module_management',
            [
                'showdata' => $menu
            ]
        );
    }

    public function view_add_module_data()
    {
        $menu = m_module::with('sub_m_module')->get();

        return view('add_module', ['showdata' => $menu]);
    }

    public function add_module_data(Request $request)
    {


        $moduleName = $request->input('module_name');
        $modulepath = $request->input('module_path');
        $moduledesc = $request->input('module_desc');
        $modulescript = $request->input('module_script');
        $moduleparent = $request->input('module_parent');
        $moduleorder = $request->input('module_order');
        $modulestatus = $request->input('module_status');
        $moduleicon = $request->input('module_icon');

        if ($moduleparent === 'home') {
            $data = [
                'module_name' => $moduleName,
                'module_desc' => $moduledesc,
                'module_path' => $modulepath,
                'module_script' => $modulescript,
                'module_parent' => $moduleparent,
                'module_order' => $moduleorder,
                'module_icon' => $moduleicon, // I assume this is the correct variable
                'module_status' => $modulestatus,
            ];
            m_module::create($data);
        } else {
            $parentModule = m_module::where('module_name', $moduleparent)->first();
            if ($parentModule) {

                $data = [
                    'module_name' => $moduleName,
                    'module_desc' => $moduledesc,
                    'module_path' => $modulepath,
                    'module_script' => $modulescript,
                    'module_parent' => $moduleparent, // ID menu utama sebagai parent
                    'module_order' => $moduleorder,
                    'module_status' => $modulestatus,
                    'parent_id' => $parentModule->module_id
                ];

                m_sub_module::create($data);
            } else {
                // Handle kesalahan jika menu parent tidak ditemukan

            }
        }
        // Create an associative array with your data

        // Create a new Module instance and save it to the database
        return redirect()->route('add_module_view');
    }

    public function edit_module_data($id)
    {
        $db = m_module::all();
        $data_id = m_module::where('module_name', $id)->first();
        if ($data_id) {
            return view('edit_module', ['showid' => $data_id, 'showdata' => $db]);
        } else {
            $data_id = m_sub_module::where('module_name', $id)->first();
            return view('edit_module', ['showid' => $data_id, 'showdata' => $db]);
        }
    }


    public function update_module_data(Request $request, $id)
    {

        $validatedData = $request->validate([
            'module_name' => 'required',
            'module_path' => 'required',
            'module_desc' => 'required',
            'module_script' => 'required',
            'module_parent' => 'required',
            'module_order' => 'required',
            'module_status' => 'required',
        ]);
        $moduleParent = $request->input('module_parent');


        $data_id = m_module::where('module_name', $id)->first();
        if ($data_id) {
            m_module::where('module_name', $id)->update($validatedData);
        } else {
            $parentModule = m_module::where('module_name', $moduleParent)->first();
            $data = [
                'parent_id' => $parentModule->module_id
            ];

            $updateData = array_merge($validatedData, $data);
            m_sub_module::where('module_name', $id)->update($updateData);
        }
        // Perbarui data berdasarkan ID


        return redirect()->route('module_management');
    }
    // Redirect ke halaman lain atau tampilkan pesan sukses

    public function remove_module($id)
    { // Ambil daftar ID modul yang akan dihapus dari permintaan

        // Hapus modul berdasarkan ID yang dipilih
        m_module::where('module_id', $id)->delete();
        m_sub_module::where('module_id', $id)->delete();
        // Redirect atau kembalikan respon yang sesuai
        return redirect()->route('module_management');
    }
}
