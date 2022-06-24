<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class samayaSeeder extends Seeder
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
                "post_name" => 'samaya',
                "razdel_name" => 'Главная страница',
                "img" => 'samaya-main1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "post_name" => 'samaya',
                "razdel_name" => 'Главная страница',
                "img" => 'samaya-main1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'samaya',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'samaya-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'samaya',
               "razdel_name" => 'Презентация',
               "img" => 'samaya-nature1.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'samaya',
               "razdel_name" => 'Презентация',
               "img" => 'samaya-nature2.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);
    }
}
