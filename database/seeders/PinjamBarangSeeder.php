<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamBarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pinjam_barang')->insert([
            [
                'id_pinjam' => '222',
                'peminjam' => 'Tania',
                'tgl_pinjam' => '2024-11-01',
                'id_barang' => '123',
                'nama_barang' => 'Sunscreen',
                'jml_barang' => '5',
                'tgl_kembali' => '2024-11-07',
                'kondisi' => 'aman',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
