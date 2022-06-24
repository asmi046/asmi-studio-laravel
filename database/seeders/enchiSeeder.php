<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class enchiSeeder extends Seeder
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
                "post_name" => 'enchi',
                "razdel_name" => 'Главная страница',
                "img" => 'enchi-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);


        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'enchi',
                "razdel_name" => 'Страница каталога',
                "img" => 'enchi-cat.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'enchi',
                "razdel_name" => 'Страница услуги',
                "img" => 'enchi-produkt.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'enchi',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'enchi-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'enchi',
               "razdel_name" => 'Презентация',
               "img" => 'enchi-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'enchi',
               "razdel_name" => 'Презентация',
               "img" => 'enchi-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
