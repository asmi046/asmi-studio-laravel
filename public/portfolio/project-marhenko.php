<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = 'Кейс: Личный сайт психотерапевта Нины Марченко - Asmi-Studio';
	$pageDescription = "Разработка сайта для практикующего психотерапевта Нины Марченко. Создание сайтов по выгодным ценам.";
	$folder_name = "marhenko";
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
				<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / Личный сайт психотерапевта Нины Марченко
			</div>
			<div class = "center portfolio_osnblk">
				<div class = "p_info">
					<h1>Личный сайт психотерапевта Нины Марченко</h1>
					<p>В рамках проекта реализован сайт с расписанием мероприятий и описанием практики и квалификации терапфвта. Так же в качестве отдельных разделов реализованы посадочные страницы под психологические туры.</p>
					
					<p><a href = "https://doktor-marchenko.ru/">doktor-marchenko.ru</a></p>
					
					<p>
					<span data-form = "Сайт Марченко" class = "allBtn unisend_win">Хочу так же</span>
					</p>
				</div>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-present.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class = "center portfolio_all portfolio_colors">
				<h2>Цветовое решение</h2>
				<div class="clrWraper">
					<div class="colorBlk" style="background-color:#4fad9d;color: white;">#4fad9d</div>
					<div class="colorBlk" style="background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
					<div class="colorBlk" style="background-color:#f47555;color: white;">#f47555</div>
					<div class="colorBlk" style="background-color:#453c3d;color: white;">#453c3d</div>
				</div>
			</div>
			
			
			
			<div class = "center portfolio_all portfolio_image">
				<h2>Главная страница</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-Screen-1.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			<div class = "center portfolio_all portfolio_mobile">
				<h2>Адаптация под мобильные устройства</h2>
				<div class = "p_picture">
					<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-mob.<?php global $imgRaz; echo $imgRaz; ?>">
				</div>
			</div>
			
			<div class="center portfolio_all portfolio_image">
				<h2>Страница блога</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-Screen-2.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
			
			<div class = "center portfolio_all portfolio_image portfolio_image_many">
				<h2>Аctually</h2>
				<img src = "../img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>-nature_NM.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
	</section>
	
	<?php include("../footer.php");?>
</body>

</html>