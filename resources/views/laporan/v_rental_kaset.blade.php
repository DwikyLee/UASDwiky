<?php
    use App\Models\RentalKaset;
?>

@extends('layouts.app')


@section('title','Peminjaman Kaset Film')

@section('content')
    <h1>Peminjaman Kaset Film</h1>
    <style>
        table tr{
            padding: 30px;
        }
        table td{
            border:2px;
        }

        #watermark{
            margin: 0 0 0 42%;
            display: block;
            position: absolute;
            opacity: 0.2;
            filter: alpha(opacity=50);
        }
        
    </style>
    <a href="/laporan/v_rental_kaset/print" target="_blank" class="btn btn-primary">Cetak PDF</a>
    <div id="watermark">
        <img src='{{ asset("AdminLTE/dist/img/Logo_UPH.gif") }}' style="width: 65%;">
    </div>
    <div style="text-align: center; font: 18pt bold;">
        <b>Nama : Dwiky<br>
        NIM : 03081200014<br>
        KELAS : 20SI2<br></b>
    </div>
    <hr>
    <table class="table">
        <thead class="table-success">
            <tr>
                <th>No. Member</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jam Kerja</th>
                <th>Pembayaran</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Pengembalian</th>
                <th>Judul Film</th>
                <th>Genre</th>
                
             </tr>
        </thead>
        @foreach ($rentalkaset as $rk) 
        <tr class="table-info">
            <th>{{ $rk->no_member }}</th>
            <th>{{ $rk->nama }}</th>
            <th>{{ $rk->alamat }}</th>
            <th>{{ $rk->jam_kerja }}</th>           
            <th>{{ $rk->pembayaran }}</th>
            <th>{{ $rk->tgl_pinjam }}</th>
            <th>{{ $rk->tgl_pengembalian }}</th>
            <th>{{ $rk->judul_film }}</th>
            <th>{{ $rk->genre_film }}</th>
        </tr>
        @endforeach
    </table>    
@endsection