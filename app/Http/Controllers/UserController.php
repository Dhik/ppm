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
            $data = User::where('kode_mhs','like','%'.$kode.'_%')->where('akses','=','operator')->get();
        }
        else if(Auth::user()->akses == 'sp_admin'){
            $data = User::all();
        }
        return view('admin.pages.user.daftar',['data'=>$data]);
    }
    public function cari_user(Request $req){
        $data = User::where('name','like',"%{$req->keyword}%")->get();
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
        $result->foto = $req->kode_mhs.'.jpg';

        $hasil = new Absen;
        $hasil->kode_mhs = $req->kode_mhs;
        $hasil->jenis_pengajian = 'primary';
        $hasil->status = 'primary';
        $hasil->keterangan = 'primary';
        $hasil->tanggal = NULL ;

        if($result->save() && $hasil->save()){
            if($req->angkatan == '2020'){
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017001',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017001.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017002',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017002.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017003',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017003.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017004',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017004.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017005',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017005.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017006',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017006.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017007',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017007.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017008',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017008.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017009',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017009.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017010',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017010.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017011',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017011.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017012',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017012.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017013',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017013.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017014',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017014.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017015',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017015.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017016',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017016.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017017',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017017.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017018',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017018.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017019',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017019.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017020',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017020.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017021',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017021.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017022',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017022.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017023',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017023.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017024',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017024.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2017025',
                            'nama' => 'Belum Tahu',
                            'foto' => '2017025.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018001',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018001.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018002',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018002.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018003',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018003.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018004',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018004.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018005',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018005.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018006',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018006.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018007',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018007.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018008',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018008.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018009',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018009.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018010',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018010.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018011',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018011.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018012',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018012.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018013',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018013.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018014',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018014.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018015',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018015.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018016',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018016.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018017',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018017.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018018',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018018.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018019',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018019.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018020',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018020.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018021',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018021.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018022',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018022.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018023',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018023.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018024',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018024.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018025',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018025.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018026',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018026.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018027',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018027.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018028',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018028.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018029',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018029.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018030',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018030.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018031',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018031.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018032',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018032.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018033',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018033.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018034',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018034.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018035',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018035.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2018036',
                            'nama' => 'Belum Tahu',
                            'foto' => '2018036.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016001',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016001.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016002',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016002.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016003',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016003.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016004',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016004.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016005',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016005.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016006',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016006.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016007',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016007.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016008',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016008.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016009',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016009.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016010',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016010.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016011',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016011.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016012',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016012.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016013',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016013.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016014',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016014.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016015',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016015.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016016',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016016.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016017',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016017.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016018',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016018.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016019',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016019.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016020',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016020.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016021',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016021.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016022',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016022.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016023',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016023.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016024',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016024.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2016025',
                            'nama' => 'Belum Tahu',
                            'foto' => '2016025.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015001',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015001.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015002',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015002.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015003',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015003.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015004',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015004.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015005',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015005.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015006',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015006.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015007',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015007.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2015008',
                            'nama' => 'Belum Tahu',
                            'foto' => '2015008.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2013001',
                            'nama' => 'Belum Tahu',
                            'foto' => '2013001.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2014001',
                            'nama' => 'Belum Tahu',
                            'foto' => '2014001.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2014003',
                            'nama' => 'Belum Tahu',
                            'foto' => '2014003.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019001',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019001.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019002',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019002.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019003',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019003.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019004',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019004.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019005',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019005.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019006',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019006.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019007',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019007.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019008',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019008.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019009',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019009.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019010',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019010.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019011',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019011.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019012',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019012.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019013',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019013.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019014',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019014.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019015',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019015.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019016',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019016.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019017',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019017.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019018',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019018.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019019',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019019.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019020',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019020.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019021',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019021.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019022',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019022.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019023',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019023.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019024',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019024.jpg');
                Booklet::insert($data);
                $data = array('id_user' => $req->kode_mhs,
                            'kode_mhs' => '2019025',
                            'nama' => 'Belum Tahu',
                            'foto' => '2019025.jpg');
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