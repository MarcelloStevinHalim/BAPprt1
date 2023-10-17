<?php

use App\Models\Pembayaran ;
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
@section('title','Pembayaran')
@section('content')
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">PEMBAYARAN</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>StudentId</th>
                <th>Amount</th>
                <th>Paymentdate</th>
                <th>Paymentmethod </th>
            </tr>

            <tr>
                @foreach ($pembayarans as $Pembayaran) 
                    <tr>
                        <td>
                            {{$Pembayaran->id}}
                        </td>
                        <td>
                            {{$Pembayaran->StudentId}}
                        </td>
                        <td>
                            {{$Pembayaran->Amount}}
                        </td>             
                        <td>
                            {{$Pembayaran->Paymentdate}}
                        </td>

                        <td>
                            {{$Pembayaran->Paymentmethod}}
                        </td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
