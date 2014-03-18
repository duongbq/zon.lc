
<div>

    <div id="logo">
        <?php
        echo $this->Html->image('/images/logo.png', array(
            'fullBase' => TRUE,
            'url' => '/'
        ));
        ?>
    </div>

    <ul id="navigation">
        <!--<li class="selected">-->
        <li>
            <?php echo $this->Html->link('Home', array('controller' => 'pages', 'action' => 'display', 'home')); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Wedding', '/wedding'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Portraits', '/portraits'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Models', '/models'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Blogs', '/blogs'); ?>
        </li>
        <li>
            <?php echo $this->Html->link('Contact', '/contact'); ?>
        </li>
        <li>
            <?php
            echo $this->Html->image('chrome://browser/skin/feeds/feedIcon.png', array(
                'fullBase' => TRUE,
                'url' => '/blogs/index.rss'
            ));
            ?>
        </li>
    </ul>

</div>

