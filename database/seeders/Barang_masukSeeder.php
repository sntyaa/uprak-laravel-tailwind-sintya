<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang_masukSeeder extends Seeder
{
    public function run(): void
    {            
            DB::table('barang_masuk')->insert([
                [
                    'id_barang' => 123,
                    'nama_barang' => 'Sunscreen', 
                    'tgl_masuk' => '2024-10-31',
                    'jml_masuk' => 10,
                    'id_supplier' => 888,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}