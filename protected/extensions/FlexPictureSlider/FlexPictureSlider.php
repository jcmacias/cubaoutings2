<?php

/**
 * FlexPictureSlider
 * =================
 * This extension adjusts the pictures to specified width and height without stretch or changing picture's ratio.
 * So there is no need to resize your image or worry about the resolution of user's screen
 * The extension uses javascript functions to show a centered part for each picture.
 * Links:
 * - FlexPictureSlider demo: http://www.webkit.gr/index.php/Apps/mountains
 * - FlexPictureSlider site: http://www.yiiframework.com/extension/TODO
 *
 * @version 1.0
 * @author Konstaninos Apazidis <konapaz@gmail.com>
 * @date 13 Marc 2013
 * */
class FlexPictureSlider extends CWidget {

    private $assets;
    public $imageBlockSelector = '#block-region-images';
    public $widthSlider = 0;
    public $heightSlider = 0;
    public $timeBetweenChangeSlider = 6000;
    public $timeDelayAnimation = 1000;
    public $slideUnitSize = 'px';
    public $sliderStartFrom = 0; //if sliderSuffle set 'random' then random start and is irrelevant to set 0,1,2,3 etc
    public $sliderSuffle = true; //suffle the pictures

    public function init() {
        $this->assets = Yii::app()->getAssetManager()->publish(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets/js');
        Yii::app()->getClientScript()->registerScriptFile($this->assets . '/slider.js', CClientScript::POS_END);
    }

    public function run() {
        Yii::app()->getClientScript()->registerCss('css-slider', "
        $this->imageBlockSelector {
            position:relative;
            overflow: hidden;
        }
        $this->imageBlockSelector img {
            position:absolute;
            
        }
        ", 'screen', CClientScript::POS_BEGIN);

        Yii::app()->getClientScript()->registerScript('slider.variables', "
             var imageBlockSelector='$this->imageBlockSelector';
             var widthSlider = $this->widthSlider; 
             var heightSlider = $this->heightSlider;
             var timeBetweenChangeSlider =  $this->timeBetweenChangeSlider; 
             var timeDelayAnimation = $this->timeDelayAnimation;
             var slideUnitSize = '$this->slideUnitSize';
			 var sliderStartFrom = '$this->sliderStartFrom';
			 var sliderSuffle= '$this->sliderSuffle';
             ", CClientScript::POS_BEGIN);
    }

}

?>
