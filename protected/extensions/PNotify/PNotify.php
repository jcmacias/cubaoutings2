<?php

/*
 * PNotify widget class file.
 
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:

 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.

 * PNotify extends CWidget and implements a base class for a tag-managing widget.
 * more about Pines Tags can be found at http://pinesframework.org/PNotify/
 * @version: 0.1
 */

class PNotify extends CWidget
{

  // @ string for simply note
  public $message = false;
  // @ array of options settings
  public $options = array();
  // @ boolean to specify using this widget for flash messages or not
  public $flash_messages_only = false;
  
  public $userComponentId = "user";

  // function to init the widget
  public function init() {
    // if not informed will generate Yii defaut generated id, since version 1.6
    if (!isset($this->id))
      $this->id = $this->getId();
    // publish the required assets
    $this->publishAssets();
  }

  // function to run the widget
  public function run() {
    if ($this->message) {

      Yii::app()->clientScript->registerScript('PNotify_' . $this->id, '
				$.pnotify("' . $this->message . '");
			', CClientScript::POS_READY);
    }
    else {
      $options = $this->buildOptions(); // Get default options.
      
      if ($this->flash_messages_only) {
        foreach(Yii::app()->getComponent($this->userComponentId)->getFlashes() as $type => $message) {
          $options['type'] = $type;
          if (is_string($message)) {
            $options['text'] = $message;            
          }
          else if (is_array($message)) {
            foreach($message as $key => $value) {
              $options[$key] = $value;
            }
          }
        
          $options_js = CJavaScript::encode($options);
          $options_js = preg_replace('#\s+#', ' ', $options_js);

          Yii::app()->clientScript->registerScript('PNotify_' . $this->id . "_" . $type, '
				    $.pnotify(' . $options_js . ');
			    ', CClientScript::POS_READY);
        }
      }
      else {
        $options_js = CJavaScript::encode($options);
        $options_js = preg_replace('#\s+#', ' ', $options_js);
        Yii::app()->clientScript->registerScript('PNotify_' . $this->id, '
            $.pnotify(' . $options_js . ');
            ', CClientScript::POS_READY);
      }
    }
  }

  // function to publish and register assets on page 
  public function publishAssets() {
    $assets = dirname(__FILE__) . '/assets/js';
    $baseUrl = Yii::app()->assetManager->publish($assets);

    if (is_dir($assets)) {
      Yii::app()->clientScript->registerCoreScript('jquery');
      Yii::app()->clientScript->registerCssFile($baseUrl . '/jquery.pnotify.default.css');
      Yii::app()->clientScript->registerScriptFile($baseUrl . '/jquery.pnotify.min.js', CClientScript::POS_HEAD);
    }
    else {
      throw new Exception('PNotify - Error: Couldn\'t find assets to publish.');
    }
  }

  private function buildOptions() {
    $_build_options = array();
    $_default_options = array(
        'title' => false,
        'title_escape' => false,
        'text' => false,
        'text_escape' => false,
        'styling' => "bootstrap",
        'addclass' => "",
        'cornerclass' => "",
        'nonblock' => false,
        'nonblock_opacity' => .2,
        'history' => true,
        'auto_display' => true,
        'width' => "300px",
        'min_height' => "16px",
        'type' => "notice",
        'icon' => true,
        'animation' => "fade",
        'animate_speed' => "slow",
        'opacity' => 1,
        'shadow' => true,
        'closer' => true,
        'closer_hover' => true,
        'sticker' => true,
        'sticker_hover' => true,
        'hide' => true,
        'delay' => 8000,
        'mouse_reset' => true,
        'remove' => true,
        'insert_brs' => true,
        'stack' => array(
            'dir1' => 'down',
            'dir2' => 'left',
            'push' => 'bottom',
            'spacing1' => 25,
            'spacing2' => 25,
        ),
    );

    foreach ($this->options as $key => $value) {
      // check valid option
      if (!array_key_exists($key, $_default_options))
        continue;
      # unknown option

      # just add option if not default
      if ($value != $_default_options[$key]) {
        $_build_options[$key] = $value;
      }
    }

    return $_build_options;
  }

}

?>
