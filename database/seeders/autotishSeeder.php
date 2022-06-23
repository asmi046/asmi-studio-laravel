<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class autotishSeeder extends Seeder
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
                "post_name" => 'autotish',
                "razdel_name" => 'Главная страница',
                "img" => 'autotish-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'autotish',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'autotish-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'zasorovnet',
               "razdel_name" => 'Презентация',
               "img" => 'autotish-nature-1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'zasorovnet',
               "razdel_name" => 'Презентация',
               "img" => 'autotish-nature-2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
