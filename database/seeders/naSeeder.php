<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class naSeeder extends Seeder
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
                "post_name" => 'na',
                "razdel_name" => 'Главная страница',
                "img" => 'na-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'na',
                "razdel_name" => 'Страница каталога',
                "img" => 'na-cat.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'na',
                "razdel_name" => 'Страница товара',
                "img" => 'na-tov.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'na',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'na-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'na',
               "razdel_name" => 'Презентация',
               "img" => 'na-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'na',
               "razdel_name" => 'Презентация',
               "img" => 'na-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
