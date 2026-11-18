<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Joni',
                'nim' => '13242520067',
                'prodi' => 'Teknologi Informasi',
                'email' => 'joni.yes@example.com',
                'no_hp' => '081234567890',
                'foto' => 'joni.jpg',
            ],
            [
                'nama' => 'Burhan',
                'nim' => '1234567890',
                'prodi' => 'Teknik Informatika',
                'email' => 'burhan@example.com',
                'no_hp' => '081234567891',
                'foto' => 'images/burhan.jpg',
            ],
            [
                'nama' => 'Isan',
                'nim' => '1234555899',
                'prodi' => 'Teknik Informatika',
                'email' => 'isan@example.com',
                'no_hp' => '081234567892',
                'foto' => 'images/isan.jpg',
            ],
        ]);
    }
}