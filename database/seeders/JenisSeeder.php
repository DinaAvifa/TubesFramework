<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis')->insert([
            [
                'code' => 'MK',
                'name' => 'Kalung',
                'description' => ''
            ],
            [
                'code' => 'MC',
                'name' => 'Cincin',
                'description' => ''
            ],
            [
                'code' => 'MG',
                'name' => 'Gelang',
                'description' => ''
            ],
        ]);
    }
}
