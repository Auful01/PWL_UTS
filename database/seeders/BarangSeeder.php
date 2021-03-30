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
        DB::table('barangs')->insert([[
                'kode_barang' => 'BR001',
                'nama_barang' => 'Mie Sedap',
                'kategori_barang' => 'Makanan',
                'harga' => 2500,
                'qty' => 100
            ],[
                'kode_barang' => 'BR002',
                'nama_barang' => 'Mizone',
                'kategori_barang' => 'Minuman',
                'harga' => 3500,
                'qty' => 120
            ],[
                'kode_barang' => 'BR003',
                'nama_barang' => 'Sukro',
                'kategori_barang' => 'Snack',
                'harga' => 2500,
                'qty' => 200
            ],[
                'kode_barang' => 'BR004',
                'nama_barang' => 'Semangka',
                'kategori_barang' => 'Buah',
                'harga' => 10000,
                'qty' => 70
            ],[
                'kode_barang' => 'BR005',
                'nama_barang' => 'Indomie',
                'kategori_barang' => 'Makanan',
                'harga' => 3500,
                'qty' => 100
            ],[
                'kode_barang' => 'BR006',
                'nama_barang' => 'Cimory',
                'kategori_barang' => 'Minuman',
                'harga' => 6500,
                'qty' => 120
            ],[
                'kode_barang' => 'BR007',
                'nama_barang' => 'Kacang Garuda',
                'kategori_barang' => 'Snack',
                'harga' => 8000,
                'qty' => 130
            ],[
                'kode_barang' => 'BR008',
                'nama_barang' => 'nanas',
                'kategori_barang' => 'Buah',
                'harga' => 12000,
                'qty' => 50
            ],[
                'kode_barang' => 'BR009',
                'nama_barang' => 'Mie burung dara',
                'kategori_barang' => 'Makanan',
                'harga' => 5000,
                'qty' => 100
            ],[
                'kode_barang' => 'BR0010',
                'nama_barang' => 'sprite',
                'kategori_barang' => 'Minuman',
                'harga' => 3500,
                'qty' => 120
            ],[
                'kode_barang' => 'BR011',
                'nama_barang' => 'happy toss',
                'kategori_barang' => 'Snack',
                'harga' => 9500,
                'qty' => 80
            ],[
                'kode_barang' => 'BR0012',
                'nama_barang' => 'nangka',
                'kategori_barang' => 'Buah',
                'harga' => 18000,
                'qty' => 30
            ]]);
    }
}
