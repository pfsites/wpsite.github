<!DOCTYPE html>
<html lang="ru">

<head>

	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">

	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>

</head>

<body>
	<div class="banner" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/header_contacts_bg.jpg')">
		<div class="container">
			<header class="header">
				<a href="" class="logo">
					<img src="<?php echo get_template_directory_uri() ?>/img/logo_banner.svg" alt="Название Вашей компании">
					<strong>Название Вашей компании</strong>
				</a>
				<div class="phone"><i class="fa fa-phone"></i>8 978 72 88 000</div>				
				<div class="hamburger hamburger--collapse">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
				<nav class="menu">
					<ul>
						<li class="active"><a href="">Главная</a></li>
						<li class="m_services"><a href="">Услуги</a></li>
						<li class="m_about"><a href="">О нас</a></li>
						<li class="m_news"><a href="">Новости</a></li>
						<li class="m_contacts"><a href="">Контакты</a></li>
					</ul>
				</nav>
			</header>
			<div class="content">
				<div class="wrap_logo"></div>
				<h1 class="h1">Интернет агентство полного цикла</h1>
				<p class="text">Каждый веб-разработчик знает, что такое текст-«рыба». Текст этот, несмотря на название, не имеет никакого отношения к обитателям водоемов.</p>
				<div class="buttons">
					<a href="" class="button">Заказать</a>
					<a href="" class="button">Обратный звонок</a>
				</div>
			</div>
		</div>
		<div class="arrow"><i class="fa fa-angle-double-down"></i></div>
	</div>