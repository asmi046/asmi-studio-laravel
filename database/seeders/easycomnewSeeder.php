<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class easycomnewSeeder extends Seeder
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
                "post_name" => 'easycomnew',
                "razdel_name" => 'Главная страница',
                "img" => 'easycomnew-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'easycomnew',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'easycomnew-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'easycomnew',
               "razdel_name" => 'Презентация',
               "img" => 'easycomnew-2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
