<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка сайта 'Засоров Нет' - Web Diff";
$pageDescription = "Цель проекта: Сайт с набором посадочных страниц под различные услуги аппаратной прочистки канализации. Сайт разработан под рекламу.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/zasorovnet/present.jpg";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта "Засоров Нет"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта "Засоров Нет"</h1>
				<p>Цель проекта: Сайт с набором посадочных страниц под различные услуги аппаратной прочистки канализации. Сайт разработан под рекламу.</p>
				<p></p>
				<span data-form = "Проект Засоров Нет" class = "allBtn unisend_win">Хочу так же</span>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/zasorovnet/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#0077bc;color: white;">#0077bc</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#f3f3f5;color: white;">#f3f3f5</div>
				<div class = "colorBlk" style = "background-color:#37363b;color: white;">#37363b</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/zasorovnet/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/zasorovnet/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/zasorovnet/nature-zn.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	
	
	<?php include("../footer.php");?>
	
</body>
</html>