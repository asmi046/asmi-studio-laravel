<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Презентационный сайт рекламной компании "OnLine - медиа" - Asmi-Studio';
	$pageDescription = "Разработка сайта рекламной компании OnLine - медиа. Разработка сайтов для бизнеса, поисковая оптимизация.";
	$folder_name = "onlinemedia";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Презентационный сайт рекламной компании "OnLine - медиа" 
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Презентационный сайт рекламной компании "OnLine - медиа" </h1>
					<p>Проект по созданию сайта (посадочной страницы) для рекламной компании  "OnLine - медиа". В рамках проекта разработан фирменный знак, проработаны дизайн и наполнение сайта.</p>
					<p>
					<span data-form = "Сайт Онлайн- медиа" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class="clrWraper">
					<div class="colorBlk" style="background-color:#fd2f3c;color: white;">#fd2f3c</div>
					<div class="colorBlk" style="background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class="colorBlk" style="background-color:#e8e9ed;color: #000000;">#e8e9ed</div>
					<div class="colorBlk" style="background-color:#313131;color: white;">#313131</div>
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
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>