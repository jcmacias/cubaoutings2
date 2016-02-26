<?php
/* @var $this PhotoController */
/* @var $data Photo */
?>
<li>
    <div data-alt="<?php echo Yii::t('app',$data->tours->name)?>" data-description="<h3><?php echo Yii::t('app',$data->tours->name) ?></h3>" data-max-width="1800"
         data-max-height="2400">
        <div data-src="<?php echo Yii::app()->baseUrl . '/images/'.$data->direction;?>" data-min-width="1300"></div>
<div data-src="<?php echo Yii::app()->baseUrl . '/images/'.$data->direction;?>" data-min-width="1000"></div>
<div data-src="<?php echo Yii::app()->baseUrl . '/images/'.$data->direction;?>" data-min-width="700"></div>
        <div data-src="<?php echo Yii::app()->baseUrl . '/images/'.$data->direction;?>"
             data-min-width="300"></div>
        <div data-src="<?php echo Yii::app()->baseUrl . '/images/'.$data->direction;?>"
             data-min-width="200"></div>
        <div data-src="<?php echo Yii::app()->baseUrl . '/images/'.$data->direction;?>"
             data-min-width="140"></div>
        <!--<div data-src="images/xsmall/1.jpg"></div>
        <noscript>
            <img src="images/xsmall/1.jpg" alt="img01"/>
        </noscript>-->
    </div>
</li>
