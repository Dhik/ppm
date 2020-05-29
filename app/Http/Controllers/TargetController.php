<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use App\User;
use Auth;

class TargetController extends Controller
{
    public function add(){
        return view('admin.pages.target.add');
    }
    public function target_user(){
        $kode = Auth::user()->kode_mhs;
        $data = Absen::join('users','users.kode_mhs','absensi.kode_mhs')
        ->where('absensi.kode_mhs',$kode)
        ->orderBy('absensi.id','desc')
        ->paginate(10);
        return view('admin.pages.target.daftar',['data'=>$data]);
    }
    public function tambah_daftar($id){
        $kode = $id;
        return view('admin.pages.target.add',['kode'=>$kode]);
    }
}
