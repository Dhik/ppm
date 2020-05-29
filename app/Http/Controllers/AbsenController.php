<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use App\User;
use Auth;

use App\Exports\AbsenExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class AbsenController extends Controller
{
    public function daftar(Request $req){
        $kode = Auth::user()->kode_mhs;
        $data = Absen::where('kode_mhs','like','%'.$kode.'%')->paginate(10);

        return view('admin.pages.absen.daftar',['data'=>$data]);
    }
    // Fungsi Add/ Tambah
    public function add(){
        return view('admin.pages.absen.add');
    }

    // Fungsi Simpan Save
    public function save(Request $req, $id){
        \Validator::make($req->all(),[
            'jenis_pengajian'=>'required',
            'status'=>'required',
            'tanggal'=>'required',
        ])->validate();
        if($req->keterangan == NULL){
            $result = new Absen;
            $result->kode_mhs = $id;
            $result->jenis_pengajian = $req->jenis_pengajian;
            $result->status = $req->status;
            $result->keterangan = '-';
            $result->tanggal = $req->tanggal;
            if($result->save()){
                $kode = $id;
                $data = Absen::join('users','users.kode_mhs','absensi.kode_mhs')
                ->where('absensi.kode_mhs',$kode)
                ->orderBy('absensi.id','desc')
                ->paginate(10);
                return view('admin.pages.absen.daftar',['data'=>$data])->with('result','success');
            }
            else{
                return back()->with('result','fail')->withInput();
            }
        }
        else{
            $result = new Absen;
            $result->kode_mhs = $id;
            $result->jenis_pengajian = $req->jenis_pengajian;
            $result->status = $req->status;
            $result->keterangan = $req->keterangan;
            $result->tanggal = $req->tanggal;
            if($result->save()){
                $kode = $id;
                $data = Absen::join('users','users.kode_mhs','absensi.kode_mhs')
                ->where('absensi.kode_mhs',$kode)
                ->orderBy('absensi.id','desc')
                ->paginate(10);
                return view('admin.pages.absen.daftar',['data'=>$data])->with('result','success');
            }
            else{
                return back()->with('result','fail')->withInput();
            }
        }
    }
    public function tampil_daftar($id){
        $kode = $id;
        $data = Absen::join('users','users.kode_mhs','absensi.kode_mhs')
            ->select('absensi.id','users.name','absensi.jenis_pengajian','absensi.status','absensi.keterangan','absensi.kode_mhs','absensi.tanggal','users.akses')
            ->where('absensi.kode_mhs',$kode)
            ->orderBy('absensi.id','desc')
            ->paginate(10);
        return view('admin.pages.absen.daftar',['data'=>$data]);
    }
    public function tambah_daftar($id){
        $kode = $id;
        return view('admin.pages.absen.add',['kode'=>$kode]);
    }
    public function delete(Request $req){
        $result = Absen::find($req->id);
        if($result != null){
            if($result->delete() ) {
                return back()->with('result','delete');
            }
        }
        return back()->with('result','fail-delete');
    }
    public function absen_user(){
        $kode = Auth::user()->kode_mhs;
        $data = Absen::join('users','users.kode_mhs','absensi.kode_mhs')
        ->where('absensi.kode_mhs',$kode)
        ->orderBy('absensi.id','desc')
        ->paginate(10);
        return view('admin.pages.absen.daftar',['data'=>$data]);
    }
    public function export_excel()
	{
		return Excel::download(new AbsenExport, 'absen.xlsx');
    }
    public function samplee($id){
        echo $id;
    }
    public function exportSe_ppm(){
        $nama_file = 'Presensi PPM'.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new Se_ppmExport, $nama_file);
    }

    public function edit($id){
        $data = Absen::where('id',$id)->first();
        return view('admin.pages.absen.edit',['rc'=>$data]);
    }
    public function update(Request $req, $id){
        if($req->status == 'izin'){
            \Validator::make($req->all(),[
                'jenis_pengajian' => 'required',
                'status' => 'required',
                'keterangan' => 'required',
                'tanggal' => 'required',
            ])->validate();
        }
        else{
            \Validator::make($req->all(),[
                'jenis_pengajian' => 'required',
                'status' => 'required',
                'tanggal' => 'required',
            ])->validate();
        }
        $field = [
            'jenis_pengajian' => $req->jenis_pengajian,
            'status' => $req->status,
            'keterangan' => $req->keterangan,
            'tanggal'=>$req->tanggal,
        ]; 
        $result = Absen::where('id',$req->id)->update($field);
        if($result){
            return redirect()->route('admin.user')->with('result','update');
        }
        else{
            return back()->with('result','fail');
        }
    }
    public function perminggu(){
        $data = Absen::join('users','users.kode_mhs','absensi.kode_mhs')
        ->whereMonth('tanggal','=',date('02')) 
        ->orderBy('absensi.id','desc')
        ->paginate(10);
        return view('admin.pages.absen.sample',['data'=>$data]);
    }
    public function cari_absen(Request $req){
        echo 'Mohammad Dhikri';    
    }
}
