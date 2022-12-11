<?php

namespace App\Exports;

use App\Karyawan;
use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
    public function view(): View
    {
        return view('export_excel', [
            'karyawan' => Karyawan::all(),
            'user' => User::all()
        ])->with('no');
    }
}
