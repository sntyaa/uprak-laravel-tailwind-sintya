<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Barang_keluarSeeder extends Seeder
{
    public function run(): void
    {            
            DB::table('barang_keluar')->insert([
                [
                    'id_barang' => 123,
                    'nama_barang' => 'Sunscreen', 
                    'tgl_keluar' => '2024-11-02',
                    'jml_keluar' => 5,
                    'lokasi' => 'Bandung',
                    'penerima' => 'Danar',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
    }
}