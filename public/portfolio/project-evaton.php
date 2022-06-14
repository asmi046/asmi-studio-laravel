<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = "Кейс: Разработка интернет магазина автоэлектроники ЭВАТОН - Asmi-Studio";
	$pageDescription = "Проект по разработке  интернет магазина штатной автомобильной электроники. Разработка интернет магазина в Курске";
	$folder_name = "evaton";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Интернет магазин ЭВАТОН
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Интернет магазин автоэлектроники ЭВАТОН</h1>
					<p>В рамках проекта создан интернет-магазин по продаже автомобильной электроники и произведена оптимизация и создание посадочных страниц для контекстной рекламы.</p>
					<p>
					<span data-form = "Сайт Эватон" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class = "clrWraper">
					<div class = "colorBlk" style = "background-color:#0c77be; color: white;">#0c77be</div>
					<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class = "colorBlk" style = "background-color:#abadaf;color: #FFFFFF;">#abadaf</div>
					<div class = "colorBlk" style = "background-color:#3a3a3c;color: white;">#3a3a3c</div>
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
			
			
			<div class = "center portfolio_all portfolio_image">
				<h2>Главная каталога</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-cat.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			
			<div class = "center portfolio_all portfolio_image">
				<h2>Главная продукта</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-prod.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			
			<div class = "center portfolio_all portfolio_image portfolio_image_many">
				<h2>Аctually</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature1.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>