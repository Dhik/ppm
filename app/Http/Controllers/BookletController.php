<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Absen;
use App\Biodata;
use App\Booklet;
use Auth;
use DB;

class BookletController extends Controller
{
    public function daftar(){
        return view('admin.pages.booklet.meta');
    }
    public function list(){
        $kode = Auth::user()->kode_mhs;
        $data = DB::table('booklet')->where('id_user',$kode)->paginate(12);
        return view('admin.pages.booklet.daftar',['data'=>$data]);
    }
    public function eval(Request $req){
        if(Auth::user()->akses == 'admin'){
            $data = User::where('angkatan',2020)->get();
        }
        return view('admin.pages.user.evaluasi',['data'=>$data]);
    }
    public function proses(){
        $kode = Auth::user()->kode_mhs;
        $data = Booklet::where('booklet.kode_mhs',$kode)
                        ->where('ttd','proses')
                        ->join('users','users.kode_mhs','booklet.id_user')
                        ->select('booklet.nama','users.name','booklet.prodi','booklet.angkatan','booklet.angkatan','booklet.id_line','booklet.wa','booklet.pesan','booklet.id as id','users.foto','booklet.ttd','booklet.id_user')
                        ->get();
        return view('admin.pages.booklet.acc',['data'=>$data]);
    }
    public function edit($id){
        $data = Booklet::where('id',$id)->first();
        return view('admin.pages.booklet.edit',['rc'=>$data]);
    }
    public function update(Request $req){
        $field = [
            'prodi' => $req->prodi,
            'nama' => $req->nama,
            'wa' => $req->wa,
            'angkatan' => $req->angkatan,
            'pesan' => $req->pesan,
            'id_line' => $req->id_line,
            'ttd' => 'proses',
        ];
        $result = Booklet::where('id',$req->id)->update($field);
        if($result){
            return redirect()->route('admin.booklet.list')->with('result','update');
        }
        else{
            return back()->with('result','fail');
        }
    }
    public function acc_edit($id){
        $data = Booklet::where('id',$id)->first();
        return view('admin.pages.booklet.edit_acc',['rc'=>$data]);
    }
    public function acc_update(Request $req){
        $field = [
            'ttd' => $req->ttd,
        ];
        $result = Booklet::where('id',$req->id)->update($field);
        if($result){
            return redirect()->route('admin.booklet.proses')->with('result','update');
        }
        else{
            return back()->with('result','fail');
        }
    }
    public function add(){
        return view('admin.pages.booklet.add');
    }
    public function save(Request $req){
        $id_user = Auth::user()->kode_mhs;

        $result = new Booklet;
        $result->nama = $req->nama;
        $result->id_user = $id_user;
        $result->kode_mhs = $req->kode_mhs;
        $result->prodi = $req->prodi;
        $result->wa = $req->wa;
        $result->angkatan = $req->angkatan;
        $result->pesan = $req->pesan;
        $result->id_line = $req->id_line;
        $result->ttd = 'proses';
        $result->foto = 'user2020.png';

        if($result->save()){
            return redirect()->route('admin.booklet.list')->with('result','success');
        }
        else{
            return back()->with('result','fail')->withInput();
        }
    }
    public function facts(){
        return view('admin.pages.booklet.facts');
    }
    public function tata_busana(){
        return view('admin.pages.booklet.tata_busana');
    }
    public function vmtt(){
        return view('admin.pages.booklet.vmtt');
    }
    public function tampil_daftar($id){
        $kode = $id;
        $data = Booklet::where('id_user',$kode)->get();
        return view('admin.pages.user.list_perkenalan',['data'=>$data]);
    }
}
