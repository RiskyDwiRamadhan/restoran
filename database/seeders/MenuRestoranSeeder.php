<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuRestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
            'id_menu' => '1',
            'nama_menu' =>'Nasi Bakar Ayam',
            'harga_menu' => '16000',
            'jenis_menu' => 'makanan',
            'deskripsi' => 'Nasi bakar dengan campuran potongan ayam yang dibungkus dengan daun pisang',
            'image' => ''
        ],[
            'id_menu' => '2',
            'nama_menu' =>'Nasi Bakar Tongkol',
            'harga_menu' => '16000',
            'jenis_menu' => 'makanan',
            'deskripsi' => 'Nasi bakar dengan campuran potongan ikan tongkol yang dibungkus dengan daun pisang',
            'image' => ''
        ],[
            'id_menu' => '3',
            'nama_menu' =>'Nasi Bakar Cumi',
            'harga_menu' => '18000',
            'jenis_menu' => 'makanan',
            'deskripsi' => 'Nasi bakar dengan campuran potongan cumi-cumi yang dibungkus dengan daun pisang',
            'image' => ''
        ],[
            'id_menu' => '4',
            'nama_menu' =>'Ayam Kremes',
            'harga_menu' => '17000',
            'jenis_menu' => 'makanan',
            'deskripsi' => 'Ayam goreng yang digoreng dengan tepung dan dilumuri sambal diatasnya',
            'image' => ''
        ],[
            'id_menu' => '5',
            'nama_menu' =>'Es Jeruk',
            'harga_menu' => '8000',
            'jenis_menu' => 'minuman',
            'deskripsi' => 'es jeruk segar',
            'image' => ''
        ],[
            'id_menu' => '7',
            'nama_menu' =>'Es Teh',
            'harga_menu' => '8000',
            'jenis_menu' => 'minuman',
            'deskripsi' => 'es teh segar',
            'image' => ''
        ],[
            'id_menu' => '6',
            'nama_menu' =>'Es Homy',
            'harga_menu' => '10000',
            'jenis_menu' => 'minuman',
            'deskripsi' => '',
            'image' => ''
        ],[
            'id_menu' => '8',
            'nama_menu' =>'Es Coklat',
            'harga_menu' => '8000',
            'jenis_menu' => 'minuman',
            'deskripsi' => '',
            'image' => ''
        ]           
    ];
    DB::table('menu')->insert($data);
    }
}
