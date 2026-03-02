<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        // 10 transaksi
        for ($i = 1; $i <= 10; $i++) {

            // 3 barang per transaksi
            for ($j = 1; $j <= 3; $j++) {

                $data[] = [
                    'penjualan_id' => $i,       // 10 transaksi
                    'barang_id' => rand(1,15),  // 15 barang tersedia
                    'harga' => rand(12000,20000),
                    'jumlah' => rand(1,5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}