<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table ('matakuliahs')->insert( [
            ['kodeMatakuliah' => 'MK001', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK002', 
            'namaMatakuliah' => 'Audit SI' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK003', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4]
        ]
        );
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++) {
            DB::table('mahasiswas')->insert([
                'studentID' => '03000811'&$i,
                'nama' =>$faker->name,
                'tahunMasuk' => '2021',
                'jurusan' => $faker->address
            ]);
        }
        for($i = 1; $i <= 50; $i++) {
            DB::table('users')->insert([
                'name' =>$faker->name,
                'email' =>$faker->email,
                'password' =>$faker->password,
            ]);
        }

        DB::table ('khs')->insert( [
            ['kode_khs' => 'khs001', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],

            ['kode_khs' => 'khs002', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],

            ['kode_khs' => 'khs003', 
            'keterangan' => '2022/2023' ,
            'keterangan_singkat' => '2022/2023'],
        ]
        );
        DB::table ('khs_details')->insert( [
            ['kode_khs_detail' => 'khs001', 
            'kode_khs' => 'khs001' ,
            'nilai' => 90],

            ['kode_khs_detail' => 'khs002', 
            'kode_khs' => 'khs002' ,
            'nilai' => 90],

            ['kode_khs_detail' => 'khs003', 
            'kode_khs' => 'khs003' ,
            'nilai' => 90],
        ]
        );
        DB::table ('programstudis')->insert( [
            ['NamaProgramStudi' => 'Sistem Informasi ' ,
            'Deskripsi' => 'Belajar mengenai Komputer dan Bisnis'],

            ['NamaProgramStudi' => 'Akuntansi ' ,
            'Deskripsi' => 'Belajar mengenai Laporan Keuangan Akuntansi'],

            ['NamaProgramStudi' => 'Hukum ' ,
            'Deskripsi' => 'Belajar mengenai Perhukuman'],

            ['NamaProgramStudi' => 'Manajemen ' ,
            'Deskripsi' => 'Belajar mengenai Manajemen Bisnis'],

            ['NamaProgramStudi' => 'Hospitality ' ,
            'Deskripsi' => 'Belajar mengenai perhotelan'],
        ]
        );
        
        DB::table ('pembayarans')->insert( [
            [
            'StudentId' => '03081210004' ,
            'Amount' => '100000.00',
            'Paymentdate' => '2020-10-20',
            'Paymentmethod' => 'Cash'],

            [
            'StudentId_' => '0308123456' ,
            'Amount' => '100000.00',
            'Paymentdate' => '2020-10-20',
            'Paymentmethod' => 'Debit'],

            [
            'StudentId' => '030812345678' ,
            'Amount' => '100000.00',
            'Paymentdate' => '2020-10-20',
            'Paymentmethod' => 'Kredit'],

            [
            'StudentId' => '03081210001' ,
            'Amount' => '100000.00',
            'Paymentdate' => '2020-10-20',
            'Paymentmethod' => 'Cash'],

            [
            'StudentId' => '03081210002' ,
            'Amount' => '100000.00',
            'Paymentdate' => '2020-10-20',
            'Paymentmethod' => 'Debit']
            ]
        );

        DB::table ('transkrip_akademiks')->insert( [
            [ 
            'StudentID' => '03081210004' ,
            'Kode_matakuliah' => 'KM001',
            'Kode_term' => 'T001',
            'nilai' => 'A',
            'sks' => '4',
            'gpa' => '3.7'],

            [
            'StudentID' => '0308123456' ,
            'Kode_matakuliah' => 'KM002',
            'Kode_term' => 'T002',
            'nilai' => 'B',
            'sks' => '6',
            'gpa' => '3.2'],

            [
            'StudentID' => '030812345678' ,
            'Kode_matakuliah' => 'KM003',
            'Kode_term' => 'T003',
            'nilai' => 'A',
            'sks' => '3',
            'gpa' => '3.1'],

            [
            'StudentID' => '03081210001' ,
            'Kode_matakuliah' => 'KM004',
            'Kode_term' => 'T004',
            'nilai' => 'B',
            'sks' => '5',
            'gpa' => '3.4'],

            [
            'StudentID' => '03081210002' ,
            'Kode_matakuliah' => 'KM005',
            'Kode_term' => 'T005',
            'nilai' => 'A',
            'sks' => '4',
            'gpa' => '3.76']
            ]
        );
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	    // insert data ke table pegawai menggunakan Faker
    		\DB::table('mahasiswas')->insert([
                'studentID' => '03000811'&$i,
    			'nama' => $faker->name,
                'jurusan' => $faker->address,
    			'tahunMasuk' => '2021',
    		]);
        }

        for($i = 1; $i <= 15; $i++){
 
            // insert data ke table pegawai menggunakan Faker
          DB::table('users')->insert([
              'name' => $faker->name,
              'email' => $faker->email,
              'password' => $faker->password,
          ]);
        }
    }
}
