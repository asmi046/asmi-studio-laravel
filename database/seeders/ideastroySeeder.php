<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ideastroySeeder extends Seeder
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
                "post_name" => 'ideastroy',
                "razdel_name" => 'Главная страница',
                "img" => 'ideastroy-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'ideastroy',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'ideastroy-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'ideastroy',
               "razdel_name" => 'Раздел О компании',
               "img" => 'ideastroy-about.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'ideastroy',
               "razdel_name" => 'Раздел Контакты',
               "img" => 'ideastroy-contacts.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'ideastroy',
               "razdel_name" => 'Презентация',
               "img" => 'ideastroy-nature-is.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
