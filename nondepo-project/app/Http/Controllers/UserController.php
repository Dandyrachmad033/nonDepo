<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_module;
use App\Models\Users;

class UserController extends Controller
{
    public function index()
    {
        $db = m_module::all();
        $user = Users::select('username', 'email', 'phone', 'role', 'status_user', 'id')->get();
        return view('user_management', ['showdata' => $db, 'users' => $user]);
    }

    public function edituser($id_user)
    {
        $db = m_module::all();
        $data_user = Users::where('id', $id_user)->first();
        if ($data_user) {
            return view('edit_user_management', ['showdata' => $db, 'data' => $data_user]);
        }
    }

    public function change_password(Request $request)
    {

        $validatedData = $request->validate([
            'username' => 'required',
            'role' => 'required',
            'email' => 'required', // Memastikan bahwa email harus ada dan berformat email yang benar.
            'phone' => 'required|between:12,13', // Memastikan bahwa nomor telepon harus ada, berupa angka, dan memiliki panjang antara 12 hingga 13 karakter.
        ]);

        if ($validatedData) {
            $id_user = $request->input('id');
            $username = $request->input('username');
            $role = $request->input('role');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $data = [
                'username' => $username,
                'email' => $email,
                'role' => $role,
                'phone' => $phone,
            ];

            if ($request->filled('password')) {
                $validate = $request->validate([
                    'password' => 'required|min:6',
                    'confirm_password' => 'required|min:6|same:password'
                ], [
                    'password.required' => 'Kata sandi harus diisi.',
                    'password.min' => 'Kata sandi harus memiliki minimal :min karakter.',
                    'confirm_password.required' => 'Konfirmasi kata sandi harus diisi.',
                    'confirm_password.min' => 'Konfirmasi kata sandi harus memiliki minimal :min karakter.',
                    'confirm_password.same' => 'Konfirmasi kata sandi harus sama dengan kata sandi.'
                ]);

                if ($validate) {
                    $validate['password'] = bcrypt($validate['password']);
                    Users::where('username', $validatedData['username'])->update([
                        'username' => $validatedData['username'],
                        'email' => $validatedData['email'],
                        'role' => $validatedData['role'],
                        'phone' => $validatedData['phone'],
                        'password' => $validate['password'],
                    ]);
                }
            }
            Users::where('id', $id_user)->update($data);
            return redirect()->route('user_management');
        } else {
            return redirect()->route('user_management');
        }
    }

    public function disable_user(Request $request)
    {
        $disable_username = $request->input('user');

        $find_user_disable = Users::where(
            'username',
            $disable_username
        )->first();

        if ($find_user_disable) {
            $find_user_disable->update(['status_user' => '0']);
            return response()->json(['message' => 'Pengguna berhasil dinonaktifkan']);
            return redirect()->route('user_management');
        }
    }

    public function enable_user(Request $request)
    {
        $enable_username = $request->input('user');

        $find_user_enable = Users::where(
            'username',
            $enable_username
        )->first();

        if ($find_user_enable) {
            $find_user_enable->update(['status_user' => '1']);
            return response()->json(['message' => 'Pengguna berhasil diaktifkan']);
            return redirect()->route('user_management');
        }
    }
}
