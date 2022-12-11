<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Karyawan;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user');
    }
    public function data()
    {

        if (Auth::user()) {
            $user = User::where('id', Auth::user()->id)->first();
        }
        return view('data_user', ['user' => $user])->with('no');
    }
    public function user_store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'jabatan' => 'required',
            'jk' => 'required',
            'no_hp' => 'required',
        ]);
        karyawan::create([
            'jabatan' => $request->jabatan,
            'jk' => $request->jk,
            'no_hp' => $request->no_hp,
            'user_id' => $request->user_id,
        ]);

        return redirect('/data_user');
    }
    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $karyawan = Karyawan::where('user_id', $id)->first();
        $karyawan->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }
}
