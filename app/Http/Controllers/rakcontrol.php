<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\MRak;
use App\MGlobal;

class rakcontrol extends Controller
{
    //
    function index(){
        $rak = MRak::all();
        return view('data.data_rak',compact('rak'));
    }
    function add(){
        $rak = MGlobal::Get_Row_Empty('tb_rak');
        return view('form.frm_rak',compact('rak'));
    }
    function edit($kd_rak){
        $rak = MRak::where("kd_rak",$kd_rak)->first();
        return view('form.frm_rak',compact('rak'));
    }
    function save(Request $req){
        if($req->get('kd_rak')==""){
            $newid = DB::select('SHOW TABLE STATUS LIKE "tb_rak"');
            $kd_rak = $newid[0]->Auto_increment;

            //simpan ke tabel anggota
            $rak = new MRak([
                'nama_rak' => $req->get('nama_rak')
            ]);
            $rak->save();
        } else{
            $rak = MRak::where("kd_rak",$req->get('kd_rak'));
            $rak->update([
                'nama_rak' => $req->get('nama_rak')
            ]);
        }
        return redirect('rak');
    }
    function delete($kd_rak){
        $rak = MRak::where("kd_rak",$kd_rak);
        $rak->delete();
        return redirect('rak');
    }
}
