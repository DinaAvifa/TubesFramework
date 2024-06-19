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
                'kode_produk' => 'MG-1',
                'nama_produk' => 'Flower Shells ',
                'price' => '15000',
                'jenis_id' => 1,
                'description' => 'Gelang manik-manik dengan model bunga, kerang, bintang dan mutiara ',
            ],
            [
                'kode_produk' => 'MG-2',
                'nama_produk' => 'Pink Flower ',
                'price' => '15000',
                'jenis_id' => 1,
                'description' => 'Gelang manik-manik yang berwarna pink dengan hint bunga pink ',
            ],
            [
                'kode_produk' => 'MG-3',
                'nama_produk' => 'white Butterfly ',
                'price' => '15000',
                'jenis_id' => 1,
                'description' => 'Gelang manik-manik berwarna putih dengan hint kupu-kupu putih ',
            ],
            [
                'kode_produk' => 'MC-1',
                'nama_produk' => 'Pearl Butterfly ',
                'price' => '15000',
                'jenis_id' => 2,
                'description' => 'Gelang mani-manik yang terdiri dari bentuk mutiara dan kupu-kupu ',
            ],
            [
                'kode_produk' => 'MC-2',
                'nama_produk' => 'Pink Butterfly ',
                'price' => '15000',
                'jenis_id' => 2,
                'description' => 'Gelang manik-manik yang berwarna pink dengan hint kupu-kupu ',
            ],
            [
                'kode_produk' => 'MC-3',
                'nama_produk' => 'White Floral  ',
                'price' => '10000',
                'jenis_id' => 2,
                'description' => 'Cincin dengan warna yang menarik dengan pembelian 10000/3pcs',
            ],
            [
                'kode_produk' => 'MK-1',
                'nama_produk' => 'Alexis Necklace ',
                'price' => '35000',
                'jenis_id' => 3,
                'description' => 'Kalung manik-manik yang terdiri dari mutiara, bintang, dan memiliki hint pita besar',
            ],
            [
                'kode_produk' => 'MK-2',
                'nama_produk' => 'Keyra Necklace ',
                'price' => '35000',
                'jenis_id' => 3,
                'description' => 'Kalung manik-manik yang berbentuk renda-renda berwarna putih dengan sentuhan warna pink',
            ],
            [
                'kode_produk' => 'MK-3',
                'nama_produk' => 'Katty Necklace ',
                'price' => '335000',
                'jenis_id' => 3,
                'description' => 'Kalung manik-manik yang berbentuk gelombang yang berwarna biru dengan sentuhan warna putih',
            ],
        ]);
    }
}
