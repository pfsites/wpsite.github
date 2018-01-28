<?php get_header(); ?>
	<main class="main">
		<section class="about">
			<div class="container">
				<div class="header">
					<div class="wrap_logo"></div>
					<h2 class="h2">О нашем агентстве</h2>
					<p class="detail">подробно о нас</p>
				</div>
				<div class="content">
					<div class="row">
						<div class="col-md-7">
							<p class="text">Самым известным «рыбным» текстом является знаменитый Lorem ipsum. Считается, что впервые его применили в книгопечатании еще в XVI веке. Своим появлением Lorem ipsum обязан древнеримскому философу Цицерону, ведь именно из его трактата «О пределах добра и зла» средневековый книгопечатник вырвал отдельные фразы и слова, получив текст «рыбу», широко используемый и по сей день.</p>
							<div class="boxes">
								<div class="box best">
									<h3 class="h3">Лучшие на рынке</h3>
									<p class="text">Самый известным «рыбным» текстом является знаменитый Lorem ipsum. Считается, что впервые его применили в книгопечатании еще в XVI веке.</p>
								</div>
								<div class="box experience">
									<h3 class="h3">Многолетний опыт</h3>
									<p class="text">Самый известным «рыбным» текстом является знаменитый Lorem ipsum. Считается, что впервые его применили в книгопечатании еще в XVI веке.</p>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<img class="img" src="<?php echo get_template_directory_uri() ?>/img/services.jpg" alt="Название вашей компании">
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="services" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/services.jpg');">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="col-sm-4 col-xs-6">
							<div class="item">
								<h3 class="h3">Какая-то услуга</h3>
								<p class="text">И даже с языками, использующими латинский алфавит, могут возникнуть небольшие проблемы</p>
							</div>
						</div>
						<div class="col-sm-4 col-xs-6">
							<div class="item">
								<h3 class="h3">Какая-то услуга</h3>
								<p class="text">И даже с языками, использующими латинский алфавит, могут возникнуть небольшие проблемы</p>
							</div>
						</div>
						<div class="col-sm-4 col-xs-6">
							<div class="item">
								<h3 class="h3">Какая-то услуга</h3>
								<p class="text">И даже с языками, использующими латинский алфавит, могут возникнуть небольшие проблемы</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="news">
			<div class="container">
				<div class="header">
					<div class="wrap_logo"></div>
					<h2 class="h2">Последние новости</h2>
					<p class="detail">подробно о нас</p>
				</div>
				<div class="content">
					<div class="owl-carousel owl-theme">
						<?php 
							$args = array(
								'category'    => 0,
							);
							$posts = get_posts( $args );
							foreach($posts as $post){ setup_postdata($post);
								

						?>
								<div class="item">
									<a href="">
										<img src="<?php echo wp_get_attachment_url( get_the_ID()+1) ?>" alt="<?php the_title(); ?>">
										<div class="composition">
											<h3 class="h3"><?php the_title(); ?></h3>
											<p class="date"><?php the_modified_date(); ?></p>
											<p class="text"><?php the_excerpt_rss(); ?></p>
										</div>
									</a>
								</div>
						<?php
							}
							wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</section>


		<sectin class="all_news">
			<div class="content">
				<p class="text">Просмотреть все</p>
				<a href="">Новости</a>
			</div>
		</sectin>



		<section class="reviews">
			<div class="container">
				<div class="header">
					<div class="wrap_logo"></div>
					<h2 class="h2">Отзывы наших клиентов</h2>
					<div class="detail">подробно о нас</div>
				</div>
				<div class="content">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<img src="<?php echo get_template_directory_uri() ?>/img/photo_1.jpg" alt="Татьяна Литвиненко">
							<p class="name">Татьяна Литвиненко</p>
							<p class="text">Конечно, возникают некоторые вопросы, связанные с использованием Lorem ipsum на сайтах и проектах, ориентированных на кириллический контент – написание символов на латыни и на кириллице значительно различаются.</p>
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri() ?>/img/photo_2.jpg" alt="Дмитрий Матвиенко">
							<p class="name">Дмитрий Матвиенко</p>
							<p class="text">Конечно, возникают некоторые вопросы, связанные с использованием Lorem ipsum на сайтах и проектах, ориентированных на кириллический контент – написание символов на латыни и на кириллице значительно различаются.</p>
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri() ?>/img/photo_1.jpg" alt="Александра Воскобойникова">
							<p class="name">Александра Воскобойникова</p>
							<p class="text">Конечно, возникают некоторые вопросы, связанные с использованием Lorem ipsum на сайтах и проектах, ориентированных на кириллический контент – написание символов на латыни и на кириллице значительно различаются.</p>
						</div>
						<div class="item">
							<img src="<?php echo get_template_directory_uri() ?>/img/photo_2.jpg" alt="Дмитрий Матвиенко">
							<p class="name">Константин Воскобойников</p>
							<p class="text">Конечно, возникают некоторые вопросы, связанные с использованием Lorem ipsum на сайтах и проектах, ориентированных на кириллический контент – написание символов на латыни и на кириллице значительно различаются.</p>
						</div>
					</div>
				</div>
			</div>
		</section>


		
		<section class="contacts" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/header_contacts_bg.jpg);">
			<div class="container">
				<div class="header">
					<h2 class="h2">Контакты</h2>
					<p class="detail">подробно о нас</p>
				</div>
				<div class="content">
					<p class="phone">+7 978 72 00 000</p>
					<p class="mail">example@mail.ru</p>
					<form method="POST" class="contacts_form">
						<h3 class="h3">Свяжитесь с нами</h3>
						<div class="row">
							<div class="col-xs-6">
								<label for="name">Ваше имя</label>
								<input class="input" required id="name" name="name" type="text" placeholder="Имя">
								<label for="mail">Ваш e-mail</label>
								<input class="input" required id="mail" name="mail" type="text" placeholder="e-mail">
							</div>
							<div class="col-xs-6">
								<label for="message">Сообщение</label>
								<textarea class="message" required name="message" id="message"></textarea>
							</div>
						</div>
						<input class="button" type="submit">
					</form>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>