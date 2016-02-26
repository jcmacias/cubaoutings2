<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description"
          content="CubaOutings is a tours company based in Cuba that mainly develops personalized sightseeing tours and excursions from Varadero to Havana and the rest of the Cuban historical or natural sites."/>
    <meta name="language" content="en"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css"  media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/Animate.css"  media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ajustes.css" media="screen, projection"/>
    <!--    <link rel="stylesheet" type="text/css" href="-->
    <?php //echo Yii::app()->theme->baseUrl; ?><!--/fullPage/jquery.fullPage.css" media="screen, projection" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.css"
          media="screen, projection"/>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" media="screen, projection" />-->
    <!-- blueprint CSS framework -->
    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />-->
    <!--[if lt IE 8]>
	<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />-->
    <![endif]-->

    <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/GammaGallery/css/style.css"/>

    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/GammaGallery/js/modernizr.custom.70736.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/wow/wow.min.js"></script>
    <noscript>
        <link rel="stylesheet" type="text/css"
              href="<?php echo Yii::app()->theme->baseUrl; ?>/GammaGallery/css/noJS.css"/>
    </noscript>
    <script>
        new WOW().init();
    </script>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!--<img class="vegas-background" style="position: fixed; left: 0px; top: -167.875px; display: block; width: 1360px; height: 947.75px; bottom: auto; right: auto;" src=<?php //echo Yii::app()->baseUrl."/themes/img/bg1.jpg";?>>-->
<div class="container" id="page">

    <!--	<div id="header">-->
    <!--		<div id="logo">-->
    <?php ////echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/logo.png', 'logo',array("style"=>"height: 180px, width: 100%"));?><!--</div>-->
    <!--	</div><!-- header -->

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand"
                   href="<?php echo Yii::app()->createUrl('site/index'); ?>"><?php echo CHtml::image(Yii::app()->theme->baseUrl . '/../img/logosi.png', 'cubaoutings', array("style" => "height:35px")); ?></a>
                <button data-target="#navbar-main" data-toggle="collapse" type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar-main" class="navbar-collapse collapse">
                <?php $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
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

                <ul class="nav navbar-nav navbar-right">
                    <li><?php $this->widget('application.extensions.ELangPick.ELangPick', array('pickerType' => 'dropdown',)); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- mainmenu -->
    <?php if (isset($this->breadcrumbs)): ?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif ?>
</div>


<?php echo $content; ?>
<div class="container">
    <div class="clear"></div>
    <?php $this->widget("application.extensions.scrolltop.ScrollTop"); ?>
    <hr class="featurette-divider">
    <footer>
        <div class="row">
            <div class="col-lg-3">
                <!--<div id="footer">-->
                Copyright &copy; <?php echo date('Y'); ?> by Cubaoutings.<br/>
                <?php echo Yii::t('app', 'All Rights Reserved.') ?><br/>
                <?php //echo Yii::powered(); ?>
                <!--</div><!-- footer -->
            </div>
        </div>
    </footer>
</div>
<!-- page -->

<?php Yii::app()->clientScript->registerScript('scrolldown', "
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
"
); ?>
<?php Yii::app()->clientScript->registerScript('nicescroll', "
 var nice = false;

$(document).ready(function() {
nice = $('html').niceScroll();
});

var obj = window;//$(window);

console.log(obj.length);
console.log('selector' in obj);

"
); ?>
<?php
Yii::app()->clientscript
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootstrap.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/carousel.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/bootswatch.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/tab.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/nicescroll/jquery.nicescroll.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/GammaGallery/js/jquery.masonry.min.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/GammaGallery/js/jquery.history.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/GammaGallery/js/js-url.min.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/GammaGallery/js/jquerypp.custom.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/GammaGallery/js/gamma.js', CClientScript::POS_END)
    ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.transit.min.js', CClientScript::POS_END)
//    ->registerScriptFile(Yii::app()->theme->baseUrl . '/wow/wow.min.js', CClientScript::POS_END)
//    ->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.transition.min.js', CClientScript::POS_END)


?>
<?php Yii::app()->clientScript->registerScript('splash', "
 $(document).ready(function(){
var header = $('.splash');

var backgrounds = new Array(
    'url(/img/back4.jpg)'
  , 'url(/img/back5.jpg)'
  , 'url(/img/back6.jpg)'
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.transition({
  opacity: 0.80,
  duration: 200,
  delay: 80,
  easing: 'out',
  complete: function() {
  header.css('background-image', backgrounds[current]);
   header.transition({
  opacity: 1,
  duration: 200,
  delay: 80,
  easing: 'in',
  });
   }
 });

 }
setInterval(nextBackground, 36000);

header.css('background-image', backgrounds[0]);
});

"
); ?>
<script type="text/javascript">
    $(function () {

        var GammaSettings = {
            // order is important!
            viewport: [{
                width: 1200,
                columns: 5
            }, {
                width: 900,
                columns: 4
            }, {
                width: 500,
                columns: 3
            }, {
                width: 320,
                columns: 2
            }, {
                width: 0,
                columns: 2
            }]
        };

        Gamma.init(GammaSettings);

    });
</script>
</body>
</html>
