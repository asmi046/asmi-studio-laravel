<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class rassaSeeder extends Seeder
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
                "post_name" => 'tabula',
                "razdel_name" => 'Главная страница',
                "img" => 'main-tabula.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'tabula',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'tabula',
               "razdel_name" => 'Презентация',
               "img" => 'nature-tab.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
