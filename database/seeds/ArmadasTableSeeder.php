<?php

use Illuminate\Database\Seeder;
use App\Armada;

class ArmadasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Armada::insert([
            [
                'nama'       => 'Pelangi',
                'perusahaan' => 'PT.Dua Saudara',
                'plat'       => 'BL 5656 KL',
                'type'       => 'PATAS',
                'trayek'     => 'Banda Aceh - Medan'
            ],
            [
                'nama'       => 'Pelangi',
                'perusahaan' => 'PT.Dua Saudara',
                'plat'       => 'BL 5657 KL',
                'type'       => 'SCANIA',
                'trayek'     => 'Banda Aceh - Medan'
            ],
            [
                'nama'       => 'Pelangi',
                'perusahaan' => 'PT.Dua Saudara',
                'plat'       => 'BL 5658 KL',
                'type'       => 'SEAT 21',
                'trayek'     => 'Banda Aceh - Medan'
            ],
            [
                'nama'       => 'Pelangi',
                'perusahaan' => 'PT.Dua Saudara',
                'plat'       => 'BL 5659 KL',
                'type'       => 'SEAT 12',
                'trayek'     => 'Banda Aceh - Medan'
            ],
            [
                'nama'       => 'Pelangi',
                'perusahaan' => 'PT.Dua Saudara',
                'plat'       => 'BL 5660 KL',
                'type'       => 'NON STOP',
                'trayek'     => 'Banda Aceh - Medan'
            ]
        ]);
    }
}
