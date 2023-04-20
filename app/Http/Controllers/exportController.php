<?php

namespace App\Http\Controllers;

use App\Models\pegawais;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class exportController extends Controller
{

    public function previewPDF(){
            $data = pegawais::all();
            return view('report.pdf.preview-pdf',['data'=>$data]);
    }


    public function pegawaiPDF(){
        $data = pegawais::all();
        $pdf = Pdf::loadView('report.pdf.template', ['data'=>$data]);
        return $pdf->download('laporan-pegawai.pdf');
    }
}
