<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class evatonSeeder extends Seeder
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
                "post_name" => 'evaton',
                "razdel_name" => 'Главная страница',
                "img" => 'evaton-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'evaton',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'evaton-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

             DB::table("portfolio_post_images")->insert(
                [
                    "post_name" => 'evaton',
                    "razdel_name" => 'Страница каталога',
                    "img" => 'evaton-cat.webp',
                    "img_title" => '',
                    "img_alt"  => ''
                ]);
    

             DB::table("portfolio_post_images")->insert(
                [
                    "post_name" => 'evaton',
                    "razdel_name" => 'Страница продукта',
                    "img" => 'evaton-prod.webp',
                    "img_title" => '',
                    "img_alt"  => ''
                ]);
    

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'evaton',
               "razdel_name" => 'Презентация',
               "img" => 'evaton-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
