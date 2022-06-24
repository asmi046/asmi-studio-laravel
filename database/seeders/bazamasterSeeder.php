<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class bazamasterSeeder extends Seeder
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
                "post_name" => 'bazamaster',
                "razdel_name" => 'Главная страница',
                "img" => 'bazamaster-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
                [
                    "post_name" => 'bazamaster',
                    "razdel_name" => 'Страница каталога',
                    "img" => 'bazamaster-kat.webp',
                    "img_title" => '',
                    "img_alt"  => ''
                ]);

         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'bazamaster',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'bazamaster-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'bazamaster',
               "razdel_name" => 'Презентация',
               "img" => 'bazamaster-nature.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'bazamaster',
               "razdel_name" => 'Презентация',
               "img" => 'bazamaster-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
