<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MejaRestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
                'id_meja' =>'01',
                'no_meja' => '1',
                'kapasitas' => '6',
                'status_meja' => 'kosong',
                'image' => '/template/images/1.png'
            ],[
                'id_meja' =>'02',
                'no_meja' => '2',
                'kapasitas' => '6',
                'status_meja' => 'kosong',
                'image' => '/template/images/2.jpg'
            ],[
                'id_meja' =>'03',
                'no_meja' => '3',
                'kapasitas' => '4',
                'status_meja' => 'kosong',
                'image' => '/template/images/3.jpg'
            ],[
                'id_meja' =>'04',
                'no_meja' => '4',
                'kapasitas' => '4',
                'status_meja' => 'kosong',
                'image' => '/template/images/4.jpg'
            ],[
                'id_meja' =>'05',
                'no_meja' => '5',
                'kapasitas' => '5',
                'status_meja' => 'kosong',
                'image' => '/template/images/5.jpg'
            ],[
                'id_meja' =>'06',
                'no_meja' => '6',
                'kapasitas' => '5',
                'status_meja' => 'kosong',
                'image' => '/template/images/6.png'
            ]];
            DB::table('meja')->insert($data);
    }
}
