<!DOCTYPE html>
<html lang="hy">

<head>
	<?php include('nullFiles/styles&meta.php'); ?>
	<!-- Имя сайта-->
	<title>Ծառայություններ -- Jadore BS</title>
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
							<li class="menu__item"><a href="services.php" class="menu__link  active">Ծառայություններ</a></li>
							<li class="menu__item"><a href="works.php" class="menu__link">Աշխատանք</a></li>
							<li class="menu__item"><a href="contacts.php" class="menu__link">Կապ</a></li>
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
				<div class="home__bg home__bg-2">
					<div class="home__container">
						<div class="home__body body-home">
							<div class="body-home__title">
								Այստեղ դուք կծանոթանաք մեր <wbr>ծառա<wbr>յությունների հետ
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Раздел ГЛАВНАЯ конец -->

			<!-- Раздел УСЛУГИ и ЦЕНЫ старт -->
			<section class="services services-bg">
				<div class="services__container">
					<div class="services__title title" data-aos="fade-up">
						<h3>Ծառայություններ</h3>
					</div>
					<div class="services__text text" data-aos="fade-up">
						Մեր գեղեցկության սրահում այստեղ՝ Jadore-ում, մենք առաջարկում ենք պրոֆեսիոնալ գեղեցկության
						պրոցեդուրաների ամբողջական տեսականի, ներառյալ թարթիչների երկարացում, եղունգների բուժում, սփրեյ
						արևայրուք, ինչպես նաև էպիլյացիայի և էպիլյացիայի ծառայությունների ամբողջական փաթեթ:
					</div>
				</div>
			</section>

			<div class="services-2">
				<div class="services-2__container">
					<div class="services-2__block">
						<div class="services-2__item">
							<div class="services-2__image">
								<img src="img/services/kras01.png" alt="Սանրվածք">
								<a href="services-HTML/hairstyles.php" target="__blank" data-aos="fade-up">Սանրվածքներ</a>
							</div>
						</div>
						<div class="services-2__item">
							<div class="services-2__image">
								<img src="img/services/kras2.png" alt="Մազերի ներկում">
								<a href="services-HTML/hairdDye.php" target="__blank" data-aos="fade-up">Մազերի ներկում</a>
							</div>
						</div>
						<div class="services-2__item">
							<div class="services-2__image">
								<img src="img/services/kras03.png" alt="Մազերի խնամք">
								<a href="services-HTML/hairCare.php" target="__blank" data-aos="fade-up">Մազերի խնամք</a>
							</div>
						</div>
						<div class="services-2__item">
							<div class="services-2__image">
								<img src="img/services/kras04.png" alt="Մանիկյուռ, պեդիկյուռ">
								<a href="services-HTML/manicure.php"  target="__blank" data-aos="fade-up">Մանիկյուռ, պեդիկյուռ</a>
							</div>
						</div>
						<div class="services-2__item">
							<div class="services-2__image">
								<img src="img/services/kras05.png" alt="Մազահեռացում">
								<a href="services-HTML/elos.php" target="__blank" data-aos="fade-up">Մազահեռացում</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Раздел УСЛУГИ и ЦЕНЫ конец -->
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