<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Наша Почта - служба экспресс-доставки посылок, грузов, документов и интернет-заказов. С нами Вы можете отправить посылку в любую точку Донбасса, России, Крыма, Украины и мира.">
    <meta property="og:image" content="http://donbass-post.ru/images/logo.png">
    <title>Наша Почта | Официальный сайт</title>

	<link rel="icon" href="images/favicon.png">
	<link rel="stylesheet" href="style.css?new=9">
    <link rel="stylesheet" href="js/modal/remodal-default-theme.css">
    <link rel="stylesheet" href="js/modal/remodal.css">
		<meta name="viewport" content="width=1366, initial-scale=1.0">

</head>

<body>
<div class="wrapper">

<h1 style="position: absolute; top:-200px; display: block;">Нова Пошта Почта ДНР Донбасс ЛНР ЛДНР Новороссия Новости</h1>


<?include("header.php")?>


<!--Слайдер-->
<div class="akor">
<div class="slider-container">
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">

        <div class="slide slide-0 active">
            <div class="slide__bg">
                <span>УСЛУГИ ЭКСПРЕСС-ДОСТАВКИ</span>
                <div class="main-img"></div>
                <div class="news">НОВОСТИ ></div>
            </div>
        </div>

        <div class="slide slide-1">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 171,0 349,405 0,405"></path>
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Экспресс-перевозки в Крым</h2>
                    <a class="slide__text-link" href="http://donbass-tour.ru/">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>

        <div class="slide slide-2">
            <div class="slide__bg"></div>
            <div class="slide__content">
               <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 171,0 349,405 0,405"></path>
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Доставка коммерческих грузов</h2>
                    <a class="slide__text-link" href="commerce.php">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>

        <div class="slide slide-3">
            <div class="slide__bg"></div>
            <div class="slide__content">
                <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                    <path class="slide__overlay-path" d="M0,0 171,0 349,405 0,405"></path>
                </svg>
                <div class="slide__text">
                    <h2 class="slide__text-heading">Наш генеральный партнер</h2>
                    <a href="https://nrg-tk.ru" target="_blank" class="slide__text-link">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>





    </div>
</div>
</div>
<!--Конец / Слайдер-->


<!--Контент Главная-->
<div class="main-bg-one">

    <div class="zag">НАША ПОЧТА - ЭТО</div>

    <div class="blok-three-main">
		<div class="blok-three our">
			<img src="images/main/medal.png" />
			<span>Первый логистический оператор</span>
			<p>на территории ЛДНР. Мы первые обеспечили доставку документов, посылок и интернет-заказов между Донбассом и Россией.</p>
		</div>
    </div>

    <div class="blok-three-main">
		<div class="blok-three our">
			<img src="images/main/man.png" />
			<span>Индивидуальный подход</span>
			<p>к каждому Клиенту. Вся наша деятельность направлена на выяснение и удовлетворение потребностей наших Клиентов.</p>
		</div>
    </div>

    <div class="blok-three-main">
		<div class="blok-three our">
			<img src="images/main/geo.png" />
			<span>Масштабное покрытие</span>
			<p>сети отделений "Наша Почта" постоянно растет. Мы можем осуществить доставку в любую точку России, Украины и мира.</p>
		</div>
    </div>

</div>
<!--Конец / Контент Главная-->

<?include("share.php")?>
<?include("footer.php")?>

</body>
</html>
