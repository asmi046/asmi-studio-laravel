<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class nesterovaSeeder extends Seeder
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
                "post_name" => 'nesterova',
                "razdel_name" => 'Главная страница',
                "img" => 'nesterova-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'nesterova',
                "razdel_name" => 'Информационные блоки',
                "img" => 'nesterova-main2.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'nesterova',
                "razdel_name" => 'Информационные блоки',
                "img" => 'nesterova-main3.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'nesterova',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'nesterova-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'nesterova',
               "razdel_name" => 'Презентация',
               "img" => 'nesterova-nature.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
