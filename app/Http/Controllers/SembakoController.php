<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sembako;
use App\Absen;
use App\User;
use Auth;
use Excel;
use App\Exports\SembakoExport;
use App\Exports\SeppmExport;
use App\Exports\TerobosanExport;
use App\Exports\BiodataExport;

class SembakoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function self()
    {   
        $kode = Auth::user()->kode_mhs;
        $data = Absen::join('users','users.kode_mhs','absensi.kode_mhs')
        ->where('absensi.kode_mhs',$kode)
        ->orderBy('absensi.id','desc')
        ->get();
        return view('admin.pages.absen.daftar', compact('data'));
    }

    public function exportExcel(){
        $nama_file = 'Presensi '.Auth::user()->name.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new SembakoExport, $nama_file);
    }
    public function exportSe_ppm(){
        $nama_file = 'Presensi PPM '.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new SeppmExport, $nama_file);
    }
    public function exportTerobosan(){
        $nama_file = 'Presensi Terobosan '.Auth::user()->name.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new TerobosanExport, $nama_file);
    }
    public function exportBiodata(){
        $nama_file = 'Biodata Santri PPM '.date('Y-m-d_H-i-s').'.xlsx';
        return Excel::download(new BiodataExport, $nama_file);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
