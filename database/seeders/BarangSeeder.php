<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [];

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'kategori_id' => rand(1,5), // karena ada 5 kategori
                'barang_kode' => 'BRG' . str_pad($i, 3, '0', STR_PAD_LEFT), // BRG001
                'barang_nama' => 'Barang ' . $i,
                'harga_beli' => rand(5000,10000),
                'harga_jual' => rand(12000,20000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}