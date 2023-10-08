<?php
use App\Models\matakuliah;
?>
@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
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
@section('title','Matakuliah')
@section('content')
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">MATA KULIAH</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Kode Matakuliah</th>
                <th>Nama Matakuliah</th>
                <th>SKS</th>
            </tr>
            <?php
                $matakuliahs = matakuliah::all();
            ?>

            <tr>
            @foreach ($matakuliahs as $matakuliah) 
                <tr>
                    <td>
                        {{ $matakuliah->id }}
                    </td>
                    <td>
                        {{ $matakuliah->KodeMatakuliah}}
                    </td>
                    <td>
                        {{ $matakuliah->namaMatakuliah}}
                    </td>
                    <td>
                        {{ $matakuliah->sks}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
                        
