<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class wegoSeeder extends Seeder
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
                "post_name" => 'wego',
                "razdel_name" => 'Главная страница',
                "img" => 'wego-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'wego',
                "razdel_name" => 'Страница личного кабинета',
                "img" => 'wego-kabinet.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'wego',
                "razdel_name" => 'Страница мероприятия',
                "img" => 'wego-meropriyatiye.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'wego',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'wego-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'wego',
               "razdel_name" => 'Презентация',
               "img" => 'wego-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'wego',
               "razdel_name" => 'Презентация',
               "img" => 'wego-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
