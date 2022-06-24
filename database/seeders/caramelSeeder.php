<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class caramelSeeder extends Seeder
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
                "post_name" => 'caramel',
                "razdel_name" => 'Главная страница',
                "img" => 'caramel-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'caramel',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'caramel-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'caramel',
               "razdel_name" => 'Cтраница каталога',
               "img" => 'caramel-cat.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'caramel',
               "razdel_name" => 'Cтраница товара',
               "img" => 'caramel-tov.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'caramel',
               "razdel_name" => 'Презентация',
               "img" => 'caramel-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'caramel',
               "razdel_name" => 'Презентация',
               "img" => 'caramel-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
