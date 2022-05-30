<!DOCTYPE html>
<html lang="hy">

<head>
	<?php include('nullFiles/styles&meta.php'); ?>
	<!-- Имя сайта-->
	<title>Կապ մեզ հետ -- Jadore BS</title>
</head>

<body id="body">

	<!-- Загрузчик -->
	<div id="preloader"></div>

	<!-- Оболоча -->
	<div class="wrapper" id="wrapper">

		<!-- Шапка сайта старт -->
		<header class="header" id="header">
			<div class="header__container">
				<div class="header__body">
					<a href="index.php" class="header__logo" data-aos="fade-in">
						<img src="img/logo.png" alt="Լոգո">
					</a>
					<div class="header__burger" id="toggle">
						<span></span>
					</div>
					<nav class="header__menu menu" id="sidebar" data-aos="fade-left">
						<ul class="menu__list">
							<li class="menu__item"><a href="index.php" class="menu__link">Գլխավոր</a></li>
							<li class="menu__item"><a href="services.php" class="menu__link">Ծառայություններ</a></li>
							<li class="menu__item"><a href="works.php" class="menu__link">Աշխատանք</a></li>
							<li class="menu__item"><a href="contacts.php" class="menu__link  active">Կապ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- Шапка сайта конец -->

		<!-- Контент -->
		<main>
			<!-- Раздел ГЛАВНАЯ старт -->
			<section class="home" data-aos="fade-in">
				<div class="home__bg home__contacts-bg">
					<div class="home__container">
						<div class="home__body body-home body-home__flex">
							<div class="body-home__title">
								Կապ մեզ հետ
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Раздел ГЛАВНАЯ конец -->

			<!-- Адресы и так далее старт -->
			<section class="our-salon">
				<div class="our-salon__container">
					<div class="our-salon__items">
						<div class="our-salon__map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3020.047715611632!2d44.50891941533091!3d40.804945239861084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4041bb4267a562e5%3A0x4bf1ddf18d8bf412!2sJADORE%20Beauty%20Salon!5e0!3m2!1sru!2s!4v1650123380028!5m2!1sru!2s"
								style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						<div class="our-salon__image">
							<img src="img/Home/jadoreloc.png" alt="ֆոն նկար">
						</div>
					</div>
				</div>
			</section>
			<!-- Адресы и так далее конец -->



		</main>

		<!-- Подвал сайта старт -->
		<?php include('nullFiles/footer.php'); ?>


	</div>


	<!-- Скрипти (JS) -->
	<script src="https://kit.fontawesome.com/364482cb4d.js" type="text/javascript"></script>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/aos/js/aos.js"></script>
	<script src="assets/Owl-Carousel/js/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>