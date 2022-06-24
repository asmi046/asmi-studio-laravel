<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class dmSeeder extends Seeder
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
                "post_name" => 'dmlend',
                "razdel_name" => 'Главная страница',
                "img" => 'dmlend-main-dm-lend.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'dmlend',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'dmlend-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'dmlend',
               "razdel_name" => 'Презентация',
               "img" => 'dmlend-nature-dm.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
