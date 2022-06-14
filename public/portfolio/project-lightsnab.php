<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Сайт сервиса по ремонту компютеров "Easy Comp 24" - Asmi-Studio';
	$pageDescription = "Разработка сайта для компании оказывающей услуги по ремонту компютеров и ноутбуков. Создание сайтов по выгодным ценам.";
	$folder_name = "lightsnab";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сайт сервиса по ремонту компютеров "Easy Comp 24"
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Сайт сервисного центра Easy Comp 24</h1>
					<p>В рамках проекта реализован сайт сервиса и произведена техническая SEO оптимизация структуры и страниц сайта.</p>
					
					<p>
					<span data-form = "Сайт ИзиКлмп" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class="clrWraper">
					<div class="colorBlk" style="background-color:#6cc72a;color: white;">#6cc72a</div>
					<div class="colorBlk" style="background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class="colorBlk" style="background-color:#28475c;color: white;">#28475c</div>
					<div class="colorBlk" style="background-color:#3a424d;color: white;">#3a424d</div>
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
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature-1.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>