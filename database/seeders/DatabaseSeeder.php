<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tb_alternatif')->insert([
            [
                'id_alternatif' => 'A01',
                'nama_alternatif' => 'Alternatif 1',
            ],
            [
                'id_alternatif' => 'A02',
                'nama_alternatif' => 'Alternatif 2',
            ],
            [
                'id_alternatif' => 'A03',
                'nama_alternatif' => 'Alternatif 3',
            ],
        ]);

        DB::table('tb_kriteria')->insert([
            [
                'id_kriteria' => 'C01',
                'nama_kriteria' => 'Kriteria 1',
                'atribut' => 'Benefit',
                'bobot' => 1,
            ],
            [
                'id_kriteria' => 'C02',
                'nama_kriteria' => 'Kriteria 2',
                'atribut' => 'Cost',
                'bobot' => 2,
            ],
            [
                'id_kriteria' => 'C03',
                'nama_kriteria' => 'Kriteria 3',
                'atribut' => 'Benefit',
                'bobot' => 3,
            ],
            [
                'id_kriteria' => 'C04',
                'nama_kriteria' => 'Kriteria 4',
                'atribut' => 'Cost',
                'bobot' => 4,
            ],
            [
                'id_kriteria' => 'C05',
                'nama_kriteria' => 'Kriteria 4',
                'atribut' => 'Cost',
                'bobot' => 5,
            ],
        ]);

        DB::statement("INSERT INTO tb_nilai (id_alternatif, id_kriteria, nilai) SELECT id_alternatif, id_kriteria, ROUND(RAND() * 5) FROM tb_alternatif, tb_kriteria");
    }
}