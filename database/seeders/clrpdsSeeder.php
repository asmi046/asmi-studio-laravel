<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class clrpdsSeeder extends Seeder
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
                "post_name" => 'clrpds',
                "razdel_name" => 'Главная страница',
                "img" => 'clrpds-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'clrpds',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'clrpds-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'clrpds',
               "razdel_name" => 'Презентация',
               "img" => 'clrpds-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'clrpds',
               "razdel_name" => 'Презентация',
               "img" => 'clrpds-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
