<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class unarmySeeder extends Seeder
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
                "post_name" => 'unarmy',
                "razdel_name" => 'Главная страница',
                "img" => 'unarmy-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'unarmy',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'unarmy-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'unarmy',
               "razdel_name" => 'Презентация',
               "img" => 'unarmy-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'unarmy',
               "razdel_name" => 'Презентация',
               "img" => 'unarmy-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
