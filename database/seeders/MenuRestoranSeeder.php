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
            'nama_menu' =>'Sate Lilit',
            'harga_menu' => '15000',
            'jenis_menu' => 'makanan',
            'deskripsi' => 'Sate lilit adalah sate khas Bali yang terbuat dari ayam, udang, dan dicampurkan dengan bumbu yang kaya rempah-rempah. Serta menggunakan sereh untuk tusuk satenya.',
            'image' => '/template/images/satelilit.jpg'
        ],[
            'id_menu' => '2',
            'nama_menu' =>'Sate Tempe',
            'harga_menu' => '15000',
            'jenis_menu' => 'makanan',
            'deskripsi' => 'Sate tempe merupakan makanan berbahan dasar tempe yang terbuat dari kedelai fermentasi. Diolah seperti pembuatan sate.',
            'image' => '/template/images/satetempe.jpg'
        ],[
            'id_menu' => '3',
            'nama_menu' =>'Es Kelapa Muda',
            'harga_menu' => '10000',
            'jenis_menu' => 'minuman',
            'deskripsi' => 'Es kelapa muda adalah minuman yang menyegarkan, terbuat dari air kelapa muda dan diberikan topping daging buah kelapa yang lembut.',
            'image' => '/template/images/es degan.png'
        ],[
            'id_menu' => '4',
            'nama_menu' =>'Es Teh',
            'harga_menu' => '5000',
            'jenis_menu' => 'minuman',
            'deskripsi' => 'es teh segar',
            'image' => '/template/images/teh.jpg'
        ],[
            'id_menu' => '5',
            'nama_menu' =>'Es Jeruk',
            'harga_menu' => '5000',
            'jenis_menu' => 'minuman',
            'deskripsi' => 'es jeruk segar',
            'image' => '/template/images/es jeruk.jpg'
        ]    
    ];
    DB::table('menu')->insert($data);
    }
}
