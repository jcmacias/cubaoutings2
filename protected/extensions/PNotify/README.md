## PNotify

I just quickly wrote a widget for the JQuery plugin **Pines Notify - Notifications for Bootstrap or jQuery UI**. 

Check the [Pines Notify Website](http://pinesframework.org/pnotify/) for examples and dokumentation. 

Also have a look at this extension: [Pines Tags](http://www.yiiframework.com/extension/ptags/)

##Requirements

Yii 1.1 or above

##Usage
Just extract the files in your extensions directory.

There are three ways to use this widget: the **very simple** way, the **normal** way, and the **flash messages** way.

### The very simple way
This will create a very simple notification without a title and any options. Just submit a "message". Any given options will be ignored.
~~~php

$this->widget('application.extensions.PNotify.PNotify',array( 
    'message'=>'I am really a very simple notification')
);
~~~
Result:
~~~
$.pnotify("I am really a very simple notification");
~~~

### The normal way
Here we go: DONT use the key "message", fill the notification with options.
~~~php

$this->widget('application.extensions.PNotify.PNotify',array(
    'options'=>array(
        'title'=>'You did it!',
        'text'=>'This notification is awesome! Awesome like you!',
        'type'=>'success',
        'closer'=>false,
        'hide'=>false))
);
~~~
Result:
~~~
$.pnotify({'title':'You did it!','text':'This notification is awesome! Awesome like you!','type':'success','closer':false,'hide':false});
~~~
### Using with Flash messages
~~~php

  $this->widget('application.extensions.PNotify.PNotify',
          array(
              'flash_messages_only' => true,
          )
  );
~~~
And then when you do:
~~~php
Yii::app()->user->setFlash('success', array('title' => 'Login Successful!', 'text' => 'You successfully logged in. Enjoy!'));
~~~
You get the nice message because of:
~~~
$.pnotify({'type':'success','title':'Login Successful!','text':'You successfully logged in. Enjoy!'});
~~~
## Options
You can use ALL the options Pines Notify offers. 
~~~php
$_default_options=array(
  		'title'=>false,
			'title_escape'=>false,
			'text'=>false,
			'text_escape'=>false,
			'styling'=>"bootstrap",
			'addclass'=>"",
			'cornerclass'=>"",
			'nonblock'=>false,
			'nonblock_opacity'=>.2,
			'history'=>true,
			'auto_display'=>true,
			'width'=>"300px",
			'min_height'=>"16px",
			'type'=>"notice",
			'icon'=>true,
			'animation'=>"fade",
			'animate_speed'=>"slow",
			'opacity'=>1,
			'shadow'=>true,
			'closer'=>true,
			'closer_hover'=>true,
			'sticker'=>true,
			'sticker_hover'=>true,
			'hide'=>true,
			'delay'=>8000,
			'mouse_reset'=>true,
			'remove'=>true,
			'insert_brs'=>true,
			'stack'=>array(
				'dir1'=>'down',
				'dir2'=>'left',
				'push'=>'bottom',
				'spacing1'=>25,
				'spacing2'=>25,
				),
			);
~~~

##Resources

 * [Pines Notify](http://pinesframework.org/pnotify/)
 * [Try out a bunch of demos](http://pinesframework.org/pnotify/#demos-simple)
 * [Yii extension: fancybox](http://www.yiiframework.com/extension/fancybox) (I have stolen the widget skeleton code :D )
