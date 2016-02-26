<?php
class FBLikeBox extends CWidget
{
    /**
	 * site url
	 */
    public $username;
    /**
	 * Language
	 */
    public $lang;
	/**
	 * width of fb comment box
	 */
	public $width;
    /**
	 * height of fb comment box
	 */
	public $height;
	/**
	 * show faces
	 */
	public $show_faces;
    /**
	 * color scheme
	 */
	public $color_scheme;
    /**
	 * show stream
	 */
	public $show_stream;
    /**
	 * show border
	 */
	public $show_border;
    /**
	 * show header
	 */
	public $show_header;
    
    public function init()
	{
		// initiliaze parameters. set default values
        //https://www.facebook.com/FacebookDevelopers
        if (!empty($this->username)) $this->username = $this->username;
        if (empty($this->lang)) $this->lang = 'en_US';
        if (empty($this->width)) $this->width = 292;
        if (empty($this->height)) $this->height = 550;
        if (empty($this->show_faces)) $this->show_faces = true;
        if (empty($this->color_scheme)) $this->color_scheme = 'light';
        if (empty($this->show_stream)) $this->show_stream = true;
        if (empty($this->show_border)) $this->show_border = true;
        if (empty($this->show_header)) $this->show_header = true;
	}
    
	public function run()
	{
        if (!empty($this->username)) {
            $html = '<div class="fb-like-box" data-href="https://www.facebook.com/'.$this->username.'" data-width="'.$this->width.'" data-height="'.$this->height.'" data-show-faces="'.$this->show_faces.'" data-colorscheme="'.$this->color_scheme.'" data-stream="'.$this->show_stream.'" data-show-border="'.$this->show_border.'" data-header="'.$this->show_header.'"></div>';
        
            echo '<div id="fb-root"></div>
                '.$this->js.$html;
        } else {
            echo '<div style="width:100%;padding:10px;color:#FF0000">Username not found!</div>';
        }
	}
    
    /**
	 * Renders the contents of the <script> tag
	 *
	 * @return string
	 */
	public function getJs()
	{
        $ret = '<script>
                    (function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/'.$this->lang.'/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, "script", "facebook-jssdk"));
                </script>';
        
        return $ret;
	}
	
}
?>