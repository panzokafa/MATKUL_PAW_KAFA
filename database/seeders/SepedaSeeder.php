<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sepeda;

class SepedaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sepeda::create([
            'jenis_sepeda' => 'Sepeda Gunung',
            'merk' => 'Polygon',
            'harga' => 3000000,
        ]);

        Sepeda::create([
            'jenis_sepeda' => 'Sepeda Balap',
            'merk' => 'Trek',
            'harga' => 5000000,
        ]);

        Sepeda::create([
            'jenis_sepeda' => 'Sepeda Fixie',
            'merk' => 'Dosnoventa',
            'harga' => 2000000,
        ]);
    }
}
