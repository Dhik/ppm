<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Absen;
use App\Biodata;
use App\Booklet;
use Auth;

class BookletController extends Controller
{
    public function list(Request $req){
        $kode = Auth::user()->kode_mhs;
        $data = Booklet::where('id_user',$kode)->paginate(10);
        return view('admin.pages.booklet.daftar',['data'=>$data]);
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
}
