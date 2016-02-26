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
                    //'htmlOptions'=>array('class'=>'sidebar_header'),
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>$this->menu,
                    'htmlOptions'=>array('class'=>'nav operations'),
                ));
               $this->endWidget();
            ?>
                <?php if(Yii::app()->user->isGuest){?>
                 <div class="row" style="padding-top: 20px;">
                      <div class="col-sm-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo Yii::t('app','Book Accommodations')?></h3>
                            </div>
                            <div class="panel-body">
                                <div class="form">

                                    <?php
                                     $form=$this->beginWidget('CActiveForm', array(
                                        'id'=>'book-accommodations-form',
                                        // Please note: When you enable ajax validation, make sure the corresponding
                                        // controller action is handling ajax validation correctly.
                                        // There is a call to performAjaxValidation() commented in generated controller code.
                                        // See class documentation of CActiveForm for details on this.
                                        'enableAjaxValidation'=>true,
                                         'clientOptions' => array(
                                             'validateOnSubmit'=>true,
                                             'validateOnChange'=>true,
                                             'validateOnType'=>false,
                                         ),
                                        'action'=>Yii::app()->createUrl('bookAccommodations/create'),
                                    )); $model=new BookAccommodations();?>

                                    <p class="note"><?php echo Yii::t('app','Fields with <span class="required">*</span> are required.')?></p>

                                    <?php //echo $form->errorSummary($model); ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,Yii::t('app','Email Owner')); ?>
                                            <?php echo $form->textField($model,'email_owner',array('class'=>'book_email_owner form-control')); ?>
                                            <?php echo $form->error($model,'email_owner',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,Yii::t('app','Question')); ?>
                                            <?php echo $form->textArea($model,'question',array('class'=>'question form-control')); ?>
                                            <?php echo $form->error($model,'question',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,Yii::t('app','Pax')); ?>
                                            <?php echo $form->textField($model,'pax',array('class'=>'book_email_owner form-control')); ?>
                                            <?php echo $form->error($model,'pax',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php echo $form->labelEx($model,Yii::t('app','Date')); ?>
<!--                                            --><?php //echo $form->textField($model,'date_book',array('class'=>'book_email_owner form-control')); ?>
                                            <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                'model' => $model,
                                                'attribute' => 'date',
                                                'htmlOptions' => array(
                                                    'size' => '10',         // textField size
                                                    'maxlength' => '10',    // textField maxlength
                                                    'class'=>'book_email_owner form-control'
                                                ),
                                                'options'=>array(
                                                    'dateFormat' => 'yy-mm-dd',
                                                ),
                                            ));
                                            ?>
                                            <?php echo $form->error($model,'date',array('class'=>'label label-danger')); ?>
                                        </div>
                                    </div>

                                    <div class="row buttons">
                                        <div class="col-lg-12" style="margin-top: 8px;">
                                            <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('app','Create') : 'Save',array('class'=>'btn btn-success btn-md pull-right')); ?>
                                        </div>
                                    </div>

                                    <?php $this->endWidget(); ?>

                                </div><!-- form -->
                            </div>
                        </div>
                    </div>
                 </div>
            <?php }?>
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