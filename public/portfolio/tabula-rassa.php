<!DOCTYPE html>
<html lang="ru">

<?php
	$pageTitle = "Кейс: Сайт Tabula Rassa - банкротство физлиц - Web Diff";
	$pageDescription = "Посадочная страница для рекламы услуг по банкротству физических лиц. Были проведены работы по разработке сайта и настройке событий Яндекс.Метрики.";
	$folder_name = "tabula_rassa";
?>

<head>
	<?php include("../head-content.php");?>
</head>

<body class = "inner_page">

	<?php include("../window.php");?>
	
	<?php include("../header-menu.php");?>

	<section class = "all_portfolio portfolio_banner" style = "background-image: url(<?php echo $GLOBALS["url"]; ?>/img/portfolio/<?php echo $folder_name;?>/<?php echo $folder_name;?>_hban_b.jpg);">
		<div class = "content">
			<div class = "banner_text">
				<div class = "banner_text_header">
				
					<div class = "breadcrumbs" id = "breadcrumbs">
						<a href = "<?php echo $GLOBALS["url"]; ?>">Главная</a> / <a href = "<?php echo $GLOBALS["url"]; ?>/portfolio/">Портфолио</a> / <span>Разработка сайта "Табула Расса"</span> 
					</div>
				
					<h1>Разработка сайта <br/> Табула Расса</h1>
				</div>
				<div class = "banner_text_info">
					<div class = "sitety">Посадочная страница (Lending Page)</div>
					<div class = "sitlnk">Перейти на сайт: <a class = "orange_lnk" href = "https://fizbankrot46.ru/">fizbankrot46.ru</a></div>
					<div class = ""></div>
				</div>
			</div>
		</div>
	</section>
	
	<section class = "all_portfolio all_portfolio_work">
		<div class = "content content_portfolio">
			
			<div class = "portfolio_2img">
				<img src = "<?php echo $GLOBALS["url"]; ?>/img/portfolio/<?php echo $folder_name;?>/logo.jpg" />
				
			</div>
			<h2>Главная страница</h2>
			<img src = "<?php echo $GLOBALS["url"]; ?>/img/portfolio/<?php echo $folder_name;?>/main-tabula.jpg" />
			
		</div>
	</section>
	
	
	
	
	<?php include("../footer.php");?>
</body>

</html>
