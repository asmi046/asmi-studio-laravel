<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class zasorovNetSeeder extends Seeder
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
                "post_name" => 'zasorovnet',
                "razdel_name" => 'Главная страница',
                "img" => 'zasorovnet-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'zasorovnet',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'zasorovnet-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'zasorovnet',
               "razdel_name" => 'Презентация',
               "img" => 'zasorovnet-nature-zn.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    
    }
}
