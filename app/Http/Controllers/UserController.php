<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function tampil_user()
    {
        return view('user.index', [
            'user'  => User::orderBy('id', 'desc')->get(),
            'title' => 'Kelola Admin TK Sirojul Huda'
        ]);
    }
    
    public function tambah_user()
    {
        return view('user.create', [
            'title' => 'Kelola Admin TK Sirojul Huda'
        ]);
    }

    public function simpan_user(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('admin/user');
    }

    public function edit_user($id)
    {
        return view('user.edit',
        [
            'title' => 'Kelola Admin TK Sirojul Huda',
            'user' => User::select('*')->where('id', $id)->get()
        ]);
    }

    public function update_user(Request $request, User $user)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:5'
        ]);
            $user = [
                'password' => bcrypt($request->password),
            ];
            User::where('id', $request->id)->update($user);

        return redirect('admin/user');
    }

    public function hapus_user(User $user)
    {
        User::destroy($user->id);
        return redirect('/admin/user')->with('message', '<div class="alert alert-success alert-dismissible fade show bg-success text-white" role="alert">Data User <strong>berhasil dihapus</strong>.<button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button></div>');
    }
}
