<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class verbenaSeeder extends Seeder
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
                "post_name" => 'verbena',
                "razdel_name" => 'Главная страница',
                "img" => 'verbena-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'verbena',
                "razdel_name" => 'Страница услуги',
                "img" => 'verbena-usl1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'verbena',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'verbena-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'verbena',
               "razdel_name" => 'Презентация',
               "img" => 'verbena-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'verbena',
               "razdel_name" => 'Презентация',
               "img" => 'verbena-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
