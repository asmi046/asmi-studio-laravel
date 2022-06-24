<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class marhenkoSeeder extends Seeder
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
                "post_name" => 'marhenko',
                "razdel_name" => 'Главная страница',
                "img" => 'marhenko-Screen-1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'marhenko',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'marhenko-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);
        
        DB::table("portfolio_post_images")->insert(
                [
                    "post_name" => 'marhenko',
                    "razdel_name" => 'Страница блога',
                    "img" => 'marhenko-Screen-2.webp',
                    "img_title" => '',
                    "img_alt"  => ''
                ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'marhenko',
               "razdel_name" => 'Презентация',
               "img" => 'marhenko-nature_NM.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
