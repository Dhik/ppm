<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Absen;
use App\Biodata;
use App\Booklet;
use Auth;

class UserController extends Controller
{
    // public $grupID = 100000;
    public function daftar(Request $req){
        if(Auth::user()->akses == 'admin'){
            $kode = Auth::user()->kode_mhs;
            $data = User::where('kode_mhs','like','%'.$kode.'_%')->where('akses','=','operator')->paginate(10);
        }
        else if(Auth::user()->akses == 'sp_admin'){
            $data = User::all();
        }
        return view('admin.pages.user.daftar',['data'=>$data]);
    }
    public function cari_user(Request $req){
        $data = User::where('name','like',"%{$req->keyword}%")->paginate(10);
        return view('admin.pages.biodata.all_data',['data'=>$data]);
    }
    public function add(){
        return view('admin.pages.user.add');
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
        $result->angkatan = $req->angkatan;

        $hasil = new Absen;
        $hasil->kode_mhs = $req->kode_mhs;
        $hasil->jenis_pengajian = 'primary';
        $hasil->status = 'primary';
        $hasil->keterangan = 'primary';
        $hasil->tanggal = NULL ;

        if($result->save() && $hasil->save()){
            if($req->akses == 'operator'){
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018001',
                            'nama' => 'Ghifa',
                            'foto' => '12156033565189.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017001',
                            'nama' => 'Dinda',
                            'foto' => '12156035373143.jpg');
                Booklet::insert($data);
            }
            return redirect()->route('admin.user')->with('result','success'); 
        }else{
            return back()->with('result','fail')->withInput();
        }
    }
    public function edit($id){
        $data = User::where('id',$id)->first();
        return view('admin.pages.user.edit',['rc'=>$data]);
    }
    public function update(Request $req){

        \Validator::make($req->all(),[
            'name' => 'required|between:3,100',
            'email' => 'required|unique:users,email,'.$req->id,
            'password' => 'nullable|min:6',
            'repassword' => 'same:password',
            'akses'=>'required',
        ])->validate();

        if(!empty($req->password)){
            $field = [
                'name' => $req->name,
                'email' => $req->email,
                'akses' => $req->akses,
                'password' => bcrypt($req->password),
            ];
        }
        else{
            $field = [
                'name' => $req->name,
                'email' => $req->email,
                'akses' => $req->akses,
            ];
        }
        $result = User::where('id',$req->id)->update($field);
        if($result){
            return redirect()->route('admin.biodata.alldata')->with('result','update');
        }
        else{
            return back()->with('result','fail');
        }
    }
    public function delete(Request $req){
        $result = User::find($req->id);

        if($result->delete() ) {
            return back()->with('result','delete');
        }
        else{
            return back()->with('result','fail-delete');
        }
    }
}