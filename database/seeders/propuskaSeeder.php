<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class propuskaSeeder extends Seeder
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
                "post_name" => 'propuska',
                "razdel_name" => 'Главная страница',
                "img" => 'propuska-screen-pm.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'propuska',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'propuska-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'propuska',
               "razdel_name" => 'Презентация',
               "img" => 'propuska-nature-pm.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
