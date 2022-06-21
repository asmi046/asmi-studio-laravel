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
                'oblozgka' => '1vtorg-present.webp',
                'page_prev' => 'vt.jpg' 
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

            DB::table("portfolio_posts")->insert(
                [
                    'name' => 'Cайта для клубного дома "Боева Дача"',
                    'image_folder_name' => 'boeva',
                    'seo_title' => 'Кейс: Концепт презентационного сайта для клубного дома Боева Дача - Asmi-Studio',
                    'seo_description' => 'Разработка дизайна и концепта навигации сайта для клубного дома Боева Дача. Создание сайта компании не дорого.',
                    'content' => 'В рамках проекта был разработан концепт дизайна презентационного сайта клубного дома "Боева Дача". Так же был проработан и реализован принцип напвигации между разделами сайта.',
                    'color1' => '#8a754a',
                    'color2' => '#FFFFFF',
                    'color3' => '#dfba6a',
                    'color4' => '',
                    'oblozgka' => '',
                    'page_prev' => 'boeva-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'name' => 'Lending Page для продажи реплик наушников CLR PODS',
                    'image_folder_name' => 'clrpds',
                    'seo_title' => 'Кейс: Разработка Lending Page для продажи реплик популярных наушников - Asmi-Studio',
                    'seo_description' => 'Проект по созданию посадочной страницы для продажи реплик TWS наушников. Разработка Lending Page в Курске',
                    'content' => 'В рамках проекта создана посадочная страница для продажи реплик безпроводных наушников под брендом CLR PODS. Конверсия трафика из социальных сетей 7%.',
                    'color1' => '#f8859e',
                    'color2' => '#FFFFFF',
                    'color3' => '#89d0ce',
                    'color4' => '#4aab4d',
                    'oblozgka' => '',
                    'page_prev' => 'clrpds-present.webp' 
                ]);

    }
}
