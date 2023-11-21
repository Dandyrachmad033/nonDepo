<?php

namespace App\Http\Controllers;

use App\Models\m_module;
use App\Models\m_sub_module;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AccessController extends Controller
{
    public function index()
    {
        $db = m_module::all();
        return view('access_management', ['showdata' => $db]);
    }

    public function editaccess()
    {
        $db = m_module::all();

        return view('edit_access_management', ['showdata' => $db]);
    }

    public function disable_access(Request $request)
    {
        $moduleName = $request->input('moduleName');

        $search_name_module = m_module::where('module_name', $moduleName)->first();
        if ($search_name_module) {
            $search_name_module->update(['module_status' => '0']);
            return response()->json(['message' => 'Module berhasil dinonaktifkan']);
            return redirect()->route('access_managament');
        } else {
            m_sub_module::where('module_name', $moduleName)->update(['module_status' => '0']);
            return response()->json(['message' => 'Module berhasil dinonaktifkan']);
            return redirect()->route('access_managament');
        }
    }

    public function enable_access(Request $request)
    {
        $moduleName = $request->input('moduleName');

        $search_name_module = m_module::where('module_name', $moduleName)->first();
        if ($search_name_module) {
            $search_name_module->update(['module_status' => '1']);
            return response()->json(['message' => 'Module berhasil diaktifkan']);
            return redirect()->route('access_managament');
        } else {
            m_sub_module::where('module_name', $moduleName)->update(['module_status' => '1']);
            return response()->json(['message' => 'Module berhasil diaktifkan']);
            return redirect()->route('access_managament');
        }
    }
}
