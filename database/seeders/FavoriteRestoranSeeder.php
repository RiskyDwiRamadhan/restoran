<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoriteRestoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[[
                'id_favorite' =>'01',
                'id_menu' => '1',
                'tangal_favorite' => NOW()
            ],[
                'id_favorite' =>'02',
                'id_menu' => '2',
                'tangal_favorite' => NOW()
            ],[
                'id_favorite' =>'03',
                'id_menu' => '3',
                'tangal_favorite' => NOW()
            ]];
            DB::table('favorite')->insert($data);
    }
}
