<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;



class PortfolioPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolio_posts")->insert(
            [
                'name' => 'Сайт каталог для магазина 1-й Военторг',
                'image_folder_name' => '1vtorg',
                'seo_title' => 'Кейс: Сайт каталог для магазина 1-й Военторг - Asmi-Studio',
                'seo_description' => 'Проект по созданию сайта каталога для магазина 1-й Военторг. Разработка сайта магазина, импорт товаров из 1с',
                'content' => 'Разработка сайта-каталога для магазина 1-й Военторг. В ходе данной работы разработан сайт и осуществлен импорт товаров из 1С.',
                'color1' => '#ffcb04',
                'color2' => '#FFFFFF',
                'color3' => '#005d42',
                'color4' => '#c41c35',
                'oblozgka' => 'vt.jpg',
                'page_prev' => '1vtorg-present.webp' 
            ]);

            DB::table("portfolio_posts")->insert(
                [
                    'name' => 'Сайт для сервиса по дитейлингу Автотишина',
                    'image_folder_name' => 'autotish',
                    'seo_title' => 'Кейс: Разработка сайта для сервиса дитейлинга Автотишина - Asmi-Studio',
                    'seo_description' => 'Проект по созданию сайта для сервиса детейлинга Автотишина. Разработка сайта каталога в Курске',
                    'content' => 'В ходе пректа создан корпоративный сайт с рубрицированным каталогом проведенных работ по шумоизоляции автомобилей.',
                    'color1' => '#ff9601',
                    'color2' => '#FFFFFF',
                    'color3' => '#848f92',
                    'color4' => '#144970',
                    'oblozgka' => 'vt.jpg',
                    'page_prev' => 'autotish-obl.webp' 
                ]);

    }
}
