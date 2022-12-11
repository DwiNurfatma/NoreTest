<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Karyawan;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $karyawan = Karyawan::get();
        $user = user::get();
        return view('karyawan', ['karyawan' => $karyawan, 'user' => $user])->with('no');
    }

    public function detail($id)
    {
        $karyawan = karyawan::where('user_id', $id)->first();
        return view('detail', ['karyawan' => $karyawan]);
    }

    public function user_store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => "user"
            // 'pasword' => bcrypt('12345678'),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $user
        ]);
    }

    public function edit($id)
    {
        $user = user::find($id);
        return response()->json([
            'status' => 200,
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        DB::table('users')->where('id', $request->id)->update([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect('/data');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_id');
        $user = user::find($id);
        $karyawan = Karyawan::where('user_id', $id)->first();
        $user->delete();
        $karyawan->delete();
        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'karyawan.xlsx');
    }

    public function export_pdf()
    {
        $karyawan = karyawan::all();
        $user = user::get();
        $no = 0;
        $pdf = PDF::loadview('export_pdf', ['karyawan' => $karyawan, 'user' => $user, 'no' => $no]);
        return $pdf->download('karyawan.pdf');
    }
}
