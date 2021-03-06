<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class potapovSeeder extends Seeder
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
                "post_name" => 'potapov',
                "razdel_name" => 'Главная страница',
                "img" => 'potapov-screen1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'potapov',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'potapov-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'potapov',
               "razdel_name" => 'Презентация',
               "img" => 'potapov-nature.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
