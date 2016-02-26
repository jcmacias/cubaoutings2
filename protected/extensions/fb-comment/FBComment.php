<?php
class FBComment extends CWidget
{
    /**
	 * site url
	 */
    public $url;
	/**
	 * width of fb comment box
	 */
	public $width;
	/**
	 * no. of posts
	 */
	public $posts;
    
    public function init()
	{
		// initiliaze parameters. set default values
        if (empty($this->width)) $this->width = 470;
        if (empty($this->posts)) $this->posts = 10;
        
	}
    
	public function run()
	{
        $html = '<div class="fb-comments" data-href="'.$this->url.'" data-width="'.$this->width.'" data-num-posts="'.$this->posts.'"></div>';
        
		echo '<div id="fb-root"></div>
            '.$this->js.$html;
	}
    
    /**
	 * Renders the contents of the <script> tag
	 *
	 * @return string
	 */
	public function getJs()
	{
        $ret = '<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>';
        
        
        return $ret;
	}
	
}
?>