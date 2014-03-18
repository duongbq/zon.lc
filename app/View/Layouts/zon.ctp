<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo isset($title_for_layout) ? $title_for_layout : ''; ?>
        </title>
        <?php
        echo $this->Html->meta(
                'keywords', isset($keywords_for_layout) ? $keywords_for_layout : ''
        );
        echo $this->Html->meta(
                'description', isset($description_for_layout) ? $description_for_layout : ''
        );
        echo $this->Html->meta(array('name' => 'robots', 'content' => isset($robots_content_for_layout) ? $robots_content_for_layout : 'noindex'));

        echo $this->Html->meta(
                'favicon.ico', '/favicon.ico', array('type' => 'icon')
        );

        echo $this->Html->css('style');


//        echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
        echo $this->Html->script('jquery.min.v1.7.1.js');

        echo $this->Html->css('/fancybox/jquery.fancybox-1.3.4');

        echo $this->Html->script('/fancybox/jquery.mousewheel-3.0.4.pack');
        echo $this->Html->script('/fancybox/jquery.fancybox-1.3.4.pack');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>


    </head>
    <body>

        <div id="header">
            <?php echo $this->element('zon/header'); ?>
        </div>

        <div id="contents">
            <div>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>

        <div id="footer">
            <?php echo $this->element('zon/footer'); ?>
        </div>

        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>
