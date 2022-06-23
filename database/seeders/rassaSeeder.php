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
                "img" => 'tabula-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'tabula',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'tabula-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'zasorovnet',
               "razdel_name" => 'Презентация',
               "img" => 'tabula-nature-tab.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
