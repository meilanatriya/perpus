<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MPenerbit;
use App\MGlobal;

class penerbitcontrol extends Controller
{
    //
    function index(){
        $penerbit = MPenerbit::all();
        return view('data.data_penerbit',compact('penerbit'));
    }
    function add(){
        $penerbit = MGlobal::Get_Row_Empty('tb_penerbit');
        return view('form.frm_penerbit',compact('penerbit'));
    }
    function edit($kd_penerbit){
        $penerbit = MPenerbit::where("kd_penerbit",$kd_penerbit)->first();
        return view('form.frm_penerbit',compact('penerbit'));
    }
    function save(Request $req){
        if($req->get('kd_penerbit')==""){

            //simpan ke tabel penerbit
            $penerbit =new MPenerbit([
                'nama_penerbit' => $req->get('nama_penerbit')
            ]);
            $penerbit->save();
        } else{
            $penerbit =MPenerbit::where("kd_penerbit",$req->get('kd_penerbit'));
            $penerbit->update([
                'nama_penerbit' => $req->get('nama_penerbit')
            ]);
            }
        return redirect('penerbit');
    }
    function delete($kd_penerbit){
        $penerbit = MPenerbit::where("kd_penerbit",$kd_penerbit);
        $penerbit->delete();
        return redirect('penerbit');
    }
}
