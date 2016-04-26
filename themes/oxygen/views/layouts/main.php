<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="CubaOutings is a tours company based in Cuba that mainly develops personalized sightseeing tours and excursions from Varadero to Havana and the rest of the Cuban historical or natural sites.">
    <meta name="language" content="en"/>
    <meta name="author" content="">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lightbox.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" rel="stylesheet">
    <link id="css-preset" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/presets/preset1.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ajustes.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">var layout = 1;</script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<!--/head-->

<body>

<!--.preloader-->
<div class="preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(../../images/slider/1.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Welcome to <span class="caption_slider">Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig"><?php echo Yii::t('app', 'The best way to explore Cuba.'); ?></p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(../../images/slider/2.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">Say Hello to <span class="caption_slider2">Cubaoutings</span></h1>

                    <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(../../images/slider/3.jpg)">
                <div class="caption">
                    <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>

                    <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
                    <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
                </div>
            </div>
        </div>
        <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

        <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div>
    <!--/#home-slider-->
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('site/index'); ?>">
                    <h1><?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/logosi.png', 'cubaoutings', array("class" => "img-responsive")); ?></h1>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <?php $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'nav navbar-nav navbar-right'),
                    'items' => array(
                        array('label' => Yii::t('app', 'Home'), 'url' => array('/site/index')),
                        array('label' => Yii::t('app', 'About us'), 'url' => array('/site/page', 'view' => 'about'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => Yii::t('app', 'Contact'), 'url' => array('/site/contact'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => Yii::t('app', 'Tours'), 'url' => array('/tours/index')),
                        array('label' => Yii::t('app', 'Photos'), 'url' => array('/photo/index')),
                        array('label' => Yii::t('app', 'Offer'), 'url' => array('/offer/index'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => Yii::t('app', 'Places'), 'url' => array('/place/index'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => Yii::t('app', 'Bookings'), 'url' => array('/book/index'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => Yii::t('app', 'Testimonials'), 'url' => array('/comment/index')),
                        array('label' => Yii::t('app', 'Accommodations'), 'url' => array('/accommodations/index')),
                        array('label' => Yii::t('app', 'Users'), 'url' => array('/user/index'), 'visible' => !Yii::app()->user->isGuest),
                        //array('label'=>Yii::t('app','Login'), 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label' => Yii::t('app', 'Logout (' . Yii::app()->user->name . ')'), 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                )); ?>

<!--                <ul class="nav navbar-nav navbar-right">-->
<!--                    <li class="scroll active"><a href="#home">Home</a></li>-->
<!--                    <li class="scroll"><a href="#services">Service</a></li>-->
<!--                    <li class="scroll"><a href="#about-us">About Us</a></li>-->
<!--                    <li class="scroll"><a href="#portfolio">Portfolio</a></li>-->
<!--                    <li class="scroll"><a href="#team">Team</a></li>-->
<!--                    <li class="scroll"><a href="#blog">Blog</a></li>-->
<!--                    <li class="scroll"><a href="#contact">Contact</a></li>-->
<!--                </ul>-->
            </div>
        </div>
    </div>
    <!--/#main-nav-->
</header>
<!--/#contact-->
<?php echo $content; ?>
<footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="container text-center">
            <div class="footer-logo">
                <a href="index.html"><?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/logosi.png', 'cubaoutings', array("class" => "img-responsive")); ?></a>
            </div>
            <div class="social-icons">
                <ul>
                    <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2014 Oxygen Theme.</p>
                </div>
                <div class="col-sm-6">
                    <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/mousescroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.countTo.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>

</body>
</html>