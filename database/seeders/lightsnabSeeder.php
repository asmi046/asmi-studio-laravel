<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class lightsnabSeeder extends Seeder
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
                "post_name" => 'lightsnab',
                "razdel_name" => 'Главная страница',
                "img" => 'lightsnab-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'lightsnab',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'lightsnab-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'lightsnab',
               "razdel_name" => 'Презентация',
               "img" => 'lightsnab-nature-1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
