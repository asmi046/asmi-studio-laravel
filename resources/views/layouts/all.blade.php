<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        <meta name="description" content="@yield('description')">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="canonical" href="" />
        <meta property="og:locale" content="ru_RU" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:site_name" content="Asmi-Studio - разработка сайтов" />

        <meta property="og:image" content="@yield('img_url')" />
        <meta property="og:image:secure_url" content="@yield('img_url')" />
        <meta property="og:image:alt" content="@yield('title')" />

        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#F7F7F7">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#F7F7F7">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#F7F7F7">


        <link rel="apple-touch-icon" sizes="256x256" href="/img/favicon/icon256.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/icon32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/icon16.png">
        <link rel="mask-icon" href="/img/logo-mini.svg" color="#FFFFFF">
        <meta name="theme-color" content="#F7F7F7">

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(14710126, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                trackHash:true
            });
        </script>
        <noscript><div><img src="https://mc.yandex.ru/watch/14710126" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        @vite([
                'public/scss/main.scss',
                'resources/css/app.css',
                'resources/js/app.js',
        ])
    </head>
    <body>
        @include('parts.popup')
        @include('parts.header_menu')

        @yield('content')

        @include('parts.footer')
    </body>
</html>
