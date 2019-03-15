<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MGlobal;
use App\MBuku;
use App\MPengarang;
use App\MPenerbit;
use App\Mkategori;

class BukuControl extends Controller
{
    //
    function index(){
        $buku = DB::select('SELECT tb_buku.kd_buku,tb_buku.judul,tb_pengarang.nama_pengarang,tb_penerbit.nama_penerbit,
        tb_buku.tempat_terbit,tb_buku.tahun_terbit,tb_kategori.nama_kategori,tb_buku.halaman,tb_buku.edisi,
        tb_buku.ISBN FROM tb_buku,tb_pengarang,tb_penerbit,tb_kategori 
        WHERE tb_buku.kd_pengarang = tb_pengarang.kd_pengarang AND tb_buku.kd_penerbit=tb_penerbit.kd_penerbit AND
        tb_buku.kd_kategori = tb_kategori.kd_kategori');
        return view('data.data_buku',compact('buku'));
    }

    function add(){
        $buku = MGlobal::Get_Row_Empty('tb_buku');
        $pengarang = MPengarang::all();
        $penerbit = MPenerbit::all();
        $kategori = MKategori::all();
        return view('form.frm_buku',compact('buku','pengarang','penerbit','kategori'));
    }

    function edit($kd_anggota){
        $buku = MBuku::where("kd_buku",$kd_anggota)->first();
        $pengarang = MPengarang::all();
        $penerbit = MPenerbit::all();
        $kategori = MKategori::all();
        return view('form.frm_buku',compact('buku','pengarang','penerbit','kategori'));
    }

    function save(Request $req){

        if($req->file('foto')){
            $foto = $req->file('foto');
            $nama_foto = date('m-Y-').$foto->getClientOriginalName();
        } else {
            $nama_foto = $req->get('old_foto');
        }

        if($req->get('kd_buku')==""){
            // Tambahkan Validasi buat sendiri

             // Simpan Ke Tabel Buku
            $buku = new MBuku([
                'judul' => $req->get('judul'),
                'kd_pengarang' => $req->get('pengarang'),
                'kd_penerbit' => $req->get('penerbit'),
                'tempat_terbit' => $req->get('tempat_terbit'),
                'tahun_terbit' => $req->get('tahun_terbit'),
                'kd_kategori' => $req->get('kategori'),
                'halaman' => $req->get('halaman'),
                'edisi' => $req->get('edisi'),
                'ISBN' => $req->get('isbn'),
                'cover' => $nama_foto,
            ]);
            $buku->save();
        } else {
            $buku = MBuku::where("kd_buku",$req->get('kd_buku'));  
            $buku->update([
                'judul' => $req->get('judul'),
                'kd_pengarang' => $req->get('pengarang'),
                'kd_penerbit' => $req->get('penerbit'),
                'tempat_terbit' => $req->get('tempat_terbit'),
                'tahun_terbit' => $req->get('tahun_terbit'),
                'kd_kategori' => $req->get('kategori'),
                'halaman' => $req->get('halaman'),
                'edisi' => $req->get('edisi'),
                'ISBN' => $req->get('isbn'),
                'cover' => $nama_foto,             
            ]);
        }

        // Upload setelah data anggota tersimpan
        if($req->file('foto')){
            $foto->move(public_path()."/img", $nama_foto);
        }

        return redirect('buku');
    }

    function delete($kd_anggota){
        $anggota = MBuku::where("kd_buku",$kd_anggota);        
        $anggota->delete();
        return redirect('buku');
    }    

}
