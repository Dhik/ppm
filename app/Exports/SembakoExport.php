<?php

namespace App\Exports;

use App\Sembako;
use App\Absen;
use App\User;
use Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SembakoExport implements FromView
{
    public function view(): View
    {
        $kode = Auth::user()->kode_mhs;
        return view('self', [
            'datas' =>Absen::join('users','users.kode_mhs','absensi.kode_mhs')
            ->where('absensi.kode_mhs',$kode)
            ->orderBy('absensi.id','desc')
            ->whereNotNull('absensi.tanggal')
            ->get()
        ]);
    }
}
