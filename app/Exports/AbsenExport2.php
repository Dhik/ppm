<?php

namespace App\Exports;

use App\Absen;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class AbsenExport implements FromView
{
	private $data;

    public function __construct($data, $caption, $psf, $reportTitle)
    {
        $this->data = $data;
        $this->caption = $caption;
        $this->psf = $psf;
        $this->reportTitle = $reportTitle;
    }
	use Exportable;
    public function view(): View
    {
       return view('report.createpersonnelreport', [
            'users' => $this->data,
            'captions' => $this->caption,
            'psfs' => $this->psf,
            'reportTitle' => $this->reportTitle
        ]);
    }
}