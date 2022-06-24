<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class selengaSeeder extends Seeder
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
                "post_name" => 'selenga',
                "razdel_name" => 'Главная страница',
                "img" => 'selenga-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'selenga',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'selenga-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'selenga',
               "razdel_name" => 'Страница генплана',
               "img" => 'selenga-genplan.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'selenga',
               "razdel_name" => 'Презентация',
               "img" => 'selenga-nature-sg.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
