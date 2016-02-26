<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 24/06/14
 * Time: 15:03
 */
$this->breadcrumbs = array(
    'Transfers',
);
if (!Yii::app()->user->isGuest) {
    $this->menu = array(
        array('label' => 'Create Tours', 'url' => array('create')),
        array('label' => 'Manage Tours', 'url' => array('admin')),
    );
} else {
    $this->menu = array(
        array('label' => Yii::t('app', 'Havana day tour'), 'url' => array('view', 'id' => 8)),
        array('label' => Yii::t('app', 'Trinidad & Cienfuegos '), 'url' => array('view', 'id' => 11)),
        array('label' => Yii::t('app', 'Matanzas, Cárdenas, & Varadero'), 'url' => array('view', 'id' => 7)),
        array('label' => Yii::t('app', 'Havana & Tropicana '), 'url' => array('view', 'id' => 14)),
        array('label' => Yii::t('app', 'Three cities tour'), 'url' => array('view', 'id' => 13)),
        array('label' => Yii::t('app', 'Guama and the Bay of Pigs'), 'url' => array('view', 'id' => 12)),
        array('label' => Yii::t('app', 'Havana and the cannon shot'), 'url' => array('view', 'id' => 15)),
        array('label' => Yii::t('app', 'Transfers'), 'url' => array('transfer')),

    );
}
?>
<!--SECTION TOURS -->
<div class="section-header" id="contact">

    <!-- SECTION TITLE -->
    <h2 class="dark-text">Trasferimenti</h2>

    <!-- SHORT DESCRIPTION ABOUT THE SECTION -->
    <h6>
        Cubaoutings offre trasferimenti da e per tutte le destinazioni.
    </h6>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
                <p> Cubaoutings offre trasferimenti per tutte le destinazioni. Informateci sul numero delle persone,
                    bagagli, posto di incontro ed orari. Saremo lì puntuali. Vi condurremo presso casa privata, città,
                    aereoporto o hotel. Dateci il vostro indirizzo! Vi garantiamo eccellenti automobili ed esperti
                    guidatori cosi da farvi sentire sicuri e rilassati.</p>
            </div>
        </div>
    </div>


</div>