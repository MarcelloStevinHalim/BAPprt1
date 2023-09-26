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


    }
}
