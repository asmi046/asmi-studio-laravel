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
                'order' => 0,
                'url' => '',
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
                    'order' => 1,
                    'url' => '',
                    'name' => 'Сайт для сервиса по дитейлингу Автотишина',
                    'image_folder_name' => 'autotish',
                    'seo_title' => 'Кейс: Разработка сайта для сервиса дитейлинга Автотишина - Asmi-Studio',
                    'seo_description' => 'Проект по созданию сайта для сервиса детейлинга Автотишина. Разработка сайта каталога в Курске',
                    'content' => 'В ходе пректа создан корпоративный сайт с рубрицированным каталогом проведенных работ по шумоизоляции автомобилей.',
                    'color1' => '#ff9601',
                    'color2' => '#FFFFFF',
                    'color3' => '#848f92',
                    'color4' => '#144970',
                    'oblozgka' => 'autotish-obl.jpg',
                    'page_prev' => 'autotish-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 2,
                    'url' => '',
                    'name' => 'Cайта для клубного дома "Боева Дача"',
                    'image_folder_name' => 'boeva',
                    'seo_title' => 'Кейс: Концепт презентационного сайта для клубного дома Боева Дача - Asmi-Studio',
                    'seo_description' => 'Разработка дизайна и концепта навигации сайта для клубного дома Боева Дача. Создание сайта компании не дорого.',
                    'content' => 'В рамках проекта был разработан концепт дизайна презентационного сайта клубного дома "Боева Дача". Так же был проработан и реализован принцип напвигации между разделами сайта.',
                    'color1' => '#8a754a',
                    'color2' => '#FFFFFF',
                    'color3' => '#dfba6a',
                    'color4' => '',
                    'oblozgka' => 'boeva-obl.webp',
                    'page_prev' => 'boeva-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 3,
                    'url' => '',
                    'name' => 'Lending Page для продажи реплик наушников CLR PODS',
                    'image_folder_name' => 'clrpds',
                    'seo_title' => 'Кейс: Разработка Lending Page для продажи реплик популярных наушников - Asmi-Studio',
                    'seo_description' => 'Проект по созданию посадочной страницы для продажи реплик TWS наушников. Разработка Lending Page в Курске',
                    'content' => 'В рамках проекта создана посадочная страница для продажи реплик безпроводных наушников под брендом CLR PODS. Конверсия трафика из социальных сетей 7%.',
                    'color1' => '#f8859e',
                    'color2' => '#FFFFFF',
                    'color3' => '#89d0ce',
                    'color4' => '#4aab4d',
                    'oblozgka' => 'clrpds-obl.webp',
                    'page_prev' => 'clrpds-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 4,
                    'url' => '',
                    'name' => 'Посадочная страница - Заправка картриджей ДМ',
                    'image_folder_name' => 'dmlend',
                    'seo_title' => 'Кейс: Посадочная страница "Заправка картриджей ДМ" - Asmi-Studio',
                    'seo_description' => 'Разработка продающей посадочной страницы для сервиса по заправке картриджей компании ДМ. Создание сайтов по выгодным ценам.',
                    'content' => 'В рамках проекта реализована продающая посадочная страница с динамической подстановкой заголовков под конкретное объявление.',
                    'color1' => '#005bae',
                    'color2' => '#FFFFFF',
                    'color3' => '#e4eff5',
                    'color4' => '#292a2c',
                    'oblozgka' => 'dmlend-obl.webp',
                    'page_prev' => 'dmlend-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 5,
                    'url' => '',
                    'name' => 'Посадочная страница для косметолога',
                    'image_folder_name' => 'donetskaya',
                    'seo_title' => 'Кейс: Посадочная страница для косметолога - Asmi-Studio',
                    'seo_description' => 'Разработка посадочной страницы для косметолога Светланы Донецкой.',
                    'content' => 'Посадочная страница для рекламы косметологических услуг. Были проведены работы по разработке сайта и настройке событий Яндекс.Метрики.',
                    'color1' => '#08a28b',
                    'color2' => '#FFFFFF',
                    'color3' => '#e75733',
                    'color4' => '#e3e7ef',
                    'oblozgka' => 'donetskaya-obl.webp',
                    'page_prev' => 'donetskaya-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 6,
                    'url' => '',
                    'name' => 'Сайт сервисного центра Easy Comp 24',
                    'image_folder_name' => 'easycomnew',
                    'seo_title' => 'Кейс: Сайт сервиса по ремонту компютеров "Easy Comp 24" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта для компании оказывающей услуги по ремонту компютеров и ноутбуков. Создание сайтов по выгодным ценам.',
                    'content' => 'В рамках проекта реализован сайт сервиса и произведена техническая SEO оптимизация структуры и страниц сайта.',
                    'color1' => '#6cc72a',
                    'color2' => '#FFFFFF',
                    'color3' => '#28475c',
                    'color4' => '#3a424d',
                    'oblozgka' => 'easycomnew-obl.webp',
                    'page_prev' => 'easycomnew-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 7,
                    'url' => '',
                    'name' => 'Разработка сайта каталога "Энчи-Фарм"',
                    'image_folder_name' => 'enchi',
                    'seo_title' => 'Кейс: Сайт с каталогом продукции "Энчи-Фарм" - Asmi-Studio',
                    'seo_description' => 'Разработка презентационного сайта для оптовой компании с интеграцией каталога товаров. Разработка интернет-магазинов не дорого.',
                    'content' => 'Представляем Вашему вниманию кейс по созданию сайта с каталогом продукции для оптовой компании "Энчи-Фарм". Данный сайт был адаптирован и переведен на Китайский язык.',
                    'color1' => '#214a3c',
                    'color2' => '#FFFFFF',
                    'color3' => '#52B491',
                    'color4' => '#f3f3f5',
                    'oblozgka' => 'enchi-obl.webp',
                    'page_prev' => 'enchi-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 8,
                    'url' => '',
                    'name' => 'Интернет магазин автоэлектроники ЭВАТОН',
                    'image_folder_name' => 'evaton',
                    'seo_title' => 'Кейс: Разработка интернет магазина автоэлектроники ЭВАТОН - Asmi-Studio',
                    'seo_description' => 'Проект по разработке  интернет магазина штатной автомобильной электроники. Разработка интернет магазина в Курске',
                    'content' => 'В рамках проекта создан интернет-магазин по продаже автомобильной электроники и произведена оптимизация и создание посадочных страниц для контекстной рекламы.',
                    'color1' => '#0c77be',
                    'color2' => '#FFFFFF',
                    'color3' => '#abadaf',
                    'color4' => '#3a3a3c',
                    'oblozgka' => 'evaton-obl.webp',
                    'page_prev' => 'evaton-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 9,
                    'url' => '',
                    'name' => 'Сайт консалтинговой группы "ГрандЪ"',
                    'image_folder_name' => 'grand',
                    'seo_title' => 'Кейс: Разработка сайта консалтинговой группы "ГрандЪ" - Asmi-Studio',
                    'seo_description' => 'Создание сайта для консалтинговой группы "ГрандЪ", создание посадочных страниц по выгодной цене',
                    'content' => 'Представляем Вашему вниманию кейс по созданию корпоративного сайта для консалтинговой группы "ГрандЪ".',
                    'color1' => '#c4041c',
                    'color2' => '#FFFFFF',
                    'color3' => '#e0e1e3',
                    'color4' => '#1a1818',
                    'oblozgka' => 'grand-obl.webp',
                    'page_prev' => 'grand-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 10,
                    'url' => '',
                    'name' => 'Сайт строительной компании Идея Строй',
                    'image_folder_name' => 'ideastroy',
                    'seo_title' => 'Кейс: Сайт строительной компании "Идея Строй" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта застройщика соответствующего требованиям законодательства РФ. Создание сайтов по выгодным ценам.',
                    'content' => 'Разработка сайта застройщика соответствующего требованиям законодательства РФ. Информационный сайт описывающий деятельность компании.',
                    'color1' => '#B49F7E',
                    'color2' => '#FFFFFF',
                    'color3' => '#d8df20',
                    'color4' => '#333333',
                    'oblozgka' => 'ideastroy-obl.webp',
                    'page_prev' => 'ideastroy-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 12,
                    'url' => '',
                    'name' => 'Сайт портфолио для компании Интерьерно',
                    'image_folder_name' => 'interierno',
                    'seo_title' => 'Кейс: Сайт портфолио для компании "Интерьерно" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта компании производящей мебель на заказ Интерьерно. Создание сайтов по под ключ.',
                    'content' => 'В рамках проекта реализован сайт для размещения портфолио компании "Интерьерно" которая осуществляет производство корпусной мебели на заказ по индивидуальным проектам.',
                    'color1' => '#33bd3d',
                    'color2' => '#FFFFFF',
                    'color3' => '#D4C528',
                    'color4' => '#333333',
                    'oblozgka' => 'interierno-obl.webp',
                    'page_prev' => 'interierno-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 13,
                    'url' => '',
                    'name' => 'Сайт каталог для кузницы "Кузнечный двор"',
                    'image_folder_name' => 'kuzdvor',
                    'seo_title' => 'Кейс: Сайт каталог для кузницы "Кузнечный двор" - Asmi-Studio',
                    'seo_description' => 'Проект по созданию сайта для кузницы с каталогом продукции и описанием услуг. Создание сайта и поисковая оптимизация.',
                    'content' => 'В рамках данного пректа разработан логотип и дизайн сайта с последующей реализацией. Так же произведено заполнение каталога с последующей поисковой оптимизацией.',
                    'color1' => '#9f7932',
                    'color2' => '#FFFFFF',
                    'color3' => '#bc9452',
                    'color4' => '#e15225',
                    'oblozgka' => 'kd.webp',
                    'page_prev' => 'kuzdvor-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 14,
                    'url' => '',
                    'name' => 'Сайт сервисного центра Easy Comp 24',
                    'image_folder_name' => 'lightsnab',
                    'seo_title' => 'Кейс: Сайт сервиса по ремонту компютеров "Easy Comp 24" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта для компании оказывающей услуги по ремонту компютеров и ноутбуков. Создание сайтов по выгодным ценам.',
                    'content' => 'В рамках проекта реализован сайт сервиса и произведена техническая SEO оптимизация структуры и страниц сайта.',
                    'color1' => '#6cc72a',
                    'color2' => '#FFFFFF',
                    'color3' => '#28475c',
                    'color4' => '#3a424d',
                    'oblozgka' => 'lightsnab-obl.webp',
                    'page_prev' => 'lightsnab-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 15,
                    'url' => '',
                    'name' => 'Корпоративный сайт "Русский ФабрикантЪ"',
                    'image_folder_name' => 'makmol',
                    'seo_title' => 'Кейс: Корпоративный сайт для компании Русский ФабрикантЪ - Asmi-Studio',
                    'seo_description' => 'Проект по разработке корпоративного сайта для группы компаний Русский ФабрикантЪ. Создание сайтов недорого',
                    'content' => 'Разработка корпоративного сайта, настройка навигации и оптимизация для поисковых систем.',
                    'color1' => '#706E60',
                    'color2' => '#FFFFFF',
                    'color3' => '#b5a170',
                    'color4' => '#BE1E2D',
                    'oblozgka' => 'makmol-obl.webp',
                    'page_prev' => 'makmol-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 16,
                    'url' => '',
                    'name' => 'Личный сайт психотерапевта Нины Марченко',
                    'image_folder_name' => 'marhenko',
                    'seo_title' => 'Кейс: Личный сайт психотерапевта Нины Марченко - Asmi-Studio',
                    'seo_description' => 'Разработка сайта для практикующего психотерапевта Нины Марченко. Создание сайтов по выгодным ценам.',
                    'content' => 'В рамках проекта реализован сайт с расписанием мероприятий и описанием практики и квалификации терапфвта. Так же в качестве отдельных разделов реализованы посадочные страницы под психологические туры.',
                    'color1' => '#4fad9d',
                    'color2' => '#FFFFFF',
                    'color3' => '#f47555',
                    'color4' => '#453c3d',
                    'oblozgka' => 'marhenko-obl.webp',
                    'page_prev' => 'marhenko-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 17,
                    'url' => '',
                    'name' => 'Корпоративный сайт для компании "База-Мастер"',
                    'image_folder_name' => 'bazamaster',
                    'seo_title' => 'Кейс: Корпоративный сайт для компании "База-Мастер" - Asmi-Studio',
                    'seo_description' => 'Проект по редизайну корпоративного сайта модернизации каталога продукции и раздела услуг. Сайт компании под ключ.',
                    'content' => 'В ходек проекта осуществлен редизайн сайта модернизация каталога продукции и разработка посадочных страниц в разделе услуги.',
                    'color1' => '#e31e27',
                    'color2' => '#FFFFFF',
                    'color3' => '#a9aaae',
                    'color4' => '#676769',
                    'oblozgka' => 'mast.webp',
                    'page_prev' => 'bazamaster-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 18,
                    'url' => '',
                    'name' => 'Разработка интернет магазина "N-Автоматика"',
                    'image_folder_name' => 'na',
                    'seo_title' => 'Кейс: Разработка интернет-магазина "N-Автоматика" - Asmi-Studio',
                    'seo_description' => 'Разработка корпоративного сайта с интегрированным интернет магазином автоматики для ворот.',
                    'content' => 'Представляем Вашему вниманию кейс по созданию корпоративного сайта с интегрированным интернет - магазином для компании "N-Автоматика".',
                    'color1' => '#00549f',
                    'color2' => '#FFFFFF',
                    'color3' => '#efefef',
                    'color4' => '#414141',
                    'oblozgka' => 'na-obl.webp',
                    'page_prev' => 'na-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 19,
                    'url' => '',
                    'name' => 'Корпоративный сайт для компании "Nesterova Media"',
                    'image_folder_name' => 'nesterova',
                    'seo_title' => 'Кейс: Сервис по поиску рекламных поверхностей "Nesterova Media" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта для рекламного агенства наружной рекламы с ыозможностью поиска рекламных поверхностей на карте города.',
                    'content' => 'Представляем Вашему вниманию кейс по разработке гео-сервиса по поиску рекламных поверхностей на карте города. Сервис предоставляет возможность поиска поверхностей по геолокации и по идентификационным номерам. Так же реализована возможность оставлять заказы на бронирование поверхностей.',
                    'color1' => '#ee207a',
                    'color2' => '#FFFFFF',
                    'color3' => '#ffde01',
                    'color4' => '#24aee1',
                    'oblozgka' => 'nesterova-obl.webp',
                    'page_prev' => 'nesterova-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 20,
                    'url' => '',
                    'name' => 'Презентационный сайт рекламной компании "OnLine - медиа"',
                    'image_folder_name' => 'onlinemedia',
                    'seo_title' => 'Кейс: Презентационный сайт рекламной компании "OnLine - медиа" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта рекламной компании OnLine - медиа. Разработка сайтов для бизнеса, поисковая оптимизация.',
                    'content' => 'Проект по созданию сайта (посадочной страницы) для рекламной компании  "OnLine - медиа". В рамках проекта разработан фирменный знак, проработаны дизайн и наполнение сайта.',
                    'color1' => '#fd2f3c',
                    'color2' => '#FFFFFF',
                    'color3' => '#e8e9ed',
                    'color4' => '#313131',
                    'oblozgka' => 'onlinemedia-obl.webp',
                    'page_prev' => 'onlinemedia-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 21,
                    'url' => '',
                    'name' => 'Сайт для ведущего Potapov-Official',
                    'image_folder_name' => 'potapov',
                    'seo_title' => 'Кейс: Сайт для профессионального ведущего "PotapovOfficial" - Asmi-Studio',
                    'seo_description' => 'Проект по созданию презентационного сайта для ведущего. Разработка сайтов и посадочных страниц.',
                    'content' => 'Разработка сайт для профессионального ведущего. Посадочная страница для контекстной рекламы и трафика из поисковых систем.',
                    'color1' => '#c51e3a',
                    'color2' => '#FFFFFF',
                    'color3' => '#333333',
                    'color4' => '',
                    'oblozgka' => 'potapov-obl.webp',
                    'page_prev' => 'potapov-present.webp' 
                ]);


            DB::table("portfolio_posts")->insert(
                [
                    'order' => 23,
                    'url' => '',
                    'name' => 'Сайт сервиса Пропуска МКАД',
                    'image_folder_name' => 'propuska',
                    'seo_title' => 'Кейс: Сайт сервиса по заказу пропусков "Пропуска МКАД" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта для сервиса по получению и проверке действия пропусков в Москву. Создание сайтов под ключ.',
                    'content' => 'В рамках проекта реализована продающая просадочная страница и подключено API проверки пропусков в москву с их последующим заказом.',
                    'color1' => '#ffc40a',
                    'color2' => '#FFFFFF',
                    'color3' => '#424244',
                    'color4' => '#e8e9eb',
                    'oblozgka' => 'propuska-obl.webp',
                    'page_prev' => 'propuska-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 24,
                    'url' => '',
                    'name' => 'Сайт эстетически-образовательного конкурса Самая Самая',
                    'image_folder_name' => 'samaya',
                    'seo_title' => 'Кейс: Разработка сайта по продаже франшиз конкурса Самая Самая - Asmi-Studio',
                    'seo_description' => 'Проект по разработке  сайта для продажи франшиз на эстетически-образовательный конкурс. Разработка посадочных страниц в Курске',
                    'content' => 'В рамках проекта создана Посадочная страница для продажи франшиз. Сраница создавалась для презентации на тематических мероприятиях и конверсии трафика с контекстной рекламы и социальных сетей.',
                    'color1' => '#db204f',
                    'color2' => '#FFFFFF',
                    'color3' => '#e1e6ed',
                    'color4' => '#caa550',
                    'oblozgka' => 'samaya-obl.webp',
                    'page_prev' => 'samaya-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 25,
                    'url' => '',
                    'name' => 'Сайт для службы доставки Самосвал 46',
                    'image_folder_name' => 'samosval',
                    'seo_title' => 'Кейс: Посадочная страница для службы доставки "Самосвал 46" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта для службы доставки, посадочная страница для контекстной рекламы. Разработка сайтов в Курске.',
                    'content' => 'В рамках проекта реализована посадочная страница для приема и конвертации трафика с контекстной рекламы. Реализован механизм динамической подстановки заголовков под конкретное объявление.',
                    'color1' => '#fab347',
                    'color2' => '#FFFFFF',
                    'color3' => '#e58c2e',
                    'color4' => '#37c22b',
                    'oblozgka' => 'samosval-obl.webp',
                    'page_prev' => 'samosval-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 26,
                    'url' => '',
                    'name' => 'Сайт коттеджного поселка Селенга',
                    'image_folder_name' => 'selenga',
                    'seo_title' => 'Кейс: Сайт коттеджного поселка "Селенга" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта коттеджного поселка Селенга. Создание сайтов по выгодным ценам.',
                    'content' => 'В рамках проектаразработан сайт коттеджного поселка на котором размещена основная информация и интерактивная карта показывающая расположение участков под продажу.',
                    'color1' => '#76be43',
                    'color2' => '#FFFFFF',
                    'color3' => '#8865ac',
                    'color4' => '#817272',
                    'oblozgka' => 'selenga-obl.webp',
                    'page_prev' => 'selenga-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 27,
                    'url' => '',
                    'name' => 'Сайт Tabula Rassa - банкротство физлиц',
                    'image_folder_name' => 'tabula',
                    'seo_title' => 'Кейс: Сайт Tabula Rassa - банкротство физлиц - Asmi-Studio',
                    'seo_description' => 'Посадочная страница для рекламы услуг по банкротству физических лиц. Были проведены работы по разработке сайта и настройке событий Яндекс.Метрики.',
                    'content' => 'Посадочная страница для рекламы услуг по банкротству физических лиц. Были проведены работы по разработке сайта и настройке событий Яндекс.Метрики.',
                    'color1' => '#be1e2d',
                    'color2' => '#FFFFFF',
                    'color3' => '#e8e9ed',
                    'color4' => '#37363b',
                    'oblozgka' => 'tabula-obl.webp',
                    'page_prev' => 'present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 28,
                    'url' => '',
                    'name' => 'Интернет магазин кадетской формы Юнармия 46',
                    'image_folder_name' => 'unarmy',
                    'seo_title' => 'Кейс: Интернет магазин кадетской формы Юнармия 46  - Asmi-Studio',
                    'seo_description' => 'Проект по разработке интернет-магазина по продаже кадетской формы. Разработка интернет-магазина в Курске',
                    'content' => 'В рамках проекта создан интернет магазин по продаже кадетской форм с возможностью закза индивидуального пошива',
                    'color1' => '#c3281b',
                    'color2' => '#FFFFFF',
                    'color3' => '#d3d3d3',
                    'color4' => '#292929',
                    'oblozgka' => 'unarmy-obl.webp',
                    'page_prev' => 'unarmy-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 29,
                    'url' => '',
                    'name' => 'Сайт клиники "Verbena"',
                    'image_folder_name' => 'verbena',
                    'seo_title' => 'Кейс: Сайт клиники эстетической косметологии "Verbena" - Asmi-Studio',
                    'seo_description' => 'Разработка сайта клиники "Verbena", реализация каталога услуг, поиска, quiz - опроса. Разработка корпоративных сайтов',
                    'content' => 'Представляем Вашему вниманию кейс по созданию сайта для клиники эстетической косметологии "Verbena". В рамках проекта реализован корпоративный сайт с каталогом и подробным описанием услуг, внедрен quiz - опрос и настроенна интеграция с CRM - системой.',
                    'color1' => '#84cc3a',
                    'color2' => '#FFFFFF',
                    'color3' => '#fcedea',
                    'color4' => '#f3f3f5',
                    'oblozgka' => 'verbena-obl.webp',
                    'page_prev' => 'verbena-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 30,
                    'url' => '',
                    'name' => 'Разработка сайта для проекта "We-Go"',
                    'image_folder_name' => 'wego',
                    'seo_title' => 'Кейс: Разработка сайта для проекта "We-Go" - Asmi-Studio',
                    'seo_description' => 'Создание сайта для проекта по организации вечеринок в новом формате We-Go. Разработка посадочных страниц выгодно.',
                    'content' => 'Представляем Вашему вниманию кейс по созданию сайта для проекта "We-Go". В рамках проекта реализована возможность регистрации посетителей через социальные сети и управления своими данными из личного кабинета.',
                    'color1' => '#ff008e',
                    'color2' => '#FFFFFF',
                    'color3' => '#1b24ff',
                    'color4' => '#231f20',
                    'oblozgka' => 'wego-obl.webp',
                    'page_prev' => 'wego-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 31,
                    'url' => '',
                    'name' => 'Сайта для компании Засоров Нет',
                    'image_folder_name' => 'zasorovnet',
                    'seo_title' => 'Проект по разработке сайта для компании "ZasorovNet" - Asmi-Studio',
                    'seo_description' => 'Кейс по разработке сайта для компании оказывающей услуги по прочистке канализаций. Качественные сайты недорого у нас.',
                    'content' => 'Сайт компании оказывающей услуги по прочистке канализаций. На сайте представлен полный перечень услуг компании с подробным описанием.',
                    'color1' => '#0076c0',
                    'color2' => '#FFFFFF',
                    'color3' => '#f3f3f5',
                    'color4' => '#37363b',
                    'oblozgka' => 'zasorovnet-obl.webp',
                    'page_prev' => 'zasorovnet-present.webp' 
                ]);

            DB::table("portfolio_posts")->insert(
                [
                    'order' => 32,
                    'url' => '',
                    'name' => 'Разработка сайта магазина Карамельная мануфактура',
                    'image_folder_name' => 'caramel',
                    'seo_title' => 'Кейс: Разработка сайта авторской мастерской Карамельная Мануфактура - Asmi-Studio',
                    'seo_description' => 'Проект по созданию сайта для магазина карамели ручной работы Карамельная Мануфактура. Разработка интернет-магазина в Курске',
                    'content' => 'В рамках проекта создан сайт компании на котором размещена информация о деятельности и добавлен раздел с интернет магазином карамели ручной работы.',
                    'color1' => '#f03c8e',
                    'color2' => '#FFFFFF',
                    'color3' => '#2caac0',
                    'color4' => '#bfe4ea',
                    'oblozgka' => 'caramel-obl.webp',
                    'page_prev' => 'caramel-present.webp' 
                ]);
    }
}
