<?php

namespace App\Http\Controllers;
use App\User;
use App\Absen;
use App\Biodata;
use Auth;
use Illuminate\Http\Request;

class RegisController extends Controller
{
    public function add(){
        return view('auth.register');
    }
    public function save(Request $req){
        \Validator::make($req->all(),[
            'name' => 'required|between:3,100',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',
            'akses'=>'required',
            'kode_mhs'=>'required|unique:users,kode_mhs',
        ])->validate();

        $result = new User;
        $result->name = $req->name;
        $result->email = $req->email;
        $result->password = bcrypt($req->password);
        $result->akses = $req->akses;
        $result->kode_mhs = $req->kode_mhs;
        $result->isi_biodata = "belum";

        $hasil = new Absen;
        $hasil->kode_mhs = $req->kode_mhs;
        $hasil->jenis_pengajian = 'primary';
        $hasil->status = 'primary';
        $hasil->keterangan = 'primary';
        $hasil->tanggal = NULL ;

        if($result->save() && $hasil->save()){
            return 'Sukses'; 
        }else{
            return 'Gagal';
        }
    }
}
