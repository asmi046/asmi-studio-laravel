<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Сайт портфолио для компании "Интерьерно" - Asmi-Studio';
	$pageDescription = "Разработка сайта компании производящей мебель на заказ Интерьерно. Создание сайтов по под ключ.";
	$folder_name = "interierno";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сайт портфолио для компании "Интерьерно"
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Сайт портфолио для компании Интерьерно</h1>
					<p>В рамках проекта реализован сайт для размещения портфолио компании "Интерьерно" которая осуществляет производство корпусной мебели на заказ по индивидуальным проектам.</p>
					
					<p><a href = "https://portfolio.interierno.com/">portfolio.interierno.com</a></p>
					
					<p>
					<span data-form = "Сайт Интерьерно" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class="clrWraper">
					<div class="colorBlk" style="background-color:#33bd3d; color: white;">#33bd3d</div>
					<div class="colorBlk" style="background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class="colorBlk" style="background-color:#D4C528; color: white;">#D4C528</div>
					<div class="colorBlk" style="background-color:#333333; color: white;">#333333</div>
				</div>
			</div>
			
			
			
			<div class = "center portfolio_all portfolio_image">
				<h2>Главная страница</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-main.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			<div class = "center portfolio_all portfolio_mobile">
				<h2>Адаптация под мобильные устройства</h2>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-mob.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
		
			
			<div class = "center portfolio_all portfolio_image portfolio_image_many">
				<h2>Аctually</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-natur-inter.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>