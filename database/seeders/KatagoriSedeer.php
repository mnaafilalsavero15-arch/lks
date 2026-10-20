<?php

namespace Database\Seeders;

use App\Models\Katagori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatagoriSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Katagori::create([
            'nama_katagori' => 'kebakaran'
        ]);
    }
}
