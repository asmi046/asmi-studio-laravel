<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class interiernoSeeder extends Seeder
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
                "post_name" => 'interierno',
                "razdel_name" => 'Главная страница',
                "img" => 'interierno-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'interierno',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'interierno-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'interierno',
               "razdel_name" => 'Презентация',
               "img" => 'interierno-natur-inter.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
