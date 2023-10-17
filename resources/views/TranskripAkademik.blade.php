<?php
use App\Models\TranskripAkademik ;
?>
@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style>
@section('title','Transkrip Akademik')
@section('content')
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">TRANSKRIP AKADEMIK</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>StudentID Mahasiswa</th>
                <th>Kode Matakuliah</th>
                <th>Kode Term</th>
                <th>Nilai</th>
                <th>Sks</th>
                <th>Bobot nilai</th>
            </tr>

            <tr>
                <?php
                $transkrip_akademiks = TranskripAkademik::all();
                ?>

                @foreach ($transkrip_akademiks as $TranskripAkademik) 
                    <tr>
                        <td>
                            {{ $TranskripAkademik->id}}
                        </td>
                        <td>
                            {{ $TranskripAkademik->StudentID}}
                        </td>
                        <td>
                            {{ $TranskripAkademik->Kode_matakuliah}}
                        </td>
                        <td>
                            {{ $TranskripAkademik->Kode_term}}
                        </td>
                        <td>
                            {{ $TranskripAkademik->nilai}}
                        </td>
                        <td>
                            {{ $TranskripAkademik->sks}}
                        </td>
                        <td>
                            {{ $TranskripAkademik->gpa}}
                        </td>
                    </tr>
                @endforeach

        </table>
    </div>
@endsection
