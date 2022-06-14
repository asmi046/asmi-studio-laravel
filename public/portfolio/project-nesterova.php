<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Сервис по поиску рекламных поверхностей "Nesterova Media" - Asmi-Studio';
	$pageDescription = "Разработка сайта для рекламного агенства наружной рекламы с ыозможностью поиска рекламных поверхностей на карте города.";
	$folder_name = "nesterova";
	$pageImgAdress = $GLOBALS["url"]."/img/portfolio/".$folder_name."/".$folder_name."-present.jpg";
?>

<head>
	<?php include("../head-content.php");?>
</head>

<body class = "inner_page">

	<?php include("../window.php");?>
	
	<?php include("../header-menu.php");?>
	
	<section class = "portfolio_section">
		<div class = "content">
			<div class = "breadcrumbs">
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сервис по поиску рекламных поверхностей "Nesterova Media"
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Корпоративный сайт для компании "Nesterova Media"</h1>
					<p>Представляем Вашему вниманию кейс по разработке гео-сервиса по поиску рекламных поверхностей на карте города. Сервис предоставляет возможность поиска поверхностей по геолокации и по идентификационным номерам. Так же реализована возможность оставлять заказы на бронирование поверхностей.</p>
					<p>
					<span data-form = "Сайт Нестерова медиа" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class = "clrWraper">
					<div class = "colorBlk" style = "background-color:#ee207a;color: white;">#ee207a</div>
					<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class = "colorBlk" style = "background-color:#ffde01;">#ffde01</div>
					<div class = "colorBlk" style = "background-color:#24aee1;color: white;">#24aee1</div>
				</div>
			</div>
			
			
			
			<div class = "center portfolio_all portfolio_image">
				<h2>Главная страница</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-main.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			<div class = "center portfolio_all portfolio_image portfolio_image_many">
				<h2>Информационные блоки</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-main2.<?php global $imgRaz; echo $imgRaz; ?>">
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-main3.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			<div class = "center portfolio_all portfolio_mobile">
				<h2>Адаптация под мобильные устройства</h2>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-mob.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_image portfolio_image_many">
				<h2>Аctually</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>