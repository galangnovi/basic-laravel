<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seeder_buku extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $buku = [
            [
                'judul' => 'Pemrograman JavaScript',
                'pengarang' => 'Anton Sebastian',
                'tahun_terbit' => '2024',
                'created_at' => now(),
                'updated_at' => now()
            ],
             [
                'judul' => 'Pemrograman PHP',
                'pengarang' => 'Jhon Smith',
                'tahun_terbit' => '2025',
                'created_at' => now(),
                'updated_at' => now()
            ],
            ];
            DB::table('buku')-> insert($buku);
    }
}
