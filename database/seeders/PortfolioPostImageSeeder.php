<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PortfolioPostImageSeeder extends Seeder
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
                "portfolio_post_id" => '',
                "post_name" => '1vtorg',
                "razdel_name" => 'Главная страница',
                "img" => '1vtorg-main.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
        
        DB::table("portfolio_post_images")->insert(
            [
                "portfolio_post_id" => '',
                "post_name" => '1vtorg',
                "razdel_name" => 'Адаптация под мобильные устройства',
                "img" => '1vtorg-mob.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
            
        DB::table("portfolio_post_images")->insert(
            [
                "portfolio_post_id" => '',
                "post_name" => '1vtorg',
                "razdel_name" => 'Презентация',
                "img" => '1vtorg-nature-1.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);

        DB::table("portfolio_post_images")->insert(
            [
                "portfolio_post_id" => '',
                "post_name" => '1vtorg',
                "razdel_name" => 'Презентация',
                "img" => '1vtorg-nature-2.webp',
                "img_title" => '',
                "img_alt"  => ''
            ]);
    }
}
