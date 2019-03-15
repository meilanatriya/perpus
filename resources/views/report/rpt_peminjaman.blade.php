<style>
table position: relative; border-collapse:collapse; width: 100%;}
table td { border : 1px solid #000; padding:5px;}
h1,h2,p {margin:0; text-align: center;}
p {margin-bottom: 15px;  margin-bottom: 15px; border-bottom: 8px double #000; }
.title {background: #ccc;}
</style>

<h1> PERPUSTAKAAN UMUM</h1>
<h2>WEARNES EDUCATION CENTER MADIUN</h2>
<p>Jl Thamrin 35 A Madiun</p>

<table>
    <tr class="title">
        <td width="3%">#</td>
        <td width="10%">No Anggota</td>
        <td width="27%">Nama</td>
        <td width="27%">Alamat</td>
        <td width="27%">Email</td>
        <td width="6%">Telepon</td>
    </tr>
    @foreach($pinjam as $rsPinjam)
    <tr>
        <td>{{$rsPinjam->kd_anggota}}</td>
        <td>{{$rsPinjam->no_anggota}}</td>
        <td>{{$rsPinjam->nama}}</td>
        <td>{{$rsPinjam->alamat." ".$rsPinjam->kota}}</td>
        <td>{{$rsPinjam->email}}</td>
        <td>{{$rsPinjam->telp}}</td>
    </tr>
    @endforeach
</table>