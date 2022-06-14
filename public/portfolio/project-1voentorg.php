<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = "Кейс: Сайт каталог для магазина 1-й Военторг - Asmi-Studio";
	$pageDescription = "Проект по созданию сайта каталога для магазина 1-й Военторг. Разработка сайта магазина, импорт товаров из 1с";
	$folder_name = "1vtorg";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сайт каталог для магазина 1-й Военторг
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Сайт каталог для магазина 1-й Военторг</h1>
					<p>Разработка сайта-каталога для магазина 1-й Военторг. В ходе данной работы разработан сайт и осуществлен импорт товаров из 1С.</p>
					<p>
					<span data-form = "Сайт каталог для магазина 1-й Военторг" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class = "clrWraper">
					<div class = "colorBlk" style = "background-color:#ffcb04;">#ffcb04</div>
					<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class = "colorBlk" style = "background-color:#005d42;color: #FFFFFF;">#005d42</div>
					<div class = "colorBlk" style = "background-color:#c41c35;color: white;">#c41c35</div>
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
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature.<?php global $imgRaz; echo $imgRaz; ?>">
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present2.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>