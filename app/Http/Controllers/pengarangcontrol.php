<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\MPengarang;
use App\MGlobal;

class pengarangcontrol extends Controller
{
    function index(){
    $pengarang = MPengarang::all();
    return view('data.data_pengarang',compact('pengarang'));
    }
    function add(){
        $pengarang = MGlobal::Get_Row_Empty('tb_pengarang');
        return view('form.frm_pengarang',compact('pengarang'));
    }
    function save(Request $req){
        if($req->get('kd_pengarang')==""){
            
            $pengarang = new MPengarang([
                'nama_pengarang'  => $req->get('nama_pengarang'),
            ]);
            $pengarang->save();
        } else {
            $pengarang = MPengarang::where("kd_pengarang",$req->get("kd_pengarang"));
            $pengarang->update([
                'nama_pengarang'  => $req->get('nama_pengarang'),
               
            ]);
        }
        return redirect('pengarang');
    }
    function edit($kd_pengarang){
    $pengarang = MPengarang::where("kd_pengarang",$kd_pengarang)->first();
    return view('form.frm_pengarang',compact("pengarang"));
    }
    function delete($kd_pengarang){
        //menghapus data berdasarkan id yang dipilih
        DB::table('tb_pengarang')->where('kd_pengarang',$kd_pengarang)->delete();
        return redirect('pengarang');
    }
}