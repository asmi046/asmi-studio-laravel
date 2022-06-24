<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class boevaSeeder extends Seeder
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
                "post_name" => 'boeva',
                "razdel_name" => 'Страницы сайта',
                "img" => 'boeva-BD_1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'boeva',
                "razdel_name" => 'Страницы сайта',
                "img" => 'boeva-BD_2.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'boeva',
                "razdel_name" => 'Страницы сайта',
                "img" => 'boeva-BD_3.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'boeva',
                "razdel_name" => 'Страницы сайта',
                "img" => 'boeva-BD_4.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'boeva',
                "razdel_name" => 'Страницы сайта',
                "img" => 'boeva-BD_5.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'boeva',
                "razdel_name" => 'Страницы сайта',
                "img" => 'boeva-BD_7.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'boeva',
                "razdel_name" => 'Страницы сайта',
                "img" => 'boeva-BD_8.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'boeva',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'boeva-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'boeva',
               "razdel_name" => 'Презентация',
               "img" => 'boeva-nature.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
