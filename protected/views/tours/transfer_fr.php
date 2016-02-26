<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 24/06/14
 * Time: 15:03
 */
$this->breadcrumbs=array(
    'Transfers',
);
if(!Yii::app()->user->isGuest){
    $this->menu=array(
        array('label'=>'Create Tours', 'url'=>array('create')),
        array('label'=>'Manage Tours', 'url'=>array('admin')),
    );
}else{
    $this->menu=array(
        array('label'=>Yii::t('app','Havana day tour'),'url'=>array('view','id'=>8)),
        array('label'=>Yii::t('app','Trinidad & Cienfuegos '),'url'=>array('view','id'=>11)),
        array('label'=>Yii::t('app','Matanzas, Cárdenas, & Varadero'),'url'=>array('view','id'=>7)),
        array('label'=>Yii::t('app','Havana & Tropicana '),'url'=>array('view','id'=>14)),
        array('label'=>Yii::t('app','Three cities tour'),'url'=>array('view','id'=>13)),
        array('label'=>Yii::t('app','Guama and the Bay of Pigs'),'url'=>array('view','id'=>12)),
        array('label'=>Yii::t('app','Havana and the cannon shot'),'url'=>array('view','id'=>15)),
        array('label'=>Yii::t('app','Transfers'),'url'=>array('transfer')),

    );
}
?>
<!--SECTION TOURS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Transferts</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Cubaoutings, nous vous offrons des transferts à n’importe quelle destination.
    </h6>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
                <p>A Cubaoutings, nous vous offrons des transferts à n'importe quelle destination. Précisez-nous juste le nombre de personnes, la quantité de vos bagages, votre lieu et heure de départ, et nous y serons en toute ponctuallité. Nous vous conduirons à n'importe quelle maison particulière, ville, hôtel, ou aéroport. Donnez-nous juste votre adresse! Nous disposons d'agréables véhicules et de chauffeurs qui vous promettent sécurité et confort dans votre déplacement.</p>
            </div>
        </div>
    </div>


</div>