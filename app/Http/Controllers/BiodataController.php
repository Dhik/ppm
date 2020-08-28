<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Absen;
use App\Biodata;
use Auth;
use DB;

class BiodataController extends Controller
{
    public function add(){
        return view('admin.pages.biodata.form');
    }
    public function save(Request $req){
        $kode = Auth::user()->kode_mhs;

        $result = new Biodata;
        $result->kode_mhs = $kode;
        $result->nama = $req->nama;
        $result->tempat_lahir = $req->tempat_lahir;
        $result->tanggal_lahir = $req->tanggal_lahir;
        $result->jenis_kelamin = $req->gender;
        $result->asal_daerah = $req->asal_daerah;
        $result->asal_desa = $req->asal_desa;
        $result->asal_kelompok = $req->asal_kelompok;
        $result->universitas = $req->universitas;
        $result->fakultas = $req->fakultas;
        $result->jurusan = $req->jurusan;
        $result->tahun_masuk_kuliah = $req->tahun_masuk;
        $result->status_mubaligh = $req->status;
        $result->nama_ayah = $req->nama_ayah;
        $result->nama_ibu = $req->nama_ibu;
        $result->no_telp_anda = $req->no_telp;
        $result->no_telp_ortu = $req->no_telp_ortu;
        $result->riwayat_penyakit = $req->riwayat_penyakit;
        $result->motivasi = $req->motivasi;
        $result->goldar = $req->goldar;

        $field = [
            'isi_biodata' => "sudah"
        ];
        $hasil = User::where('kode_mhs',$kode)->update($field);
        if($result->save() && $hasil) {
            return redirect()->route('admin.home')->with('result','success'); 
        }else{
            return back()->with('result','fail')->withInput();
        }
    }
    public function daftar(){
        $kode = Auth::user()->kode_mhs;
        $data = Biodata::where('kode_mhs',$kode)->get();
        return view('admin.pages.biodata.daftar',['data'=>$data]);
    }
    public function edit($id){
        $data = Biodata::where('id',$id)->first();
        return view('admin.pages.biodata.edit',['rc'=>$data]);
    }
    public function update(Request $req){
        $kode = Auth::user()->kode_mhs;
        $field = [
            'nama' => $req->nama,
            'tempat_lahir' => $req->tempat_lahir,
            'tanggal_lahir' => $req->tanggal_lahir,
            'jenis_kelamin' => $req->gender,
            'asal_daerah' => $req->asal_daerah,
            'asal_desa' => $req->asal_desa,
            'asal_kelompok' => $req->asal_kelompok,
            'universitas' => $req->universitas,
            'fakultas' => $req->fakultas,
            'jurusan' => $req->jurusan,
            'tahun_masuk_kuliah' => $req->tahun_masuk,
            'status_mubaligh' => $req->status,
            'nama_ayah' => $req->nama_ayah,
            'nama_ibu' => $req->nama_ibu,
            'no_telp_anda' => $req->no_telp,
            'no_telp_ortu' => $req->no_telp_ortu,
            'riwayat_penyakit' => $req->riwayat_penyakit,
            'motivasi' => $req->motivasi,
            'goldar' => $req->goldar,
        ];
        $result = Biodata::where('kode_mhs',$kode)->update($field);
        if($result){
            return redirect()->route('admin.biodata.datadiri')->with('result','update');
        }
        else{
            return back()->with('result','fail');
        }
    }
    public function all_data(Request $req){
        if(Auth::user()->akses != 'sp_admin'){
            $data = DB::table('users')->paginate(10);
            return view('admin.pages.biodata.all_data_santri',['data'=>$data]);
        }
        elseif(Auth::user()->akses == 'sp_admin'){
            $data = User::all();
            return view('admin.pages.biodata.all_data',['data'=>$data]);
        }
    }

    public function tampil_daftar($id){
        $kode = $id;
        $data = Biodata::where('kode_mhs',$kode)->get();
        return view('admin.pages.biodata.daftar',['data'=>$data]);
    }
    
    public function tampil_daftar_uncomp($id){
        $kode = $id;
        $data = Biodata::where('kode_mhs',$kode)->get();
        return view('admin.pages.biodata.daftar_uncomp',['data'=>$data]);
    }
}
