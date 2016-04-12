<?php /*

<jdoc:include type="modules" name=" " />
<jdoc:include type="message" />
<jdoc:include type="component" />
<a href="http://pavel-rafeev.ru/" class="popup fancybox.iframe">Йа окошко</a>
?tmpl=component

*/ ?>
<!DOCTYPE html>
<head>
<!-- Developer by Pavel Rafeev pavel-rafeev.ru -->
<?php
$headlink = $this->getHeadData();
unset($headlink['scripts']['/media/system/js/caption.js']);
unset($headlink['scripts']['/media/system/js/validate.js']);
unset($headlink['scripts']['/media/system/js/mootools-core.js']);
unset($headlink['scripts']['/media/system/js/mootools-more.js']);
unset($headlink['scripts']['/media/system/js/core.js']);
unset($headlink['scripts']['/media/jui/js/bootstrap.min.js']);
unset($headlink['scripts']['/media/jui/js/jquery-noconflict.js']);
unset($headlink['scripts']['/media/jui/js/jquery-migrate.min.js']);



unset($this->_scripts[$this->baseurl.'/media/system/js/mootools-core.js'], 
$this->_scripts[$this->baseurl.'/media/jui/js/jquery-noconflict.js'],
$this->_scripts[$this->baseurl.'/media/jui/js/jquery-migrate.min.js'],
$this->_scripts[$this->baseurl.'/media/system/js/caption.js'],
$this->_scripts[$this->baseurl.'/media/jui/js/jquery.min.js']);

$this->setHeadData($headlink);
if (isset($this->_script['text/javascript']))
    {
    $this->_script['text/javascript'] = preg_replace('%jQuery\(window\)\.on\(\'load\',\s*function\(\)\s*{\s*new\s*JCaption\(\'img.caption\'\);\s*}\);\s*%', '', $this->_script['text/javascript']); //ищем и заменяем наш скрипт на дырку от бублика
    if (empty($this->_script['text/javascript']))
        unset($this->_script['text/javascript']); //если кроме нашего скрипта ничего нет, то убираем тег script
    }
unset($this->_generator); /* отключаем metagenerator */
/* $this->setGenerator('tro-lo-lo'); свой metagenerator */
?>
<jdoc:include type="head" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body <?php if($this->countModules('slider')) : ?>class="main"<?php else: ?>class="inner"<?php endif; ?>>
<header>
	<div class="header">
		<a class="header-logo" href="./"></a>
		<jdoc:include type="modules" name="topmenu" />
		<jdoc:include type="modules" name="language-select" />
	</div>
</header>
<div class="shared">
	<a href="#" class="shared__icon shared__icon-plus">+</a>
	<div class="ya-share2" data-services="vkontakte,facebook,twitter"></div>
	<a href="https://www.instagram.com/skybar39/" target="_blank" class="shared__icon shared__icon-instagramm" title="Instagramm"></a>
	<a href="#" class="shared__icon shared__icon-periscop" title="Peroscope"></a>
</div>

<? 	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */
	/* ------------------------------ slider ------------------------------ */
	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */	?>
<?php if($this->countModules('slider')) : ?>
<div class="owl-carousel">
	<jdoc:include type="modules" name="slider" style="my"/>
</div>
<div class="instagramm-scroll">
	<div class="instagramm-scroll__wrapper">
		<a href="#" class="instagramm-scroll__wrapper-show">INSTAGRAMM</a>
	</div>
	<div class="inst-carousel">
		<div class="item" style="background-image: url('../images/inst-1.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-2.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-3.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-4.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-5.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-6.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-1.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-2.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-3.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-4.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-5.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-6.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-1.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-2.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-3.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-4.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-5.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-6.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-1.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-2.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-3.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-4.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-5.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-6.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-1.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-2.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-3.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-4.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-5.jpg');"></div>
		<div class="item" style="background-image: url('../images/inst-6.jpg');"></div>
	</div>
</div>
<?php endif; ?>
<? 	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */
	/* ------------------------------ slider ------------------------------ */
	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */
	/* -------------------------------------------------------------------- */	?>
<div class="container">
	<div class="content">
		<jdoc:include type="component" />
	</div>
</div>

<footer>
	<div class="footer">
		<div class="footer__logo">SKY BAR 2016</div>
		<div class="footer__text">
			<jdoc:include type="modules" name="footer" />
		</div>
		<a href="#" class="footer__periscope">PERISCOPE</a>
	</div>
</footer>

<div class="md-modal md-effect-11" id="newsletter">
	<div class="md-content">
		<jdoc:include type="modules" name="newsletter" />
		<a href="#" class="md-content__close"></a>
	</div>
</div>

<jdoc:include type="modules" name="callback" />

<div class="overlay overlay-show"></div>



<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>
<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
</body>
</html>