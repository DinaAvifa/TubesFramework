<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'kode_produk' => 'MK-1',
                'nama_produk' => 'Flower ',
                'price' => '15000',
                'jenis_id' => 1,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MK-2',
                'nama_produk' => 'Pink Flower ',
                'price' => '15000',
                'jenis_id' => 1,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MK-3',
                'nama_produk' => 'white Butterfly ',
                'price' => '15000',
                'jenis_id' => 1,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MC-1',
                'nama_produk' => 'Pearl Butterfly ',
                'price' => '15000',
                'jenis_id' => 2,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MC-2',
                'nama_produk' => 'Pink Butterfly ',
                'price' => '1000',
                'jenis_id' => 2,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MC-3',
                'nama_produk' => 'Contoh Produk ',
                'price' => '1000',
                'jenis_id' => 2,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MG-1',
                'nama_produk' => 'Contoh Produk ',
                'price' => '1000',
                'jenis_id' => 3,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MG-2',
                'nama_produk' => 'Contoh Produk ',
                'price' => '1000',
                'jenis_id' => 3,
                'description' => 'deskripsi',
            ],
            [
                'kode_produk' => 'MG-3',
                'nama_produk' => 'Contoh Produk ',
                'price' => '1000',
                'jenis_id' => 3,
                'description' => 'deskripsi',
            ],
        ]);
    }
}
