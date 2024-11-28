<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('barang')->insert([
        [
    'id_barang' => '123',
    'nama_barang' => 'Sunscreen',
    'spesifikasi' => 'Tabir suryaadalah ramuan untuk menghalangi pengaruh cahaya matahari yang merusak kulit.',
    'lokasi' => 'Jakarta',
    'kondisi' => 'aman',
    'jml_barang' => '5',
    'sumber_dana' => 'investasi',
    'created_at' => now(),
    'updated_at' => now(),
    ],
    ]);
    }
    }