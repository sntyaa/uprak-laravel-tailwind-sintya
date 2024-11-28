<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {            
            DB::table('stok')->insert([
                [
                    'id_barang' => 123,
                    'nama_barang' => 'Sunscreen', 
                    'jml_masuk' => 10,
                    'jml_keluar' => 5,
                    'total_barang' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}