<?php

namespace App\Exports;

use App\Sembako;
use App\Absen;
use App\User;
use Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SeppmExport implements FromView
{
    public function view(): View
    {
        return view('se_ppm', [
            'datas' =>Absen::join('users','users.kode_mhs','absensi.kode_mhs')
            ->whereNotNull('absensi.tanggal')
            ->get()
        ]);
    }
}
