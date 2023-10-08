@extends('layouts.app')
<head>
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
        }
        p{
            margin: 10;
        }
    </style>
</head>

@section('title', 'Profil')
@section ('content')
<body>
    <h1>Profile</h1>
    <div class="table-container">
        <p> Nama        : Marcello Stevin Halim </p>
        <p> Umur        : 20 Tahun </p>
        <p> Student ID  : 03081210004</p>
        <p> Email       : marcello9798@gmail.com </p>
        <p> Kelas       : 21SI2</p>
        <p> Alamat      : jalan Sutomo No. 29A Medan</p>
        <p> Universitas : Universitas Pelita Harapan</p>
    </div>
    <h2 align="left">Matakuliah</h2>
    <table border="1" width="700px" cellspacing="0">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Jam</th>
                <th>Matakuliah</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Senin</td>
                <td>17:30 - 20:10</td>
                <td>Accounting and Finance</td>
                <td>Ms Lisa</td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>17:30 - 21:00</td>
                <td>Bisnis Aplikasi Programing</td>
                <td>Ade Maulana</td>
            </tr>
            <tr>
                <td>Rabu</td>
                <td>17:30 - 20:10</td>
                <td>Manajemen Strategi Perusahaan</td>
                <td>Romindo</td>
            </tr>
            <tr>
                <td>Kamis</td>
                <td>17:30 - 21:00</td>
                <td>Audit dan Kontrol Sistem Informasi</td>
                <td>Ade Maulana</td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>17:30 - 20:10</td>
                <td>Digital Marketing</td>
                <td>Okky Barus</td>
            </tr>
            <tr>
                <td>Sabtu</td>
                <td>13:00 - 15:00</td>
                <td>Sistem Informasi Perusahaan</td>
                <td>Ade Maulana</td>
            </tr>
        </tbody>
    </table>
</body>
</html>

@endsection
