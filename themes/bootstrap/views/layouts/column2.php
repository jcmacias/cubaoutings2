<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
  <div class="row">
        <div class="col-lg-9">
            <div id="content">
                <?php echo $content; ?>
            </div><!-- content -->
        </div>
        <div class="col-lg-3 top_sidebar">
            <div id="sidebar">
            <?php
            if(!Yii::app()->user->isGuest){$title='Operations';}else{$title=Yii::t('app','Tours');}
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title'=>$title,

                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'nav operations'),
                ));
               $this->endWidget();
            ?>
<!--            --><?php
//            $this->widget('application.extensions.fb-likebox.FBLikeBox', array(
//                'lang' => 'en_US', // optional (default: en_US)
//                'username' => 'cubaoutings', // required facebook username
//                'height' => 600, // optional height of like box (default: 63)
//                'width' => 250, // optional width of like box (default: 300)
//                'show_faces' => true, // optional true|false (default: true)
//                'color_scheme' => 'light', // optional light|dark (default: light)
//                'show_stream' => true, // optional true|false (default: true)
//                'show_border' => true, // optional true|false (default: true)
//                'show_header' => false, // optional true|false (default: true)
//            ));
//            ?>
<!--                --><?php //$this->widget('application.extensions.fbLikeBox.fbLikeBox', array(
//
//                ));?>
               <?php $this->beginWidget('zii.widgets.CPortlet', array(
                   'title'=>Yii::t('app','Follow us on Facebook'),
                ));?>
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcubaoutings&amp;width=259&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:259px; height:258px;" allowTransparency="true"></iframe>
               <?php $this->endWidget();?>


            </div><!-- sidebar -->
        </div>
  </div>
<?php $this->endContent(); ?>
</div>
<?php
//$datos=Offer::model()->GetOffer();
//if($datos!=null ){
//    if(Yii::app()->getLanguage() == 'en'){
//        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message.'</p></td></table>';
//    }
//    if(Yii::app()->getLanguage() == 'fr'){
//        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message_fr.'</p></td></table>';
//    }
//    if(Yii::app()->getLanguage() == 'es'){
//        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message_es.'</p></td></table>';
//    }
//    if(Yii::app()->getLanguage() == 'it'){
//        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message_it.'</p></td></table>';
//    }
//    if(Yii::app()->getLanguage() == 'ru'){
//        $message='<table><td>'.CHtml::image(Yii::app()->baseUrl . '/images/offer_image/'.$datos[0]->imagen, 'Cuba',array('class'=>'img-circle','style'=>'width:70px;')).'</td><td><p style="padding-left:7px">'.$datos[0]->message_ru.'</p></td></table>';
//    }
////echo '<pre>';
////print_r($message[0]->message);
////echo '</pre>';die;
//    if(Yii::app()->user->isGuest  ){
//        $this->widget('application.extensions.PNotify.PNotify',array(
//                'options'=>array(
//                    // 'title'=>'Special offer!!!',
//                    'text'=>$message,
//                    'type'=>'success',
//                    'closer'=>true,
//                    'sticker'=>false,
//                    'icon'=>false,
//                    'hide'=>false))
//        );
//    }
//}

?>