<?php
/* @var $this ToursController */
/* @var $data Tours */
?>

<?php
$photos=Photo::model()->getPhotosToursPrincipal($data->id);
//echo '<pre>';
//print_r($photos);
//echo '</pre>';
//die;
?>
<div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
    <div class="post-thumb">
        <a href="#">
            <?php if(count($photos)>0){?>
                <?php
                echo CHtml::image(Yii::app()->baseUrl . '/images/'.$photos[0]->direction,$photos[0]->name,array("style"=>"height: 180px; width: 100%;",'class'=>'img-responsive'));
            }else{
                echo "<span style='font-size: 129px;padding-left: 56px;'><i class=' icon-camera-retro'></i></span>";
            }
            ?>
        </a>

        <div class="post-meta">
            <span><i class="fa fa-comments-o"></i> <?php echo $this->getCommentsNum($data->id);?> Comments</span>
<!--            <span><i class="fa fa-heart"></i> 0 Likes</span>-->
        </div>
        <div class="post-icon">
            <i class="fa fa-pencil"></i>
        </div>
    </div>
    <div class="entry-header">
        <h3 class="tours_h3">
            <?php echo CHtml::link(Yii::t('app',$data->name), array('view', 'id'=>$data->id)); ?>
        </h3>

<!--        <span class="date">June 26, 2014</span>-->
<!--        <span class="cetagory">in <strong>Photography</strong></span>-->
    </div>
    <div class="entry-content">
        <?php
        if(Yii::app()->getLanguage() == 'en'){
            echo $data->preview;
        }
        if(Yii::app()->getLanguage() == 'fr'){
            if($data->preview_fr != null)
            {
                echo $data->preview_fr;
            }else{
                echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> French translation not found for this tour.
                            </div>';
            }
        }
        if(Yii::app()->getLanguage() == 'es'){
            if($data->preview_es != null)
            {
                echo $data->preview_es;
            }else{
                echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> Spanish translation not found for this tour.
                            </div>';
            }
        }
        if(Yii::app()->getLanguage() == 'it'){
            if($data->preview_it != null)
            {
                echo $data->preview_it;
            }else{
                echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> Italian translation not found for this tour.
                            </div>';
            }
        }if(Yii::app()->getLanguage() == 'ru'){
            if($data->preview_ru != null)
            {
                echo $data->preview_ru;
            }else{
                echo '<div class="alert alert-dismissable alert-danger">
                            <strong>We Sorry!</strong> Russian translation not found for this tour.
                            </div>';
            }
        }

        ?>
    </div>
</div>
