<?php

namespace App\Exports;

use App\Absen;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\User;
use Auth;
use Illuminate\Http\Request;

class AbsenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $kode = Auth::user()->kode_mhs;
        return Absen::join('users','users.kode_mhs','absensi.kode_mhs')
        ->select('absensi.id','users.name','absensi.jenis_pengajian','absensi.status','absensi.keterangan','absensi.kode_mhs','absensi.tanggal','users.akses')
        ->where('absensi.kode_mhs',$kode)
        ->orderBy('absensi.id','desc');
    }
}
