<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Разработка сайта консалтинговой группы "ГрандЪ" - Asmi-Studio';
	$pageDescription = 'Создание сайта для консалтинговой группы "ГрандЪ", создание посадочных страниц по выгодной цене';
	$folder_name = "grand";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сайт консалтинговой группы "ГрандЪ"
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Сайт консалтинговой группы "ГрандЪ"</h1>
					<p>Представляем Вашему вниманию кейс по созданию корпоративного сайта для консалтинговой группы "ГрандЪ".</p>
					<p>
					<span data-form = "Сайт гранд" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class = "clrWraper">
					<div class = "colorBlk" style = "background-color:#c4041c;color: white;">#c4041c</div>
					<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class = "colorBlk" style = "background-color:#e0e1e3;">#e0e1e3</div>
					<div class = "colorBlk" style = "background-color:#1a1818; color: white;">#1a1818</div>
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
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature1.<?php global $imgRaz; echo $imgRaz; ?>">
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature2.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>