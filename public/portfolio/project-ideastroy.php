<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Сайт строительной компании "Идея Строй" - Asmi-Studio';
	$pageDescription = "Разработка сайта застройщика соответствующего требованиям законодательства РФ. Создание сайтов по выгодным ценам.";
	$folder_name = "ideastroy";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сайт строительной компании "Идея Строй"
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Сайт строительной компании Идея Строй</h1>
					<p>Разработка сайта застройщика соответствующего требованиям законодательства РФ. Информационный сайт описывающий деятельность компании.</p>
					
					<p><a href="http://idea-stroi.ru/">idea-stroi.ru</a></p>
					
					<p>
					<span data-form = "Сайт Засоров Нет" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class="clrWraper">
					<div class="colorBlk" style="background-color:#B49F7E;color: white;">#B49F7E</div>
					<div class="colorBlk" style="background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class="colorBlk" style="background-color:#d8df20;color: #000000;">#d8df20</div>
					<div class="colorBlk" style="background-color:#333333;color: white;">#333333</div>
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
			
			<div class="center portfolio_all portfolio_image">
				<h2>Раздел О компании</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-about.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			<div class="center portfolio_all portfolio_image">
				<h2>Раздел Контакты</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-contacts.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			<div class = "center portfolio_all portfolio_image portfolio_image_many">
				<h2>Аctually</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature-is.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>