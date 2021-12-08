<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama' => 'meja',
                'keterangan' => 'meja untuk belajar',
                
            ],
            [
                'nama' => 'kursi',
                'keterangan' => 'kursi untuk belajar',
            ],
            [
                'nama' => 'pintu',
                'keterangan' => 'pintu untuk belajar',
            ]
        ]);
    }
}
