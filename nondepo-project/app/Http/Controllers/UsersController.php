<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Users;


class UsersController extends Controller
{
    public function index()
    {
        $get_user_login = Users::select('username', 'status', 'action', 'role')->get();

        return view('login', ['user_login' => $get_user_login]);
    }

    public function authenticatelogin(Request $request): RedirectResponse
    {

        $credentials = $request->validate([
            'username' =>  'required|min:6',
            'password' =>  'required|min:8',

        ], [
            'username.required' => 'Username Tidak Boleh Kosong.',
            'username.min' => 'Username Minimal :min karakter.',
            'password.required' => 'Password Tidak Boleh Kosong.',
            'password.min' => 'Password Minimal :min karakter.',
        ]);


        $action_data = $request->input('actions');
        if (Auth::attempt($credentials)) {
            $get_username = $credentials['username'];
            $find_user_id = Users::where('username', $get_username)->first();
            $status_user = $find_user_id->status_user;
            $status_option = [
                '1' => 'enable',
                '0' => 'disable'
            ];
            $check_status = $status_option[$status_user];

            if ($check_status != 'disable') {
                if ($request->filled('actions')) {
                    $get_actions = $action_data;
                    session(['username' => $get_username]);
                    if ($find_user_id->status == 'logout') {
                        if ($find_user_id) {
                            $user_id = $find_user_id->id;
                            session(['username_id' => $user_id]);
                            session(['action' => $get_actions]);
                            return redirect()->intended('/bongkar');
                        }
                        return redirect()->intended('/bongkar');
                    } else {
                        return redirect()->intended('/')
                            ->with('error', 'User Sedang Login')
                            ->withInput($request->only('username'));
                    }
                }
                session(['username' => $credentials['username']]);
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/')
                ->with('error', 'Akun Disable Mohon konfirmasi ke IT')
                ->withInput($request->only('username'));
        }

        // return redirect()->intended('/')
        //     ->with('error', 'Username Atau Password salah')
        //     ->withInput($request->only('username', 'password'));
    }

    public function authenticatelogout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function authenticatelogout_bongkar(Request $request): RedirectResponse
    {
        $usename_id = session('username_id');
        users::where('id', $usename_id)->update(['status' => 'logout', 'action' => '']);
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
