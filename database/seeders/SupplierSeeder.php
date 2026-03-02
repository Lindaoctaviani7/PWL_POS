<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            ['supplier_id' => 1, 'supplier_kode' => 'S001', 'supplier_nama' => 'PT. Sumber Rejeki', 'supplier_alamat' => 'Jl. Merdeka No. 123, Jakarta', 'supplier_telp' => '081234567890'],
            ['supplier_id' => 2, 'supplier_kode' => 'S002', 'supplier_nama' => 'CV. Maju Jaya', 'supplier_alamat' => 'Jl. Sudirman No. 456, Bandung', 'supplier_telp' => '082345678901'],
            ['supplier_id' => 3, 'supplier_kode' => 'S003', 'supplier_nama' => 'PT. Sejahtera Abadi', 'supplier_alamat' => 'Jl. Gatot Subroto No. 789, Surabaya', 'supplier_telp' => '083456789012'],
            ['supplier_id' => 4, 'supplier_kode' => 'S004', 'supplier_nama' => 'CV. Sukses Makmur', 'supplier_alamat' => 'Jl. Diponegoro No. 321, Yogyakarta', 'supplier_telp' => '084567890123'],
            ['supplier_id' => 5, 'supplier_kode' => 'S005', 'supplier_nama' => 'PT. Gemilang Bersama', 'supplier_alamat' => 'Jl. Ahmad Yani No. 654, Medan', 'supplier_telp' => '085678901234'],
        ]);
    }
}
