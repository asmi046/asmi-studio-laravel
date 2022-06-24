<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class grandSeeder extends Seeder
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
                "post_name" => 'grand',
                "razdel_name" => 'Главная страница',
                "img" => 'grand-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'grand',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'grand-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'grand',
               "razdel_name" => 'Презентация',
               "img" => 'grand-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'grand',
               "razdel_name" => 'Презентация',
               "img" => 'grand-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
