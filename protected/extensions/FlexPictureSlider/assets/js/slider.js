/**
 * @preserve FlexPictureSlider v 1.0 2013-03-10
 * http://www.webkit.gr
 *
 * Copyright (c) 2013, Konapaz
 * Licensed under the NEW BSD license.
 */
$(document).ready(function() {
  
    var widthType,heightType;

    var typePosition = 'relative'; //OR 'absolute'
 
    if (typePosition=='relative') {
        widthType = 'margin-left';
        heightType='margin-top';
    } else {
        widthType = 'left';
        heightType= 'top';
    }
   
    setNewBackSize();

    var max_slides;
    var mymaps = new Array();


    $(window).resize(function() {
        setNewBackSize();
    });
  
    max_slides=$(imageBlockSelector + ' img').length;
    for (var a=0; a<max_slides; a++) {
        mymaps[a]=a+1;
    }
	
	
	var j;
	if (sliderSuffle==true) { //j = (slideRandomStart) ? parseInt(Math.random() * i):0
      for(var x,i = mymaps.length; j=parseInt(Math.random() * i), i; x = mymaps[--i], mymaps[i] = mymaps[j], mymaps[j] = x);
   }
   
    j = sliderStartFrom;
   
   
	
    var cur_slide= parseInt(sliderStartFrom)+1;//start from set slide
    $(imageBlockSelector + " img:nth-of-type("+mymaps[cur_slide-1]+")").css('opacity','1.0').show().siblings('img').css('opacity','0.0').hide();

    $(imageBlockSelector + ' img').load(function() {
        setNewBackSize();
    });
  
    function setNewBackSize(){
        
        $(imageBlockSelector).css({
            'width':widthSlider+slideUnitSize,
            'height':heightSlider+slideUnitSize
        });
         
         
         
        $(imageBlockSelector + ' img').each(function(){
            setNewBackSizeImg(this);
        });
    }
  
    function setNewBackSizeImg(t_this){
        
        var wo=$(t_this).css('width','auto').css('height','auto').width();
        var ho=$(t_this).css('width','auto').css('height','auto').height();
	
        var Tw=widthSlider;
        var Th=heightSlider;
        
        var top=0,left=0;
        
        var wn,hn;
        
        wn=Tw;
        hn=(ho*Tw/wo);
        
        if (hn<Th) {
            hn=Th;
                
            wn=(wo*Th/ho);
            left=-(wn-Tw)/2;
                
        } else {
            top=-(hn-Th)/2;    
        }

        $(t_this).css('width',wn + slideUnitSize).css('height',hn+slideUnitSize).css(widthType,left+slideUnitSize).css(heightType,top+slideUnitSize);
         
    }

    setInterval(changeslide, timeBetweenChangeSlider);

    function changeslide(){
        if (max_slides<1) return; //no other images
        backslide=cur_slide;
        cur_slide = (cur_slide+1);
        if (cur_slide > max_slides) cur_slide =1;
        
        //console.log (backslide + " --> " + mymaps[backslide-1]);
        //console.log (cur_slide + " --> " + mymaps[cur_slide-1]);
        
        $(imageBlockSelector + " img:nth-of-type("+mymaps[cur_slide-1]+")").show().animate({
            opacity: 1.0
        }, timeDelayAnimation,'linear'); /* show() == for ie8 */
        $(imageBlockSelector + " img:nth-of-type("+mymaps[backslide-1]+")").animate({
            opacity: 0.0
        }, timeDelayAnimation,'linear',function() {
            $(this).hide()/*for ie8 */
        });
        
    }
});