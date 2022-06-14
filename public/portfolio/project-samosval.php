<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Посадочная страница для службы доставки "Самосвал 46" - Asmi-Studio';
	$pageDescription = "Разработка сайта для службы доставки, посадочная страница для контекстной рекламы. Разработка сайтов в Курске.";
	$folder_name = "samosval";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сайт для службы доставки "Самосвал 46"
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Сайт для службы доставки Самосвал 46</h1>
					<p>В рамках проекта реализована посадочная страница для приема и конвертации трафика с контекстной рекламы. Реализован механизм динамической подстановки заголовков под конкретное объявление.</p>
					
					<p> <a href ="http://samosval046.ru/">samosval046.ru</a></p>
					
					<p>
					<span data-form = "Сайт Самосвал 46" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class="clrWraper">
					<div class="colorBlk" style="background-color:#fab347;color: #000000;">#fab347</div>
					<div class="colorBlk" style="background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class="colorBlk" style="background-color:#e58c2e;color: white;">#e58c2e</div>
					<div class="colorBlk" style="background-color:#37c22b;color: white;">#37c22b</div>
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
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature-samosval.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>