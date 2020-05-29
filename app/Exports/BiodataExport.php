<?php

namespace App\Exports;

use App\Sembako;
use App\Absen;
use App\User;
use App\Biodata;
use Auth;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BiodataExport implements FromView
{
    public function view(): View
    {
        return view('biodata', [
            'datas' =>Biodata::all()
        ]);
    }
}
