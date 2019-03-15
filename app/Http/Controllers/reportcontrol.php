<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpdf\Mpdf;
use App\MAnggota;
use App\MKoleksi;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class reportcontrol extends Controller
{
    //
    function rpt_anggota(){
        $anggota = MAnggota::all();
        $content = view('report.rpt_anggota',compact('anggota'));

        // dd($content);
        
        $pdf = new MPdf([
            'orientation'=>"L",
            'format'=>"Folio"
        ]);
        $pdf->WriteHTML($content);
        $pdf->Output(public_path().'/Laporan Anggota.pdf','I');
    }
    function rpt_qrcode_buku(){
        $buku = MKoleksi::all();

        $content = view('report.rpt_qrcode_buku',compact('buku'));
        
        $pdf = new MPdf([
            'orientation'=>"P",
            'format'=>"Folio"
        ]);
        $pdf->WriteHTML($content);
        $pdf->Output(public_path().'/Laporan QR Code Buku.pdf','I');
    }
    function rpt_peminjaman(){
        $pinjam = MAnggota::all();
        $content = view('report.rpt_peminjaman',compact('pinjam'));

        // dd($content);
        
        $pdf = new MPdf([
            'orientation'=>"L",
            'format'=>"Folio"
        ]);
        $pdf->WriteHTML($content);
        $pdf->Output(public_path().'/Laporan Peminjaman.pdf','I');
    }
}