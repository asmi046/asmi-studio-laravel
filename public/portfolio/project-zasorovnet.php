<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Проект по разработке сайта для компании "ZasorovNet" - Asmi-Studio';
	$pageDescription = "Кейс по разработке сайта для компании оказывающей услуги по прочистке канализаций. Качественные сайты недорого у нас.";
	$folder_name = "zasorovnet";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Сайта для компании "ZasorovNet"
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Сайта для компании Засоров Нет</h1>
					<p>Сайт компании оказывающей услуги по прочистке канализаций. На сайте представлен полный перечень услуг компании с подробным описанием.</p>
					
					<p><a href="https://netzasorof.ru/">NetZasorof.ru</a></p>
					
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
					<div class="colorBlk" style="background-color:#0076c0;color: white;">#0076c0</div>
					<div class="colorBlk" style="background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class="colorBlk" style="background-color:#f3f3f5;color: #000000;">#f3f3f5</div>
					<div class="colorBlk" style="background-color:#37363b;color: white;">#37363b</div>
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
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature-zn.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>