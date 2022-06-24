<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class onlinemediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'onlinemedia',
                "razdel_name" => 'Главная страница',
                "img" => 'onlinemedia-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'onlinemedia',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'onlinemedia-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'onlinemedia',
               "razdel_name" => 'Презентация',
               "img" => 'onlinemedia-nature.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
