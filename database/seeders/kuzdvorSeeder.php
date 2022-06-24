<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class kuzdvorSeeder extends Seeder
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
                "post_name" => 'kuzdvor',
                "razdel_name" => 'Главная страница',
                "img" => 'kuzdvor-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'kuzdvor',
                "razdel_name" => 'Страница каталога',
                "img" => 'kuzdvor-kat.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'kuzdvor',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'kuzdvor-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'kuzdvor',
               "razdel_name" => 'Презентация',
               "img" => 'kuzdvor-nature.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'kuzdvor',
               "razdel_name" => 'Презентация',
               "img" => 'kuzdvor-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
