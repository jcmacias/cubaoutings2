<?php
/* @var $this AccommodationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accommodations',
);
if(!Yii::app()->user->isGuest){
$this->menu=array(
	array('label'=>'Create Accommodations', 'url'=>array('create')),
	array('label'=>'Manage Accommodations', 'url'=>array('admin')),
);
}else{
    $this->menu=array(
        array('label'=>Yii::t('app','Havana day tour'),'url'=>array('tours/view','id'=>8)),
        array('label'=>Yii::t('app','Trinidad & Cienfuegos '),'url'=>array('tours/view','id'=>11)),
        array('label'=>Yii::t('app','Matanzas, Cárdenas, & Varadero'),'url'=>array('tours/view','id'=>7)),
        array('label'=>Yii::t('app','Havana & Tropicana '),'url'=>array('tours/view','id'=>14)),
        array('label'=>Yii::t('app','Three cities tour'),'url'=>array('tours/view','id'=>13)),
        array('label'=>Yii::t('app','Guama and the Bay of Pigs'),'url'=>array('tours/view','id'=>12)),
        array('label'=>Yii::t('app','Havana and the cannon shot'),'url'=>array('tours/view','id'=>15)),
        array('label'=>Yii::t('app','Transfers'),'url'=>array('transfer')),

    );
}
?>
<!--SECTION ACCOMMODATIONS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text"><?php echo Yii::t('app','Accommodations');?></h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
      <?php echo Yii::t('app','The best place to enjoy your stay.');?>
    </h6>
</div>
<?php if(Yii::app()->getLanguage()=='en'){ ?>
<div class="col-lg-12">
    <strong><p>Stay in a private house.</p></strong>
    <p>When you stay in a private house in Cuba you can say you know the local culture and gain some advantages.</p>
    <div style="padding-left: 12px;">
        <p><i class="icon-ok"></i>  There is availability in all the cities you would like to visit(Varadero, Matanzas, Havana, Trinidad, Cienfuegos, Viñales, etc).</p>
        <p><i class="icon-ok"></i>  You can stay in the heart of the city  to live the local culture.</p>
        <p><i class="icon-ok"></i>  You can choose the size of the room depending on the amount of visitors.</p>
        <p><i class="icon-ok"></i>  We  guarantee you privacy, however you can interact with a Cuban family as if you were a local.</p>
        <p><i class="icon-ok"></i>  They have very good prices, which could change depending on the season(from 30.00 up to 70.00).</p>
    </div>

    <hr class="featurette-divider">
</div>
<?php } if(Yii::app()->getLanguage()=='fr'){ ?>
<div class="col-lg-12">
    <strong><p>En logeant dans une maison particulière à Cuba.</p></strong>
    <p>Vous pouvez vous vanter de connaître la culture local, car vous y gagner des avantages.</p>
    <div style="padding-left: 12px;">
        <p><i class="icon-ok"></i>  Il y a des maisons particulières disponibles dans toutes les villes que vous visiterez (Varadero, Matanzas, Havane, Trinidad, Cienfuegos, Viñales, etc).</p>
        <p><i class="icon-ok"></i>  Vous pouvez vous installer au coeur de la ville pour être au contact de la culture local.</p>
        <p><i class="icon-ok"></i>  Vous pouvez choisir tout type de chambre selon le nombre de visiteurs que vous êtes.</p>
        <p><i class="icon-ok"></i>  Nous vous garantissons la privacité; toute fois, vous pouvez échanger avec une famille cubaine tout comme si vous étiez de l'endroit.</p>
        <p><i class="icon-ok"></i>  Les prix sont abordables et varient suivant la saison (à hauteur de 30.00 à 70.00 Pesos convertibles).</p>
    </div>

    <hr class="featurette-divider">
</div>
<?php } if(Yii::app()->getLanguage()=='it'){ ?>
    <div class="col-lg-12">
        <strong><p>Alloggio in un’abitazione privata.</p></strong>
        <p>Quando soggiornerete in un’abitazione privata a Cuba potrete dire di conoscere la cultura del posto ed avere numerosi vantaggi.</p>
        <div style="padding-left: 12px;">
            <p><i class="icon-ok"></i>  Ci sono disponibilità di abitazioni in tutte le città che vorrete visitare (Varadero, Matanzas, Avana, Trinidad, Cienfuegos, Viñales, ecc).</p>
            <p><i class="icon-ok"></i>  Potrete soggiornare nel cuore delle città per vivere la locale cultura.</p>
            <p><i class="icon-ok"></i>  Potrete scegliere le dimensioni delle stanze in corrispondenza del numero degli ospiti.</p>
            <p><i class="icon-ok"></i>  Noi garantiremo la vostra privicy, lasciandovi comunque interagire con famiglie cubane come se foste parte di loro.</p>
            <p><i class="icon-ok"></i>  Avrete prezzi competitivi che varieranno a seconda della stagione (da 30,00 fino a 70,00).</p>
        </div>

        <hr class="featurette-divider">
    </div>
<?php }?>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>'{summary}{items} {pager}',
    'pagerCssClass'=>'CLinkPager pull-right',
    'pager'=>array(
        'header' => '',
        'htmlOptions'=>array('class'=>'pagination pagination-sm',),
    ),
));
?>
