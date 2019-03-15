<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MGlobal;
use App\MBuku;
use App\MPenerbit;
use App\MPengarang;

class dashboardcontrol extends Controller
{
    //
    function jumlah_buku(){
        $buku = DB::select('select count(*) as jumlah from tb_buku');
        $jumlahbuku = $buku[0]->jumlah;
        $anggota = DB::select('select count(*) as jumlah from tb_anggota');
        $jumlahanggota = $anggota[0]->jumlah;
        $penerbit = DB::select('select count(*) as jumlah from tb_penerbit');
        $jumlahpenerbit = $penerbit[0]->jumlah;
        $pengarang = DB::select('select count(*) as jumlah from tb_pengarang');
        $jumlahpengarang = $pengarang[0]->jumlah;
        return view('dashboard',compact('jumlahbuku','jumlahanggota','jumlahpenerbit','jumlahpengarang'));
    }
}