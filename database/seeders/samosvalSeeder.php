<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class samosvalSeeder extends Seeder
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
                "post_name" => 'samosval',
                "razdel_name" => 'Главная страница',
                "img" => 'samosval-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
         DB::table("portfolio_post_images")->insert(
             [
                 "post_name" => 'samosval',
                 "razdel_name" => 'Адаптация под мобильные устройства',
                 "img" => 'samosval-mob.webp',
                 "img_title" => '',
                 "img_alt"  => ''
             ]);

        DB::table("portfolio_post_images")->insert(
           [
               "post_name" => 'samosval',
               "razdel_name" => 'Презентация',
               "img" => 'samosval-nature-samosval.webp',
               "img_title" => '',
               "img_alt"  => ''
           ]);

    }
}
