<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
    DB::table('user')->insert([
        [
    'id_user' => '123',
    'nama' => 'sintya', 
    'username' => 'sintyya',
    'password' => 'sin123',
    'level' => '1',
    ],
    ]);
    }
    }