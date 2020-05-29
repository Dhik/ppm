<?php

namespace App\Exports;

use App\Sembako;
use App\Absen;
use App\User;
use Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TerobosanExport implements FromView
{
    public function view(): View
    {
        $kode = Auth::user()->kode_mhs;
        return view('terobosan', [
            'datas' =>Absen::join('users','users.kode_mhs','absensi.kode_mhs')
            ->where('users.kode_mhs','like','%'.$kode.'_%')
            ->where('akses','=','operator')
            ->whereNotNull('absensi.tanggal')
            ->get()
        ]);
    }
}
