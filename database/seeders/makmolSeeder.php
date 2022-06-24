<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class makmolSeeder extends Seeder
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
                "post_name" => 'makmol',
                "razdel_name" => 'Страницы сайта',
                "img" => 'makmol-Scrin-1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'makmol',
                "razdel_name" => 'Страницы сайта',
                "img" => 'makmol-Scrin-2.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'makmol',
                "razdel_name" => 'Страницы сайта',
                "img" => 'makmol-Scrin-3.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'makmol',
                "razdel_name" => 'Страницы сайта',
                "img" => 'makmol-Scrin-4.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'makmol',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'makmol-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'makmol',
               "razdel_name" => 'Презентация',
               "img" => 'makmol-1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'makmol',
               "razdel_name" => 'Презентация',
               "img" => 'makmol-3.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
