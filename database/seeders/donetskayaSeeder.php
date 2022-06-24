<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class donetskayaSeeder extends Seeder
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
                "post_name" => 'donetskaya',
                "razdel_name" => 'Главная страница',
                "img" => 'donetskaya-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'donetskaya',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'donetskaya-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'donetskaya',
               "razdel_name" => 'Презентация',
               "img" => 'donetskaya-nature.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
